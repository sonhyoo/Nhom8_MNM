<?php

namespace App\Http\Requests\Backend\Product;

use Illuminate\Foundation\Http\FormRequest;

use Validator;
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
     * @return array
     */
    public function rules()
    {
        return [
            'product_name' => 'required|min:5|max:200|unique:products',
            'price' => 'required',
            'image' => 'required',
            'prdescriptions'=>'required|min:3|max:1000',
            'prkeywords'=>'required|min:10|max:200',
            'category_id'=>'required',
            'status' => 'required',
            'qty_nhap' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'product_name.required' => 'Vui lòng nhập tên',
            'product_name.max' => 'Tên chỉ tối đa 200 kí tự',
            'product_name.min' => 'Tên tối thiểu 5 kí tự',
            'product_name.unique' => 'Tên đã tồn tại',
            'price.required' => 'Vui lòng nhâp giá tiền',
            'image.required' => 'Vui lòng chọn ảnh sản phẩm',
            'prdescriptions.required' => 'Vui lòng nhập mô tả',
            'prdescriptions.max' => 'Tối đa 1000 kí tự',
            'prdescriptions.min' => 'Tối thiểu 3 kí tự',
            'prkeywords.required' => 'Vui lòng nhập key',
            'prkeywords.max' => 'Tối đa 200 kí tự',
            'prkeywords.min' => 'Thiểu 10 kí tự',
            'category_id.required' => 'Mã danh mục không được để trống',
            'status.required' => 'Trạng thái không được để trống',
            'qty_nhap.required' => 'Số lượng không được để trống'
        ];
    }

}
