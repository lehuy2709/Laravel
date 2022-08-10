<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên sản phẩm không được để trống',
            'price.required' => 'Giá không được để trống',
            'price.numeric' => 'Giá phải là số',
            'description.required' => 'Mô tả bắt buộc nhập',
            'image.required' => 'image là bắt buộc !',
            'image.image' => "Phải là ảnh !",
            'image.mimes' => "Phải là định dạng jpeg , png , jpg !",
            'image.max' => "Tôi đa chỉ 2048 KB"
        ];
    }
}
