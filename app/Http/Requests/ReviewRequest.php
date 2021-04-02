<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
             'description' => 'required',
             'instagram' => 'required|max:255',
             'image' => 'required',
             'sort' => 'required',
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
            'name.required' => 'Поле "Имя" обязательно к заполеннию!',
            'name.max' => 'Поле "Имя" не должно быть более 255 символов!',
            'description.required' => 'Поле "Отзыв" обязательно к заполеннию!',
            'description.max' => 'Поле "Отзыв" не должно быть более 255 символов!',
            'instagram.required' => 'Поле "Instagram" обязательно к заполеннию!',
            'image.required' => 'Поле "Фото" обязательно к заполеннию!',
            'instagram.max' => 'Поле "Instagram" не должно быть более 255 символов!',
            'sort.required' => 'Поле "Сортировка" обязательно к заполеннию!',
        ];
    }
}
