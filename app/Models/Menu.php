<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;
use App\Models\CartDetail;

class Menu extends Authenticatable
{
    /**
     * HasApiTokens digunakan untuk mengaktifkan personal access token pada model User 
     * HasFactory digunakan untuk membuat factory model User 
     * Notifiable digunakan untuk mengirimkan notifikasi ke user 
     */
    use HasApiTokens, HasFactory, Notifiable, Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    // Fillable digunakan untuk menentukan field mana saja yang boleh diisi
    // protected $fillable = [ 'name', 'username', 'email', 'password' ];
    
    // Guarded digunakan untuk menentukan field mana saja yang tidak boleh diisi
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    // Hidden digunakan untuk menyembunyikan field yang tidak ingin ditampilkan
    // protected $hidden = [
    //     'password'
    // ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // Casts digunakan untuk mengubah tipe data field
    // protected $casts = [
    //     'password' => 'hashed',
    // ];

    public function scopeFilter($query, array $filters)
    {
        if (request('filter') == 'name') {
            $query->when($filters['search'] ?? false, function ($query, $search) {
                return $query->where("name", "like", "%" . $search . "%");
            });
        } else if (request('filter') == 'category') {
            $query->when($filters['search'] ?? false, function ($query, $search) {
                return $query->whereHas('category', function ($query) {
                    $query->where('name', 'like', '%' . request('search') . '%');
                });
            });
        }

        // $query->when($filters['search'] ?? false, function ($query, $search) {
        //     return $query->where("name", "like", "%" . $search . "%");
        // });

        // $query->when($filters['category'] ?? false, function ($query, $category) {
        //     return $query->whereHas('category', function ($query) use ($category) {
        //         $query->where('slug', $category);
        //     });
        // });

        // $query->when($filters['author'] ?? false, function ($query, $author) {
        //     return $query->whereHas('author', function ($query) use ($author) {
        //         $query->where('username', $author);
        //     });
        // });
    }

    // Membuat relasi dengan model Post
    public function cartDetail()
    {
        // HasMany digunakan karena relasi antara User dengan Post adalah one to many
        return $this->hasMany(CartDetail::class, 'menu_id', 'id');
    }

    public function category()
    {
        // BelongsTo digunakan karena relasi antara Post dengan User adalah many to one
        return $this->belongsTo(Category::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
