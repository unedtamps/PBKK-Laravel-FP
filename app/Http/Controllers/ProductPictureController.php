<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductPictureController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate(
            [
            'product_pics' => 'required|mimes:jpg,jpeg,png|max:2048',
            ]
        );
        $path = $request->file('product_pics')->storeAs("products", Str::uuid()->toString());
        return $path;
    }

}
