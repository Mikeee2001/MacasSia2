<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $primaryKey = 'ISBN';
    protected $fillable = ['title', 'publication_year', 'book_categoryID'];

    public function bookCopies()
    {
        return $this->hasMany(Book_copy::class, 'ISBN', 'ISBN');
    }

    public function category()
    {
        return $this->belongsTo(Book_category::class, 'book_categoryID');
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'book_author', 'ISBN', 'authorID');
    }
}
