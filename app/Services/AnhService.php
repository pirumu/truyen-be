<?php

namespace App\Services;

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class AnhService
{
    public function remove($photosPath)
    {

//        $filename = $request->id;
//        $uploaded_image = Upload::where('original_name', basename($filename))->first();

//        if (empty($uploaded_image)) {
//            return Response::json(['message' => 'Sorry file does not exist'], 400);
//        }

        $filePath = $photosPath . '/' ;//. $uploaded_image->filename;
        // $resized_file = $this->photos_path . '/' . $uploaded_image->resized_name;

        if (file_exists($filePath)) {
            unlink($filePath);
        }

//        if (file_exists($resized_file)) {
//            unlink($resized_file);
//        }

//        if (!empty($uploaded_image)) {
//            $uploaded_image->delete();
//        }

        return Response::json(['message' => 'File successfully delete'], 200);
    }
    public function upload($photosPath, $photos)
    {
        if (!is_array($photos)) {
            $photos = [$photos];
        }

        if (!is_dir(public_path($photosPath))) {
            mkdir(public_path($photosPath), 0777);
        }

        for ($i = 0; $i < count($photos); $i++) {
            $photo = $photos[$i];
            $name = sha1(date('YmdHis') . Str::random(30));
            $saveName = $name . '.' . $photo->getClientOriginalExtension();

            $resizeName = $name .  Str::random(2). '.' . $photo->getClientOriginalExtension();

            $photo->move(public_path($photosPath), $saveName);

        }

        return [
            'path' => substr_replace($photosPath,'',0,1).'/'.$saveName
        ];
    }

    public function listPhoto()
    {
    }

    public function listDir()
    {
        $dir = public_path().'/uploads';

        $directories = $this->expandDirectoriesMatrix($dir);

        return $this->showDirectories($directories);
    }

    public function expandDirectoriesMatrix($base_dir, $level = 0): array
    {
        $directories = [];

        foreach (scandir($base_dir) as $file) {
            if ($file == '.' || $file == '..') {
                continue;
            }
            $dir = $base_dir.DIRECTORY_SEPARATOR.$file;
            if (is_dir($dir)) {
                $directories[]= [
                    'level' => $level,
                    'name' => $file,
                    'path' => $dir,
                    'children' => $this->expandDirectoriesMatrix($dir, $level +1)
            ];
            }
        }
        return $directories;
    }
    public function showDirectories($list, $parent = [], $template = '')
    {
        foreach ($list as $directory) {
            $parent_name = count($parent) ? " parent: ({$parent['name']}" : '';

            $prefix = str_repeat('-', $directory['level']);

            $template .="<div class='gallery-menu-header'>{$directory['name']}</div>";

            if ($parent_name) {
                $template .= "<div class='gallery-menu-item'>" .
                    "<a href='#' class='gallery-menu-link'>" .
                    "<i class='fa fa-fw fa-image mr-1'></i>" .
                    "$prefix {$directory['name']}" .
                    "</a>" .
                    "</div>";
            }
            if (count($directory['children'])) {
                // list the children directories
                $this->showDirectories($directory['children'], $directory, $template);
            }
        }
        return $template;
    }

    /**
     * Copyright © 2020 Theodore R. Smith <https://www.phpexperts.pro/>
     * License: MIT
     *
     * @see https://stackoverflow.com/a/61168906/430062
     *
     * @param string $path
     * @param bool   $recursive Default: false
     * @param array  $filtered  Default: [., ..]
     * @return array
     */
    public function getDirs($path, $recursive = false, array $filtered = [])
    {
        if (!is_dir($path)) {
            throw new RuntimeException("$path does not exist.");
        }

        $filtered += ['.', '..'];

        $dirs = [];
        $d = dir($path);
        while (($entry = $d->read()) !== false) {
            if (is_dir("$path/$entry") && !in_array($entry, $filtered)) {
                $dirs[$entry] = $entry;

                if ($recursive) {
                    $newDirs = $this->getDirs("$path/$entry");
                    $dirs[$entry] = [];
                    foreach ($newDirs as $newDir) {
                        $dirs[$entry][] = "$newDir";
                    }
                }
            }
        }

        return $dirs;
    }
}
