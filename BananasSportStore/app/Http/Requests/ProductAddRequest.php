<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class ProductAddRequest extends FormRequest
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
            'name' => 'bail|required|unique:products|max:255|min:10',
            'number_product' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'name.unique' => 'Tên không được phép trùng nhau',
            'name.max' => 'Tên không được dài quá 255 ký tự',
            'name.min' => 'Tên không được ít hơn 10 ký tự',
            'number_product.required' => 'Số lượng sản phẩm không được để trống',
            'price.required' => 'Giá không được để trống',
            'category_id.required' => 'Danh mục mà sản phẩm thuộc về không được để trống',
            'content.required' => 'Nội dung chi tiết mô tả sản phẩm không được để trống',
        ];
    }

}
