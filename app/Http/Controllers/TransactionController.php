<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cartProducts = Product::whereRelation('transaction', 'user_id', auth()->user()->id)
            ->whereRelation('transaction', 'status', $request->query('status', 'pending'))
            ->get();
        return view('transactions.cart', compact('cartProducts'));
    }

    public function checkout()
    {
        return view('transactions.checkout');
    }

    public function print_invoice()
    {
        $products = Product::with('transaction')
            ->selectRaw('products.`name`, (products.`price` * transactions.quantity) as total_price, products.`price`, transactions.quantity, categories.name as category_name')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->join('transactions', 'transactions.product_id', '=', 'products.id')
            ->whereRelation('transaction', 'user_id', auth()->user()->id)
            ->whereRelation('transaction', 'status', 'pending')
            ->whereNull('transactions.deleted_at')
            ->get();
        return view('transactions.invoice', compact('products'));
    }

    public function success()
    {
        $products = Product::with('transaction')
            ->selectRaw('products.id as id, products.`name`, (products.`price` * transactions.quantity) as total_price, products.`price`, transactions.quantity, transactions.status')
            ->join('transactions', 'transactions.product_id', '=', 'products.id')
            ->whereRelation('transaction', 'user_id', auth()->user()->id)
            ->whereRelation('transaction', 'status', 'pending')
            ->whereNull('transactions.deleted_at')
            ->get();


        $products->each(function ($product) {
            $product->transaction()->update([
                'status' => 'success',
            ]);
        });

        return to_route('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransactionRequest  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
