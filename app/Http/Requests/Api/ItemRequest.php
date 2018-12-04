<?php

namespace App\Http\Requests\Api;

class ItemRequest extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch($this->method()) {
            case 'GET':
                return [
                    'per_page' => 'min:1|integer',
                ];

            case 'POST':
                return [
                    //
                ];

            case 'PUT':
            case 'PATCH':
                return [
                    //
                ];

            default:
                return [
                    //
                ];
        }
    }
}
