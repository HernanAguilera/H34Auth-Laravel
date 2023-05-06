<?php

namespace H34\Auth\Http\Requests;

use H34\Core\Http\Requests\JsonRequest;

class GenerateTokenResetPasswordRequest extends JsonRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => ['required', 'string', 'email'],
        ];
    }
}
