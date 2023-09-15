<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeComponent extends Component
{
    public ?array $products;

    public $categories;

    public function mount()
    {
        $this->categories = Category::with('products')->get();
    }

    public function render()
    {
        // $this->dispatch('addCart',
        //     [
        //         'title' => 'Hello',
        //         'text' => 'World',
        //         'icon' => 'info'
        //     ]
        // );
        return view('livewire.home-component');
    }

    public function addCart(Request $request)
    {
        $product_id = $request['product_id'];
        $quantity = $request['quantity'];

        $product = \App\Models\Product::find($product_id);
        if (!$product) {
            return response()->json(['error' => true, 'message' => 'Produto não encontrado'], 404);
        }

        \Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $quantity,
        ]);

        //return response()->json(['error' => true, 'message' => 'Erro ao adicionar produto ao carrinho'], 404);

        return response()->json(['message' => 'Produto adicionado ao carrinho com sucesso']);
    }
}
