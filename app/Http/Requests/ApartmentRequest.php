<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApartmentRequest extends FormRequest
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
            'apartment_name'=>'required|max:50|min:10',
            'address'=>'required',
            'price'=>'numeric',
            'avatar'=>'required|url',
            'status'=>'min:1|max:3'

        ];
    }


    public function messages()
    {
        return [
            'apartment_name.required'=>'The name of the apartment is a required field',
            'apartment_name.max'=>'The name of the apartment building cannot exceed 50 characters',
            'apartment_name.min'=>'The name of the apartment building must not be less than 10 characters',
            'address.required'=>'Address field is required',
            'price.numeric'=>'Price must be number',
            'avatar.required'=>'the avatar field cannot be left blank',
            'avatar.url'=>'Avatar must be an image link',
            'status.min'=>'State starts from 1',
            'status.max'=>'state must not exceed 3'
        ];
    }

}
