<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
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
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8|max:255',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [

            'name.required' => 'Поле "Имя пользователя" обязательно к заполеннию!',
            'min.max' => 'Поле "Имя пользователя" не должно быть менее 2-ух символов!',
            'name.max' => 'Поле "Имя пользователя" не должно быть более 255 символов!',
            'email.required' => 'Поле "Email" обязательно к заполнению!',
            'email.email' => 'Поле "Email" должно быть адресом электронной почты!',
            'email.max' => 'Поле "Email" не должно быть более 255 символов!',
            'email.unique' => 'Такой "Email" уже зарегистрирован!',
            'password.required' => 'Поле "Пароль" обязательно к заполнению!',
            'password.min' => 'Поле "Пароль" не должно быть менее 8-ми символов!',
            'password.max' => 'Поле "Пароль" не должно быть более 255 символов!',
        ];
    }
}
