<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            //
            'name'=>'required|unique:categories,name',
            'slug'=>'required|unique:categories,slug'
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'tên danh mục không được để trống',
            'name.unique'  =>'tên danh mục đã tồn tại',
            'slug.required'=>'slug không được để trống',
            'slug.unique'  =>'slug đã tồn tại',
        ];
    }
}
