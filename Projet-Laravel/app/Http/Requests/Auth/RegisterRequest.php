<?php

namespace App\Http\Requests\Auth;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class RegisterRequest extends FormRequest
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
            "name" => "required|string|min:2|max:25",
            "email" => "required|email|unique:users,email",
            "role" => "required",
            "image" => "required|mimes:jpg,jpeg,png,webp,gif,svg|max:1024",
            "password" => "required|min:6|max:8|confirmed"
        ];

    }

    #[Override]
    public function messages(): array
    {
        return [
            'name.required' => "veuiller remplir ce champs",
            'name.min' => "le nombre de caractère doit être superieur à 2",
            'name.max' => "le nombre de caractère doit être inferieur à 25",
            'email.required' => "veuiller remplir ce champs",
            'email.email' => "email nom valide",
            'email.unique' => "email éxiste déjà",
            'role.required' => "veuiller remplir ce champs",
            'image.required' => "veuiller remplir ce champs",
            'image.mimes' => "sul les éxtensions autorises 'jpg,jpeg,png,webp,gif,svg'",
            'image.max' => "la taille de l' image doit inferieur de 1024",
            'password.required' => "veuiller remplir ce champs",
            'password.max' => "le nombre de mot de passe doit inferieur de 8",
            'password.min' => "le nombre de mot de passe doit superieur de 6",
            'password.confirmed' => "le mot de passe ne correspond pas"
        ];
    }
}
