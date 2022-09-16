<?php

namespace App\Http\Requests;

use App\Models\Person;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePersonRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('person_create'),
            response()->json(
                ['message' => 'This action is unauthorized.'],
                Response::HTTP_FORBIDDEN
            ),
        );

        return true;
    }

    public function rules(): array
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
        ];
    }
}
