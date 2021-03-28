<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TopSliderRequest extends FormRequest
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
            'title' => 'required|min:5|max:40',
            'description' => 'required|min:5|max:180',
            'price' => 'required|min:2|max:20',
            'image' => 'required',
            'sort' => 'required'
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
//    public function attributes(): array
//    {
//        //
//    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Поле "Заголовок" обязательно к заполеннию!',
            'title.max' => 'Поле "Заголовок" не должно быть более 40 символов!',
            'description.required' => 'Поле "Описание" обязательно к заполеннию!',
            'description.max' => 'Поле "Описание" не должно быть более 180 символов!',
            'price.required' => 'Поле "Цена" обязательно к заполеннию!',
            'price.max' => 'Поле "Цена" не должно быть более 20 символов!',
            'image.required' => 'Поле "Изображение" обязательно к заполеннию!',
            'sort.required' => 'Поле "Сортировка" обязательно к заполеннию!',
        ];
    }
}
