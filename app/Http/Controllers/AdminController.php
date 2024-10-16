<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductPicture;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;

class AdminController extends Controller
{

    public function admin_transaction()
    {
        $transaction = Transaction::where('status', 'PENDING')->paginate(10);
        return view(
            'admin.transaction', [
            'transactions' =>$transaction,
            ]
        );
    }
    public function cancel(Transaction $transaction)
    {
        $transaction->update(
            [
            'status' => 'CANCELED'
            ]
        );
        return redirect('/admin/transactions');
    }
    public function confirm(Transaction $transaction)
    {
        $transaction->update(
            [
            'status' => 'COMPLETED'
            ]
        );
        return redirect('/admin/transactions');
    }



    public function product()
    {
        return view(
            'admin.product', [
            'products' => Product::all(),
            'category' => Category::all()
            ]
        );
    }

    public function createProduct(Request $request)
    {

        $validatedData = $request->validate(
            [
            'file_input' => 'required|array', // Ensure file_input is an array
            'file_input.*' => 'image|mimes:jpeg,png,jpg|max:2048', // Validate each file in the array
            ]
        );

        $validated = $request->validate(
            [
            'categories' => 'required|array|min:1', // Ensure that at least one checkbox is selected
            'categories.*' => 'string',            // Ensure each selected value is an integer
            ]
        );

        $selectedCategories = $request->input('categories', []);


        /* dd("masuk sini", $validatedData); */
        $product_id = Str::uuid()->toString();

        $product = Product::create(
            [
            'id' => $product_id,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'units' => $request->units
            ]
        );
        // upload category
        foreach ($selectedCategories as $cat) {
            ProductCategory::create(
                [
                'id' => Str::uuid()->toString(),
                'product_id' => $product_id,
                'category_id' => $cat
                ]
            );
        }



        $images = $request->file('file_input'); // Make sure to use 'file()' for getting the file input
        // loop through images
        foreach ($images as $image) {
            $name = Str::uuid()->toString();
            $image->storeAs("products", $name . ".jpg");
            ProductPicture::create(
                [
                    'id' => $name,
                    'product_id' => $product_id
                ]
            );
        }
        return redirect('/admin/products');
    }

    public function editProduct(Request $request,Product $product)
    {
        /* dd("masuk sini", $validatedData); */

        $product->update(
            [
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'units' => $request->units
            ]
        );

        return redirect('/admin/products');
    }
    public function deleteProduct(Product $product)
    {
        /* dd("masuk sini", $validatedData); */

        $product->delete();
        return redirect('/admin/products');
    }


    public function users()
    {
        return view(
            'admin.user', [
            'users' => User::where('role', 'USER')->get(),
            ]
        );
    }

    public function makeAdmin(User $user)
    {
        $user->update(
            [
            'role' => 'ADMIN'
            ]
        );
        return redirect('/admin/users');
    }

    public function deleteUser(User $user)
    {
        $user->delete();
        return redirect('/admin/users');
    }
}
