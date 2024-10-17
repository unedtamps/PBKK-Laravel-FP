<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function addCart(Request $request, $id)
    {
        $count = $request->input('count');
        $product = Product::find($id);
        return view('checkout', ['count' => $count], ['product' => $product]);
    }
    public function getTransaction()
    {
        if (!Auth::check()) {
            return redirect('/user/login')->with('error', 'You must Login first!');
        }
        $id = Auth::id();
        $user = User::find($id);
        $transaction = $user->transactions()->paginate(5);
        return view('transaction', ['transactions' => $transaction]);
    }

    public function store(Request $request, Product $product)
    {
        // Membuat transaksi baru dan menyimpan ID user yang sedang login

        // mengurangi jumlah produck
        if($product->units - $request->amount < 0) {
            return redirect('/product/'.$product->id);
        }
        $product->units = $product->units - $request->amount;
        $product->save();

        $id = Str::uuid()->toString();
        $tf = Str::uuid()->toString();
        $transaction = Transaction::create(
            [
            'id' => $id,
            'user_id' => Auth::id(), // Menyimpan ID user yang sedang login
            'product_id'=> $product->id,
            'total_price' => $request->harga,
            'status' => 'PENDING',
            'transaction_proof' => $tf,
            'shipping_address' => $request->address,
            'amount' => $request->amount,
            'payment_method' => $request->payment_method
            ]
        );
        $request->file('image-upload')->storeAs("proofs", $tf. '.jpg');

        // Lakukan logika lainnya, misalnya redirect ke halaman sukses
        $id = Auth::id();
        $user = User::find($id);
        $transaction = $user->transactions()->paginate(5);
        return view('transaction', ['transactions' => $transaction]);
    }
}
