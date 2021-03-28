<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
             'text_one' => 'required',
             'image_one' => 'required',
            'text_two' => 'required',
             'image_two' => 'required',
            'text_third' => 'required',
            'image_third' => 'required',
            'image_four' => 'required',
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
            'text_one.required' => 'Поле "Текст 1" обязательно к заполеннию!',
            'image_one.required' => 'Поле "Изображение 1" обязательно к заполеннию!',
            'text_two.required' => 'Поле "Текст 2" обязательно к заполеннию!',
            'image_two.required' => 'Поле "Изображение 2" обязательно к заполеннию!',
            'text_third.required' => 'Поле "Текст 3" обязательно к заполеннию!',
            'image_third.required' => 'Поле "Изображение 3" обязательно к заполеннию!',
            'image_four.required' => 'Поле "Изображение 4" обязательно к заполеннию!',
        ];
    }
}
