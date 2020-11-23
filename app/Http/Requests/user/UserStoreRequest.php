<?php

namespace App\Http\Requests\user;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
        if($this->isMethod('POST')) {
            return $this->createRules();
        } elseif($this->isMethod('PUT')) {
            return $this->updateRules();
        }
    }

    public function createRules() {
        return [
            'name'                          =>  'required|min:3',
            'email'                         =>  'required|email|unique:users,email',
            'password'                      =>  'required|min:3',
            'image'                         =>  'sometimes|mimes:jpeg,jpg,png,gif',
            'country'                       =>  'required',
            'state'                         =>  'required',
            'city'                          =>  'required',
            'postal_code'                   =>  'required|numeric',
            'contact'                       =>  'sometimes|alpha_num'
        ];
    }

    public function updateRules() {
        return [
            'name'                          =>  'required|min:3',
            'email'                         =>  'required|email',
            'image'                         =>  'sometimes|mimes:jpeg,jpg,png,gif',
            'country'                       =>  'required',
            'state'                         =>  'required',
            'city'                          =>  'required',
            'postal_code'                   =>  'required|numeric',
            'contact'                       =>  'sometimes|alpha_num'
        ];
    }
}
