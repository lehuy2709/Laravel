<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSizeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:sizes',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên Size bắt buộc nhập !',
            'name.unique' => 'Size !',

        ];
    }
}
