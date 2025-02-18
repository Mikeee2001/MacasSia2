<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book_category extends Model
{
    protected $primaryKey = 'book_categoryID';
    protected $fillable = ['category_name'];

    public function books()
    {
        return $this->hasMany(Book::class, 'book_categoryID');
    }
}
