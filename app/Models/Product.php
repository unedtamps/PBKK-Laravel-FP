<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    /**
 * @use HasFactory<\Database\Factories\ProductFactory>
*/
    use HasFactory;
    protected $guarded = [];
    public $incrementing = false;  // Disable auto-incrementing since UUIDs are used
    protected $keyType = 'string'; // Set the primary key type to string

    public function productPics(): HasMany
    {
        return $this->hasMany(ProductPicture::class);
    }
    public function productCategories():HasMany
    {
        return $this->hasMany(ProductCategory::class);
    }
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
    public function detailTransactions(): HasMany
    {
        return $this->hasMany(DetailTransaction::class);
    }
}
