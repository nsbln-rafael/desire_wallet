<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Wallet extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'balance',
    ];

    /**
     * @return BelongsTo
     */
    public function wallets()
    {
        return $this->belongsTo(User::class);
    }
}
