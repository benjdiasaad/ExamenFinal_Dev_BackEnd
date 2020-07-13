<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class OffreRequest extends FormRequest
{
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
        return [
            'adresse' => 'required',
            'superficie' => 'required',
            'prix' => 'required',
            'capacite' => 'required',
            'privilege' => 'required',
            'imgPath' => 'required'
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
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
            'adresse.required' => 'Adresse est obligatoire',
            'superficie.required' => 'Superficie est obligatoire',
            'prix.required' => 'Prix est obligatoire',
            'capacite.required' => 'Capacité est obligatoire',
            'privilege.required' => 'les privilèges sont obligatoires',
            'imgPath.required' => 'les photos de logements sont obligatoires' 
        ];
    }
}
