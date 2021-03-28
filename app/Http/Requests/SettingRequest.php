<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'logo' => 'required|max:255',
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|max:255',
            'whatsapp' => 'max:255',
            'instagram' => 'max:255',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes(): array
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
    public function messages(): array
    {
        return [
            'logo.required' => 'Поле "Логотип" обязательно к заполеннию!',
            'logo.max' => 'Поле "Логотип" не должно быть более 255 символов!',
            'name.required' => 'Поле "Название" обязательно к заполеннию!',
            'name.max' => 'Поле "Название" не должно быть более 255 символов!',
            'address.required' => 'Поле "Адрес" обязательно к заполеннию!',
            'address.max' => 'Поле "Адрес" не должно быть более 255 символов!',
            'phone.required' => 'Поле "Телефон" обязательно к заполеннию!',
            'phone.max' => 'Поле "Телефон" не должно быть более 255 символов!',
            'whatsapp.max' => 'Поле "Whatsapp" не должно быть более 255 символов!',
            'instagram.max' => 'Поле "Instagram" не должно быть более 255 символов!',
        ];
    }
}
