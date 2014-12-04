<?php namespace Kash\Http\Admin\Requests\Auth;

use Kash\Http\Admin\Requests\Request;

class LoginRequest extends Request {


    public function rules()
    {
        return [
            'email' => 'required',
            'password' => 'required',
        ];
    }

    public function authorize(){}

}
