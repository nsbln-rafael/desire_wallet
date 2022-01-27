<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WalletLog extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'operation',
        'balance_old',
        'balance_new',
    ];

    /**
     * @return BelongsTo
     */
    public function wallets()
    {
        return $this->belongsTo(Wallet::class);
    }
}
