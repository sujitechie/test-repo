<?php

namespace App\Http\Livewire\Order;

use App\Models\Order;
use App\Models\Product;
use Livewire\Component;

class Create extends Component
{
    public Order $order;

    public array $product = [];

    public array $listsForFields = [];

    public function mount(Order $order)
    {
        $this->order = $order;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.order.create');
    }

    public function submit()
    {
        $this->validate();

        $this->order->save();
        $this->order->product()->sync($this->product);

        return redirect()->route('admin.orders.index');
    }

    protected function rules(): array
    {
        return [
            'order.somedetails' => [
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

    protected function initListsForFields(): void
    {
        $this->listsForFields['product'] = Product::pluck('name', 'id')->toArray();
    }
}
