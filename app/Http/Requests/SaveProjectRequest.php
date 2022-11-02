<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProjectRequest extends FormRequest
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
            'title' => 'required|unique:App\Models\Project,title',
            'url' => 'required',
            'description' => 'required|min:10'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El :attribute es obligatorio.',
            'title.unique' => 'El campo :attribute ya ha sido registrado.',
            'url.required' => 'Debes agregar el título del proyecto para rellenar este campo',
            'description.min' => 'La :attribute debe tener mínimo 10 carácteres'
        ];
    }

}
