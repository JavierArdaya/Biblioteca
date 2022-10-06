<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'Codigo' => 'required',
            'Password' => 'required'
        ];
    }
    public function getCredentials()
    {
        $codigo = $this->get('Codigo');
        if ($this->isEmail($codigo)) {
            return [
                'Email' => $codigo,
                'Password' => $this->get('Password')
            ];
        }
        return $this->only('Codigo', 'Password');
    }
    public function isEmail($value)
    {
        $factory = $this->container->make(ValidationFactory::class);
        return $factory->make(['Codigo' => $value], ['Codigo' => 'Email'])->fails();
    }
}
