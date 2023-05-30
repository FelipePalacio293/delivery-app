<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
{
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
            'email' => 'required',
            'password' => 'required'
        ];
    }

    public function getCredentials(){
        $email = $this->get('email');
        if($this->isEmail($email)){
            return [
                'email' => $email,
                'password' => $this->get('password')
            ];
        }
        return $this->only('email', 'password');
    }

    public function isEmail($value){
        $factory = $this->container->make(ValidationFactory::class);
        return !$factory->make(['email' => $value], ['email' => 'email'])->fails();
    }

    
}