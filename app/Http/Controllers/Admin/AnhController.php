<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Truyen;
use App\Services\AnhService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AnhController extends Controller
{
    private $photoService;

    public function __construct(AnhService $photoService)
    {
        $this->photoService = $photoService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $activeFolder = \request()->get('path');

        $dir = $this->photoService->getDirs(public_path() . '/uploads', true);

        if (!$activeFolder) {
            $activeFolder = array_key_first($dir);
        } else {
            $activeFolder = explode('-', $activeFolder);

            $activeFolder = $activeFolder[0];
        }

        $photos = Truyen::where('anh_bia', 'like', '%' . $activeFolder . '%')->paginate(10);

        return view('admin.anh.danh-sach', compact('dir', 'activeFolder', 'photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $dir = $this->photoService->getDirs(public_path() . '/uploads', true);
        return view('admin.anh.tao-moi', compact('dir'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        try {
            $dataUpload = $request->all();

            $uploadPath = '/uploads/' . $dataUpload['dir_upload'];

            $response = $this->photoService->upload($uploadPath, $dataUpload['file']);

            return response()->json($response, 200);
        } catch (Exception $e) {
            throw $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
