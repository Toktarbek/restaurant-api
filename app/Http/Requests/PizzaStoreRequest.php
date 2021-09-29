<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PizzaStoreRequest extends FormRequest
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
            'name' => 'required|max:128',
            'cheese' => 'required|max:128',
            'pastry' => 'required|max:128',
            'secret_ingredient' => 'required|max:128',
            'restauran_id' => 'required|exists:restaurans,id'
        ];
    }
}
