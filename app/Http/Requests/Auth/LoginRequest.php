<?php

namespace App\Http\Requests\Auth;
use Illuminate\Foundation\Http\FormRequest;
use PharIo\Manifest\Email;

class LoginRequest extends FormRequest
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
            'email'=> 'required|email|exists:users,email ',//bắt buộc, đúng định dạng có tồn tại trong hẹ thống
            'password'=>'required | min:6 ' , //bắt buộc,tối thiểu 6 ký tự

        ];
    }
    public function messages()
    {
      return [
        
          'email.required' => 'Email la thong tin bat buoc!',
          'password.required'=> 'Password la thong tin bat buoc'
      ];
    }







}
