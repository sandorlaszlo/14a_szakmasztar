<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompetitorRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' =>'string|max:100',
            'professionId' =>'exists:professions,id',
            'schoolName' =>'string|max:200',
            'birthDate' => 'date',
            'hostel' => 'boolean',
            'avatarUrl' =>'string|max:100',
        ];
    }
}
