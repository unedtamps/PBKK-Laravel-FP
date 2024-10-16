<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function viewProducts(Request $request)
    {

        /* if(!Auth::check()) { */
        /*     return redirect('/user/login')->with('error', 'You must Login first!'); */
        /* } */

        $query= Product::with('productCategories', 'productPics');
        $categories = Category::all();

        if ($request->search) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->category) {
            $caReq = $request->category;
            $query->whereHas(
                'productCategories',
                function ($q) use ($caReq) {
                    $q->where('category_id', $caReq);
                }
            );
        }


        $selectedCategories = $request->input('categories', []);

        foreach ($selectedCategories as $c) {
            $query->whereHas(
                'productCategories',
                function ($q) use ($c) {
                    $q->where('category_id', $c); // Assuming the pivot table has 'category_id'
                }
            );
        }

        if ($request->min_price) {
            $query->where('price', '>=', $request->min_price);
        }

        if ($request->max_price) {
            $query->where('price', '<=', $request->max_price);
        }


        $products = $query->paginate(6)->withQueryString();

        return view(
            'products',
            [
                'products' => $products,
                'categories' => $categories
            ]
        );
    }


    public function getProduct($id)
    {
        $product = Product::find($id);
        return view('product', ['product' => $product]);
    }
}
