<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Cviebrock\EloquentSluggable\Sluggable;

class User extends Authenticatable
{
    /**
     * HasApiTokens digunakan untuk mengaktifkan personal access token pada model User 
     * HasFactory digunakan untuk membuat factory model User 
     * Notifiable digunakan untuk mengirimkan notifikasi ke user 
     */
    use HasApiTokens, HasFactory, Notifiable,Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    // Fillable digunakan untuk menentukan field mana saja yang boleh diisi
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    //     'google_id'
    // ];

    // Guarded digunakan untuk menentukan field mana saja yang tidak boleh diisi
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    // Hidden digunakan untuk menyembunyikan field yang tidak ingin ditampilkan
    protected $hidden = [
        'password'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // Casts digunakan untuk mengubah tipe data field
    protected $casts = [
        'password' => 'hashed',
    ];

    // Membuat relasi dengan model Post
    public function carts()
    {
        // HasMany digunakan karena relasi antara User dengan Post adalah one to many
        return $this->hasMany(Cart::class, 'user_id', 'id');
    }

    public function getRouteKeyName()
    {
        return 'username';
    }

    public function sluggable(): array
    {
        return [
            'username' => [
                'source' => 'name'
            ]
        ];
    }
}
