<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMaleRequest extends FormRequest
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
            "name" => "required",
            "dateOfBirth" => "required|date_format:d-m-Y",
            "height" => "required|regex:/^\d*\.\d+$/",
            "national" => "required|regex:/^[A-Z]{1}[a-z]+$/",
            "description" => "required",
            "job" => "required",
            "image" => "required",
            "fileName" => "required",
        ];
    }
}
