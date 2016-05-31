<?php

namespace App\Http\Requests\Kitchen;

use App\Http\Requests\Request;
use App\Models\Kitchen\Presentation;

class CreatePresentationRequest extends Request
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
        return Presentation::$rules;
    }
}
