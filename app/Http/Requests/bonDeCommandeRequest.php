<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class bonDeCommandeRequest extends FormRequest
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
        return [];
        // return [
        //         'desc' => 'bail|required',
        //         'fournisseur_id' => 'bail|required',
        //         'dat_com' => 'bail|required',
        //         'dat_exp' => 'bail|required',
        //         'client_name' => 'bail|required',
        //         'client_mobile' => 'bail|required|size:8|numeric',
        //         'client_email' => 'bail|required|email',
        //         'client_adress' => 'bail|required'
        //     ];
    }
}
