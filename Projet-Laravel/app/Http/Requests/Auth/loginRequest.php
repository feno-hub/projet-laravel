<?php

namespace App\Http\Requests\Auth;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class loginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "email" => "email|required",
            "password" => 'required'
        ];
    }

    #[Override]
    public function messages(): array
    {
        return [    
            "email.required" => "Veuiller remplir ce champs",
            "email.email" => "Email non valide",
            "password.required" => "Veuiller remplir ce champs"
        ];
        
    }
}
