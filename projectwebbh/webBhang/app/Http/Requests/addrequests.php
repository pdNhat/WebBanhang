<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addrequests extends FormRequest
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
            //
            'name'=>'required|unique:icategory,ca_name'
        ];
    }
     public function messages()
    {
        return [
            //
             'name.required'=>'Danh mục không được trống!',
             'name.unique'=>'Danh mục đã bị trùng!'
        ];
    }
}
