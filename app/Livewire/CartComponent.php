<?php

namespace App\Livewire;

use Livewire\Component;

class CartComponent extends Component
{
    public $cartItens;

    public function mount()
    {
        $this->cartItens = json_decode(\Cart::content());
    }

    public function render()
    {
        return view('livewire.cart-component');
    }

    public function remove($rowId)
    {
        \Cart::remove($rowId);
        $this->cartItens = json_decode(\Cart::content());


        return response()->json(['message' => 'Produto removido do carrinho com sucesso']);
    }
}
