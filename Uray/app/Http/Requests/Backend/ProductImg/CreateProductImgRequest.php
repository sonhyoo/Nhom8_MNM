<?php

namespace App\Http\Requests\Backend\ProductImg;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductImgRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'image_detail' => 'required',
            'product_id'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'img_detail.required' => 'Bạn chưa chọn ảnh',
            'product_id.required' => 'Bạn chưa nhập product_id'
        ];
    }
}
