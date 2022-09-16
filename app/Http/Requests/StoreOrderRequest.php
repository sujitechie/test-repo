<?php

namespace App\Http\Requests;

use App\Models\Order;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreOrderRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('order_create'),
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
            'somedetails' => [
                'string',
                'nullable',
            ],
            'product' => [
                'array',
            ],
            'product.*.id' => [
                'integer',
                'exists:products,id',
            ],
        ];
    }
}
