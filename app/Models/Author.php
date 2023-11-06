<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Kolom yang dapat diisi dengan mass assignment.
     * 
     * @var array
     */
    public $fillable  = [
        'name',
        'email',
        'address'
    ];

    /**
     * Relasi ke model buku.
     * 
     * Mendefinisikan buku mana saja yang dimiliki oleh penulis ini.
     * Relasi one-to-many merupakan relasi yang mendefinisikan bahwa satu penulis
     * dapat memiliki banyak buku (one-to-many).
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
