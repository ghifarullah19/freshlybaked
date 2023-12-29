<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiCartDetail extends Model
{
    use HasFactory;

    public function apiMenu()
    {
        return $this->belongsTo(ApiMenu::class, 'api_id', 'id');
    }
    
    public function cart()
    {
        return $this->belongsTo(Cart::class, 'cart_id', 'id');
    }
}
