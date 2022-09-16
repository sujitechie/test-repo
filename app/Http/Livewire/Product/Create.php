<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class Create extends Component
{
    public Product $product;

    public function mount(Product $product)
    {
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.product.create');
    }

    public function submit()
    {
        $this->validate();

        $this->product->save();

        return redirect()->route('admin.products.index');
    }

    protected function rules(): array
    {
        return [
            'product.name' => [
                'string',
                'nullable',
            ],
        ];
    }
}
