<?php

namespace App\Http\Requests\category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequest extends FormRequest
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
            'title'                             =>  'required|min:3',
            'seo_title'                         =>  'required',
            'slug'                              =>  'required|min:3',
            'description'                       =>  'required',
            'image'                             =>  'sometimes|mimes:jpeg,jpg,png,gif',
            'seo_image'                         =>  'sometimes|mimes:jpeg,jpg,png,gif',
            'status'                            =>  'required',
        ];
    }
}
