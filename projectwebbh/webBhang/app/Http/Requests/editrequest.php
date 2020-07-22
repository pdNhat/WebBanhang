<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editrequest extends FormRequest
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
              'img'=>'image|required',
            'description' => 'required'
        ];
    }
    public function messages()
    {
        return [
            //
             'description.required'=>'Phần miêu tả không được trống!',
             'img.image'=>'Bạn phải nhập file ảnh!',
             'img.required'=>'Ảnh không được trống!'
        ];
    }
}
