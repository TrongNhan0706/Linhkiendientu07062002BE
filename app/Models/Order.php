<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullName',
        'address',
        'phone',
        'email',
        'note',
        'status',
    ];

    protected $table = 'orders';

    public function details()
    {
        return $this->hasMany(OrderDetail::class, 'order_id');
    }
}
