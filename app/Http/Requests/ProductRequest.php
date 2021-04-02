<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
             'block_type_id' => 'required',
             'name' => 'required|min:5|max:40',
             'description' => 'required',
             'price' => 'required|max:20',
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
            'block_type_id.required' => 'Поле "Тип блока" обязательно к заполеннию!',
            'name.required' => 'Поле "Наименование" обязательно к заполеннию!',
            'name.max' => 'Поле "Наименование" не должно быть более 255 символов!',
            'description.required' => 'Поле "Описание" обязательно к заполеннию!',
            'price.required' => 'Поле "Цена" обязательно к заполеннию!',
            'price.max' => 'Поле "Цена" не должно быть более 20 символов!',
            'sort.required' => 'Поле "Сортировка" обязательно к заполеннию!',
        ];
    }
}
