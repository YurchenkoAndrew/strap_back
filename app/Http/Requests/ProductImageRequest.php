<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductImageRequest extends FormRequest
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
            'product_id' => 'required',
            'name' => 'required|max:255',
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
            'product_id.required' => 'Поле "Продукт" обязательно к заполеннию!',
            'name.required' => 'Поле "Название изображения" обязательно к заполеннию!',
            'name.max' => 'Поле "Название изображения" не должно быть более 255 символов!',
            'sort.required' => 'Поле "Сортировка" обязательно к заполеннию!',
        ];
    }
}
