<?php

namespace App\Traits;

use Illuminate\Http\Response;
use Modules\API\Exceptions\LogicHandleException;

trait APIResponse
{
    public function getResponse($code, $message, $data = null, $error = null)
    {
        $responseData = [
            'code' => $code,
            'message' => $message,
            'data' => $data,
            'errors' => $error,
        ];

        return response()->json($responseData, $code);
    }

    public function getExceptionResponse(\Exception $e)
    {
        $statusCode = Response::HTTP_INTERNAL_SERVER_ERROR;
        $errors = $e->getMessage();
        if ($e instanceof LogicHandleException) {
            $statusCode = Response::HTTP_UNPROCESSABLE_ENTITY;
            $errors = $this->makeErrors($errors);
        }
        $message = Response::$statusTexts[$statusCode];

        $responseData = [
            'code' => $statusCode,
            'message' => $message,
            'data' => null,
            'errors' => $errors,
        ];

        return response()->json($responseData, $statusCode);
    }

    private function makeErrors($message)
    {
        $message = explode('=', $message);

        return [
            $message[0] => [$message[1]],
        ];
    }
}
