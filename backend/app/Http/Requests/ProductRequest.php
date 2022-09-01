<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            // 'name'=>'required|unique:products,name',
            // 'unit_price'=>'required',
            // 'slug'=>'required|unique:products,slug',
            // 'code'=>'required|unique:products,code',
            // 'categories'=>'required',

        ];
    }

    public function messages()
    {
        return[
            'name.required'      =>'tên sản phẩm không được để trống',
            'name.unique  '      =>'tên sản phẩm đã tồn tại',
            'unit_price.required'=>'giá bán không được để trống',
            'slug.required'      =>'slug không được để trống',
            'slug.unique'        =>'slug đã tồn tại',
            'code.required'      =>'code không được để trống',
            'code.unique'        =>'code đã tồn tại',
            'categories.required'=>'danh mục không đươc để trống',

        ];
    }
}
