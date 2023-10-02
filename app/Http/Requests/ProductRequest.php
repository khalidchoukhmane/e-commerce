<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    private $rules = [
        'libelle' => 'required|unique:products',
        'type' => 'required',
        'previous_price' => 'required',
        'new_price' => 'required',
        'description' => 'required',
        'image' => 'required',
    ];
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
        $rules = $this->rules;

        if ($this->has('id')) {
            $rules["libelle"] = "required";
        }

        return $rules;
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            
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
            'libelle.required' => 'Libellé est obigatoire',
            'libelle.unique' => 'Libellé est déjà existe',
            'type.required' => 'Type est obigatoire',
            'previous_price.required' => 'Le prix précédent est Obligatoire',
            'new_price.required' => 'Le nouveau prix est Obligatoire',
            'description.required' => 'Description est Obligatoire',
        ];
    }
}
