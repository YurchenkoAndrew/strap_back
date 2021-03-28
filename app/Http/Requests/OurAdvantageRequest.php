<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OurAdvantageRequest extends FormRequest
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
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'sort' => 'required',
            'image' => 'required',
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
            'name.required' => 'Поле "Заголовок" обязательно к заполеннию!',
            'name.max' => 'Поле "Заголовок" не должно быть более 255 символов!',
            'description.required' => 'Поле "Описание" обязательно к заполеннию!',
            'description.max' => 'Поле "Описание" не должно быть более 255 символов!',
            'image.required' => 'Поле "Изображение" обязательно к заполеннию!',
            'sort.required' => 'Поле "Сортировка" обязательно к заполеннию!',
        ];
    }
}
