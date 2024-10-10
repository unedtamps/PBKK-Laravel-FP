<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReviewPicture extends Model
{
    /**
 * @use HasFactory<\Database\Factories\ReviewPictureFactory>
*/
    use HasFactory;
    public $incrementing = false;  // Disable auto-incrementing since UUIDs are used
    protected $keyType = 'string'; // Set the primary key type to string
    protected $fillable = ['id'];
    public function review():BelongsTo
    {
        return $this->belongsTo(Review::class);
    }
}
