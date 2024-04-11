<?php

namespace App\Http\Requests;

use App\Rules\UseValidate;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'username' => ['required', new UseValidate],
            'useremail' =>' required|email',
            'userage' => 'required|numeric|min:18',
            'usercity' => 'required',
        ];
    }
    public function attributes()
    {
        return [
            'username'=>'use Name',
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'username'=>strtoupper($this->username)
        ]);
    }

    protected $stopOnFirstFailure = true;
}
