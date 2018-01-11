<?php

namespace fantasias\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        return ['email'=>'email|required|unique:users',
                'password' =>'required|min:4'];
    }

    public function message(){
        return [
            'required' => 'Há algum erro no :attribute'
        ];
    }
}
