<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function viewProducts(Request $request)
    {
        $query= Product::with('productCategories');
        $categories = Category::all();

        if ($request->search) {
            $query->where('name', 'like', '%'. $request->search . '%');
        }

        if($request->category) {
            $caReq = $request->category;
            $query->whereHas(
                'productCategories', function ($q) use ($caReq) {
                    $q->where('category_id', $caReq);
                }
            );
        }


        $selectedCategories = $request->input('categories', []);

        foreach($selectedCategories as $c){
            $query->whereHas(
                'productCategories', function ($q) use ($c) {
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
            'products', [
            'products' => $products,
                'categories' => $categories
            ]
        );
    }
}
