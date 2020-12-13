<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Seller;
use App\Models\Transaction;

final class Product extends Model
{
    use HasFactory;

    const AVAILABLE_PRODUCT = 'available';
    const UNAVAILABLE_PRODUCT = 'unavailable';

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'status',
        'image', 
        'seller_id',
    ];

    public function isAvailable() 
    {
        return $this->status == Product::AVAILABLE_PRODUCT;
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }

    public function categories() 
    {
        return $this->belongsToMany(Category::class);
    }
}
