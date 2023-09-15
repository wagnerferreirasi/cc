<?php

namespace App\Livewire;

use \Cart;
use App\Models\Product;
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
        return view('livewire.home-component');
    }

    public function addCart(Request $request)
    {
        $id = $request['product_id'];
        $quantity = $request['quantity'];
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['error' => true, 'message' => 'Produto não encontrado'], 404);
        }

        $rowId = $product->id;
        $userId = 1;

        Cart::session($userId)->add([
            'id' => $rowId,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $quantity
        ]);

        return response()->json(['message' => 'Produto adicionado ao carrinho com sucesso']);
    }
}
