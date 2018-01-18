<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 12/22/17
 * Time: 7:09 PM
 */
namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class HallAdminRequest extends FormRequest{

    public function authorize(){
        return true;
    }

    public function rules(){
        return  [
            'first_name'=>['required'],
            'last_name'=>['required'],
            'username'=> ['required','unique:users'],
            'password'=>['required'],
            'hall'=>['required']
        ];
    }
    public function messages()
    {
        return [
            'first_name.require' => 'first name is required',
            'last_name.require' => 'last name is required',
            'username.require' =>  'username is required',
            'username.unique'   =>  'username already exists',
            'password.require' => 'password is required',
            'hall.require'     =>  'assign hall to this admin'
        ];
    }

}