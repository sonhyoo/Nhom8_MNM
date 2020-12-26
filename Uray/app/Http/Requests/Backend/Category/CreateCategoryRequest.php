<?php

namespace App\Http\Requests\Backend\Category;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest
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
            'name' => 'required|min:5|max:200|unique:categories',
            'description' => 'required|min:5|max:1000',
            'keywords' => 'required|min:2|max:10'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên',
            'name.max' => 'Tên chỉ tối đa 200 kí tự',
            'name.min' => 'Tên tối thiểu 5 kí tự',
            'name.unique' => 'Tên đã tồn tại',
            'description.required' => 'Không được để trống',
            'description.min' => 'Tối thiểu 5 kí tự',
            'description.max' => 'Tối đa 1000 kí tự',
            'keywords.required' => 'Không được để trống',
            'keywords.min' => 'Tối thiểu 2 kí tự',
            'keywords.max' => 'Tối đa chỉ 10 kí tự'
        ];
    }
}
