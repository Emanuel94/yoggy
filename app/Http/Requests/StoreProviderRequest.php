<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreProviderRequest extends Request
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
            'supplier_name'  => 'required|max:100',
            'phone' => 'required|max:100',
            'email'     => 'required|email',
            'contact_name'      => 'required|min:4|max:20'  
        ];
    }
}