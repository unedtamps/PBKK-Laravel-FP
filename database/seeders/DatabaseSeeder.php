<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Category;
use App\Models\DetailTransaction;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductPicture;
use App\Models\Review;
use App\Models\ReviewPicture;
use App\Models\Transaction;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory()->count(10)->create();

        $products = Product::factory(100)->create();

        $transaction = Transaction::factory()->count(50)->recycle($users)->create();

        DetailTransaction::factory()->count(200)->recycle($products)->recycle($transaction)->create();

        ProductPicture::factory()->count(300)->recycle($products)->create();

        $review = Review::factory()->count(500)->recycle($users)->recycle($products)->create();
        ReviewPicture::factory()->count(300)->recycle($review)->create();

        $category = Category::factory()->count(10)->create();

        ProductCategory::factory()->count(300)->recycle($category)->recycle($products)->create();

        Cart::factory()->count(100)->recycle($products)->recycle($users)->create();

        /* $transactions = Transaction::factory(50)->create()->each( */
        /*     function ($transaction) use ($users) { */
        /*         $transaction->user_id = $users->random()->id; */
        /*         $transaction->save(); */
        /*     } */
        /* ); */

        /* DetailTransaction::factory(200)->create()->each( */
        /*     function ($detail) use ($products, $transactions) { */
        /*         $detail->product_id = $products->random()->id; */
        /*         $detail->transaction_id = $transactions->random()->id; */
        /*         $detail->save(); */
        /*     } */
        /* ); */
        /* ProductPicture::factory(300)->create()->each( */
        /*     function ($pp) use ($products) { */
        /*         $pp->product_id = $products->random()->id; */
        /*         $pp->save(); */
        /*     } */
        /* ); */

        /* $review = Review::factory(500)->create()->each( */
        /*     function ($review) use ($users, $products) { */
        /*         $review->user_id = $users->random()->id; */
        /*         $review->product_id = $products->random()->id; */
        /*         $review->save(); */
        /*     } */
        /* ); */
        /* ReviewPicture::factory(300)->create()->each( */
        /*     function ($rp) use ($review) { */
        /*         $rp->review_id = $review->random()->id; */
        /*         $rp->save(); */
        /*     } */
        /* ); */

        /* $category = Category::factory(10)->create(); */
        /* ProductCategory::factory(100)->create()->each( */
        /*     function ($pc) use ($category, $products) { */
        /*         $pc->category_id = $category->random()->id; */
        /*         $pc->prodcut_id; $products->random()->id; */
        /*         $pc->save(); */
        /*     } */
        /* ); */






    }
}
