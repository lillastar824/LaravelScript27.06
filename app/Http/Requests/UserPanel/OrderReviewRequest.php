<?php

namespace App\Http\Requests\UserPanel;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class OrderReviewRequest extends FormRequest
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
            "review" => ["required", Rule::in(["positive", "negative"])]
        ];
    }
}
