<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validerFormulaireRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'nom' => 'Required |min: 3',
            'email' => 'Required |email',
        ];
    }
    public function messages() {
        return [
            'nom.required' => 'le champ nom est obligatoire',
            'nom.min' => 'le champ nom doit contenir au moins 3 caracteres',
            'email.required' => 'le champ mail est obligatoire',
            // 'email.email' => 'le champ mail est obligatoire',

        ];
    }
}
