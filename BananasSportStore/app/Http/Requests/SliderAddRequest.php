<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderAddRequest extends FormRequest
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
            'name' => 'bail|required|unique:sliders|max:255|min:10',
            'description' => 'required',
            'image_path' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'name.unique' => 'Tên không được phép trùng nhau',
            'name.max' => 'Tên không được dài quá 255 ký tự',
            'name.min' => 'Tên không được ít hơn 10 ký tự',
            'description.required' => 'Mô tả không được để trống',
            'image_path.required' => 'Hình ảnh không được để trống',
        ];
    }
}
