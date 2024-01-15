<?php

namespace App\Http\Requests\Bulletin;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'string',
            'desc' => 'string',
            'price' => 'integer',
            'address' => 'string',
            'image' => 'string',
            'phone'=>'string',
            'category_id' => '',
            'user_id' => '',
        ];
    }
}
