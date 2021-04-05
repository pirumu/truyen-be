<?php

namespace App\Http\Requests\API;

use Illuminate\Http\Response;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class BaseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
    * If validator fails return the exception in json form
    * @param Validator $validator
    * @return array
    */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            $this->getResponse(
            Response::HTTP_UNPROCESSABLE_ENTITY,
            Response::$statusTexts[Response::HTTP_UNPROCESSABLE_ENTITY],
            null,
            $validator->errors()
        )
        );
    }
}
