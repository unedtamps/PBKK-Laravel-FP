<?php

namespace Database\Seeders;

use App\Models\Cart;
use Illuminate\Support\Str;
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
        /* $admin = User::create( */
        /*     [ */
        /*     'id' => fake()->uuid(), */
        /*     'name' => 'admin1234', */
        /*     'email' => 'admin.tampubolon@gmail.com', */
        /*     'password' => bcrypt('password'), */
        /*     'phone_number' => '081234567890', */
        /*     'role' => 'ADMIN', */
        /*     ] */
        /* ); */

        /* $user = User::create( */
        /*     [ */
        /*     'id' => fake()->uuid(), */
        /*     'name' => 'Unedo Tampubolon', */
        /*     'email' => 'unedo.tampubolon@gmail.com', */
        /*     'password' => bcrypt('password'), */
        /*     'phone_number' => '08123453890', */
        /*     'role' => 'USER', */
        /*     ], */
        /* ); */
        /* $user2 = User::create( */
        /*     [ */
        /*     'id' => fake()->uuid(), */
        /*     'name' => 'Willy Simanihuruk', */
        /*     'email' => 'willy.simanihuruk@gmail.com', */
        /*     'password' => bcrypt('password'), */
        /*     'phone_number' => '0812323453890', */
        /*     'role' => 'USER', */

        /*     ] */
        /* ); */
        /* Transaction::factory()->count(50)->recycle(User::all())->recycle(Product::all())->create(); */

        Category::factory(10)->create();

        /* $prod = [ */
        /* ['id' => Str::uuid(), 'name' => 'Nike Air Jordan 1', 'units' => 100, 'description' => 'High-top basketball shoes.', 'price' => 150000], */
        /* ['id' => Str::uuid(), 'name' => 'Apple MacBook Pro 16"', 'units' => 50, 'description' => 'Powerful laptop for professionals.', 'price' => 25000000], */
        /* ['id' => Str::uuid(), 'name' => 'Samsung Galaxy S21', 'units' => 75, 'description' => 'Flagship smartphone from Samsung.', 'price' => 12000000], */
        /* ['id' => Str::uuid(), 'name' => 'Sony WH-1000XM4', 'units' => 30, 'description' => 'Noise-cancelling headphones.', 'price' => 4000000], */
        /* ['id' => Str::uuid(), 'name' => 'Dell XPS 13', 'units' => 40, 'description' => 'Compact and powerful laptop.', 'price' => 18000000], */
        /* ['id' => Str::uuid(), 'name' => 'Bose SoundLink Revolve+', 'units' => 25, 'description' => 'Portable Bluetooth speaker.', 'price' => 3500000], */
        /* ['id' => Str::uuid(), 'name' => 'Apple iPhone 13', 'units' => 60, 'description' => 'Latest iPhone with advanced features.', 'price' => 15000000], */
        /* ['id' => Str::uuid(), 'name' => 'Microsoft Surface Pro 7', 'units' => 20, 'description' => 'Versatile 2-in-1 laptop.', 'price' => 17000000], */
        /* ['id' => Str::uuid(), 'name' => 'Canon EOS R5', 'units' => 15, 'description' => 'Mirrorless camera for photographers.', 'price' => 40000000], */
        /* ['id' => Str::uuid(), 'name' => 'Oculus Quest 2', 'units' => 80, 'description' => 'Standalone virtual reality headset.', 'price' => 6000000], */
        /* ['id' => Str::uuid(), 'name' => 'Nintendo Switch', 'units' => 100, 'description' => 'Hybrid gaming console.', 'price' => 4000000], */
        /* ['id' => Str::uuid(), 'name' => 'Fitbit Charge 5', 'units' => 90, 'description' => 'Fitness tracker with health metrics.', 'price' => 3000000], */
        /* ['id' => Str::uuid(), 'name' => 'GoPro HERO10', 'units' => 45, 'description' => 'Action camera for adventure.', 'price' => 7000000], */
        /* ['id' => Str::uuid(), 'name' => 'iPad Pro 12.9"', 'units' => 55, 'description' => 'Powerful tablet for creatives.', 'price' => 22000000], */
        /* ['id' => Str::uuid(), 'name' => 'JBL Flip 5', 'units' => 70, 'description' => 'Portable waterproof Bluetooth speaker.', 'price' => 2500000], */
        /* ['id' => Str::uuid(), 'name' => 'Apple Watch Series 7', 'units' => 50, 'description' => 'Smartwatch with health tracking.', 'price' => 9000000], */
        /* ['id' => Str::uuid(), 'name' => 'Razer Blade 15', 'units' => 30, 'description' => 'High-performance gaming laptop.', 'price' => 25000000], */
        /* ['id' => Str::uuid(), 'name' => 'LG OLED TV 55"', 'units' => 20, 'description' => 'Stunning 4K OLED television.', 'price' => 15000000], */
        /* ['id' => Str::uuid(), 'name' => 'ASUS ROG Strix Gaming Monitor', 'units' => 25, 'description' => 'High-refresh rate gaming monitor.', 'price' => 7000000], */
        /* ['id' => Str::uuid(), 'name' => 'Dyson V11 Vacuum', 'units' => 10, 'description' => 'Cordless vacuum cleaner with powerful suction.', 'price' => 12000000], */
        /* ['id' => Str::uuid(), 'name' => 'Samsung QLED TV 65"', 'units' => 10, 'description' => 'Premium QLED television with vibrant colors.', 'price' => 25000000], */
        /* ]; */

        /* $products = Product::create(...$prod); */
        /* $categories = [ */
        /*     [ */
        /*         'name' => 'Electronics', */
        /*         'id' => fake()->uuid(), */
        /*         'description' => 'Devices, gadgets, and equipment related to electronics.' */
        /*     ], */
        /*     [ */
        /*         'name' => 'Clothing', */
        /*         'id' => fake()->uuid(), */
        /*         'description' => 'Apparel and garments for men, women, and children.' */
        /*     ], */
        /*     [ */
        /*         'name' => 'Home Appliances', */
        /*         'id' => fake()->uuid(), */
        /*         'description' => 'Appliances for household needs like refrigerators, washing machines, etc.' */
        /*     ], */
        /*     [ */
        /*         'name' => 'Books', */
        /*         'id' => fake()->uuid(), */
        /*         'description' => 'Wide range of literature from various genres.' */
        /*     ], */
        /*     [ */
        /*         'name' => 'Beauty & Personal Care', */
        /*         'id' => fake()->uuid(), */
        /*         'description' => 'Skincare, haircare, makeup, and other personal care products.' */
        /*     ], */
        /*     [ */
        /*         'name' => 'Sports & Outdoors', */
        /*         'id' => fake()->uuid(), */
        /*         'description' => 'Equipment and gear for sports and outdoor activities.' */
        /*     ], */
        /*     [ */
        /*         'id' => fake()->uuid(), */
        /*         'name' => 'Toys & Games', */
        /*         'description' => 'Toys, games, and puzzles for kids and adults.' */
        /*     ], */
        /*     [ */
        /*         'id' => fake()->uuid(), */
        /*         'name' => 'Automotive', */
        /*         'description' => 'Car accessories, parts, and maintenance products.' */
        /*     ], */
        /*     [ */
        /*         'id' => fake()->uuid(), */
        /*         'name' => 'Health & Wellness', */
        /*         'description' => 'Products related to health, wellness, and fitness.' */
        /*     ], */
        /*     [ */
        /*         'name' => 'Furniture', */
        /*         'id' => fake()->uuid(), */
        /*         'description' => 'Furniture for living rooms, bedrooms, offices, and outdoor spaces.' */
        /*     ] */
        /* ]; */
        /* $cate = Category::create(...$categories); */

        /* ProductPicture::factory()->count(100)->recycle($products)->create(); */

        /* ProductCategory::factory()->count(100)->recycle($cate)->recycle($products)->create(); */

        /* $review = Review::factory()->count(50)->recycle($user)->recycle($products)->create(); */
        /* ReviewPicture::factory()->count(60)->recycle($review)->create(); */

        /* $users = User::factory()->count(10)->create(); */

        /* $products = Product::factory(100)->create(); */

        /* $transaction = Transaction::factory()->count(50)->recycle($users)->recycle($products)->create(); */

        /* ProductPicture::factory()->count(300)->recycle($products)->create(); */

        /* $review = Review::factory()->count(500)->recycle($users)->recycle($products)->create(); */
        /* ReviewPicture::factory()->count(300)->recycle($review)->create(); */

        /* $category = Category::factory()->count(10)->create(); */

        /* ProductCategory::factory()->count(300)->recycle($category)->recycle($products)->create(); */


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
