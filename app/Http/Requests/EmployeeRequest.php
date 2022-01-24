<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'number'=> 'required|numeric',
            'experience'=> 'required',
            'salary'=> 'required'
        ]; 
    }

    public function messages(){
        return [
            'name.required'=>'يجب ادخال الاسم',
            'name.max:25'=>'الاسم كبير جدا ',
            //'name.unique'=>'الاسم موجود ',
            'number.numeric'=>'رقم الهاتف يجب ان يكون رقم ',
            'number.required'=>'يجب ادخال رقم الهاتف',
            'salary.required'=>'يجب ادخال الراتب ',
            'experience.required'=>'يجب تعبئة المعلومات'
        ];
    }
}
