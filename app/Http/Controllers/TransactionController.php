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
        $id = Auth::id();
        $user = User::find($id);
        $transaction = $user->transactions;
        return view('transaction', ['transactions' => $transaction]);
    }

    public function store(Request $request)
    {
        // Membuat transaksi baru dan menyimpan ID user yang sedang login
        $transaction = Transaction::create([
            'id' => Str::uuid(),
            'user_id' => Auth::id(), // Menyimpan ID user yang sedang login
            'total_price' => $request->harga,
            'status' => 'PENDING',
            'transaction_proof' => $request->file('image-upload')->storeAs("proofs", Str::uuid()->toString()),
            'shipping_address' => $request->address
            // tambahkan field lain yang dibutuhkan
        ]);

        // Lakukan logika lainnya, misalnya redirect ke halaman sukses
        $id = Auth::id();
        $user = User::find($id);
        $transaction = $user->transactions;
        return view('transaction', ['transactions' => $transaction]);
    }
}
