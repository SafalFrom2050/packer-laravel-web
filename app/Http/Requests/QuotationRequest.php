<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuotationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            "fullname" => ['string'],
            "email" => ['string'],
            "phone" => ['string'],
            "pickup_location" => ['string'],
            "drop_location" => ['string'],
            "message" => ['string'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
