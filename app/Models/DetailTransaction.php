<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailTransaction extends Model
{
    /**
 * @use HasFactory<\Database\Factories\DetailTransactionFactory>
*/
    use HasFactory;
    protected $guarded = [];
    public $incrementing = false;  // Disable auto-incrementing since UUIDs are used
    protected $keyType = 'string'; // Set the primary key type to string

    public function product():BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    public function transaction():BelongsTo
    {
        return $this->belongsTo(Transaction::class);
    }
}
