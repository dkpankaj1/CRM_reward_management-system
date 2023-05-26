<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $fillable = [
        'trans_id',
        'product',
        'volume',
        'amt',
        'customer_id',
        'created_by',
        'updated_by'
    ];

    public function customer()
    {
        $this->belongsTo(Customer::class);
    }

}