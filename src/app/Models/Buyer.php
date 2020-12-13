<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Transaction;

final class Buyer extends User
{
    use HasFactory;

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
