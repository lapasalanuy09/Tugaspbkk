<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Book extends Model
{
    use HasFactory;

    /**
     * Kolom yang dapat diisi dengan mass assignment.
     * 
     * @var array
     */
    // public $fillable  = [
    //     'author_id',
    //     'title',
    //     'description',
    // ];

    /**
     * Mendapatkan data author dari buku
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
}
