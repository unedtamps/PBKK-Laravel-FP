<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaction extends Model
{
    /**
 * @use HasFactory<\Database\Factories\TransactionFactory>
*/
    use HasFactory;
    protected $guarded = [];

    public $incrementing = false;  // Disable auto-incrementing since UUIDs are used
    protected $keyType = 'string'; // Set the primary key type to string

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function detailTransactions(): HasMany
    {
        return $this->hasMany(DetailTransaction::class);
    }
}
