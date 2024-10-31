<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCardsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => "required|min:3|max:255",
            "expansion" => "min:3|max:255",
            "card_type" => "required|min:4|max:255",
            "description" => "required|min:4|max:255"
        ];
    }

    public function messages(): array
    {
        return [
            "name.required" => "You have to insert a Card Name",
            "name.min" => "The Card Name has to be at least 3 char long",
            "name.max" => "The Card Name cannot have more than 255 char",
            "expansion.min" => "The Expansion has to be at least 3 char long",
            "expansion.max" => "The Expansion cannot have more than 255 char",
            "card_type.require" => "You MUST insert a card type",
            "card_type.min" => "The type has to be at least 3 char long",
            "card_type.max" => "The type cannot be long more than 255 char",
            "description.required" => "The description in required",
            "description.min" => "At least 3 char",
            "description.max" => "Over the limit of max char"
        ];
    }
}