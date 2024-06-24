<?php

namespace App\Models;

use App\Models\Genres;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Books extends Model
{
    use HasFactory;

    protected $table = "books";
    protected $fillable = ['title', 'isbn', 'deskripsi', 'penulis', 'penerbit', 'cover_img', 'genres_id'];
    public function genres()
    {
        return $this->belongsTo(Genres::class);
    }
}
