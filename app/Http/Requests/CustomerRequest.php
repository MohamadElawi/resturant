<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name'=> 'required|max:25',
            'number'=> 'required|numeric|min:10',
        ]; 
    }

    public function messages()
    {
        return [
            'name.required'=> 'the filed name is required ',
            'name.max:25'=> 'Name is greater than 25 characters',
            'number.required'=> 'the filed number is required',
            'number.min:10'=> 'The number is less than ten digits',
        ]; 
    }
}
