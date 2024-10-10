<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    /**
 * @use HasFactory<\Database\Factories\CategoryFactory>
*/
    use HasFactory;
    public $incrementing = false;  // Disable auto-incrementing since UUIDs are used
    protected $keyType = 'string'; // Set the primary key type to string
    public function productCategories():HasMany
    {
        return $this->hasMany(ProductCategory::class);
    }
}
