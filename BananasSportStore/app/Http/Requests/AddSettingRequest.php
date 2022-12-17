<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSettingRequest extends FormRequest
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
            'config_key' => 'bail|required|unique:settings|max:255|min:5',
            'config_value' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'config_key.required' => 'Tên config không được để trống',
            'config_key.unique' => 'Tên config không được phép trùng nhau',
            'config_key.max' => 'Tên config không được dài quá 255 ký tự',
            'config_key.min' => 'Tên config không được ít hơn 10 ký tự',
            'config_value.required' => 'Giá trị của config không được để trống',
        ];
    }
}
