<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductPicture extends Model
{
    /**
 * @use HasFactory<\Database\Factories\ProductPictureFactory>
*/
    use HasFactory;
    protected $fillable = ['id'];
    public $incrementing = false;  // Disable auto-incrementing since UUIDs are used
    protected $keyType = 'string'; // Set the primary key type to string
    protected $with = ['product'];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
