<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function addCart(Request $request,$id)
    {
        $count = $request->input('count');
        $product = Product::find($id);
        return view('checkout',['count' => $count],['product'=>$product]);

    }

}
