<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class HomeComponent extends Component implements ShouldBroadcast
{
    use InteractsWithSockets;
    public ?array $products;

    public $categories;

    public $message;

    public function mount($message = 'teste')
    {
        $this->message = $message;
        $this->categories = Category::with('products')->get();
    }

    public function broadcastOn()
    {
        return ['my-channel'];
    }

    public function broadcastAs()
    {
        return 'my-event';
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

        \Cart::add([
            'id' => $product->id,
            'qty' => $quantity,
            'name' => $product->name,
            'price' => $product->price,
            'options' => []
        ]);

        //dd(\Cart::total());

        return response()->json(['message' => 'Produto adicionado ao carrinho com sucesso']);
    }
}
