<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id', 'id');
    }
    
    public function cart()
    {
        return $this->belongsTo(Cart::class, 'cart_id', 'id');
    }
}
