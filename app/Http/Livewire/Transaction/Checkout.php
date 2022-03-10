<?php

namespace App\Http\Livewire\Transaction;

use App\Models\Product;
use Livewire\Component;

class Checkout extends Component
{
    public $products;

    protected $listeners = [
        'incrementQuantity' => 'resetCartProduct',
        'decrementQuantity' => 'resetCartProduct',
    ];

    public function mount()
    {
        $this->products = Product::with('transaction')
            ->selectRaw('products.id as id, products.`name`, (products.`price` * transactions.quantity) as total_price, products.`price`, transactions.quantity, transactions.notes')
            ->join('transactions', 'transactions.product_id', '=', 'products.id')
            ->whereRelation('transaction', 'user_id', auth()->user()->id)
            ->whereRelation('transaction', 'status', 'pending')
            ->whereNull('transactions.deleted_at')
            ->get();
    }

    public function resetCartProduct()
    {
        $this->reset();
        $this->products = Product::with('transaction')
            ->selectRaw('products.id as id, products.`name`, (products.`price` * transactions.quantity) as total_price, products.`price`, transactions.quantity, transactions.notes')
            ->join('transactions', 'transactions.product_id', '=', 'products.id')
            ->whereRelation('transaction', 'user_id', auth()->user()->id)
            ->whereRelation('transaction', 'status', 'pending')
            ->whereNull('transactions.deleted_at')
            ->get();
        if ($this->products->count() === 0) {
            $this->redirect('/');
        } else {
            $this->redirect('/transactions/checkout');
        }
    }

    public function order()
    {
        // dd(true);
        $this->emit('saved');
        // $this->products->each(function ($product) {
        //     $product->transaction->update([
        //         'status' => 'ordered',
        //     ]);
        // });

        // $this->reset();


        // $this->redirect('/transactions/checkout');
    }

    public function render()
    {
        return view('livewire.transaction.checkout', ['products' => $this->products]);
    }
}
