<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsletterEmailRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => ['string']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
