<?php

namespace App\Http\Requests\Backend\Sale;

use Illuminate\Foundation\Http\FormRequest;

class SaleProductCreateRequest extends FormRequest
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
            'sale_name' => 'required',
            'sale_value'=>'required',
            'date_start' => 'required',
            'date_end' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'sale_name.required' => 'Tên ưu đãi không được để trống',
            'sale_value.required' => 'Giá trị ưu đãi không được để trống',
            'date_start.required' => 'Ngày bắt đầu ưu đãi không được để trống',
            'date_end.required' => 'Ngày kết thúc ưu đãi không được để trống'
        ];
    }
}
