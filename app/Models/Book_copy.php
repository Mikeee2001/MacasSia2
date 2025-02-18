<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book_copy extends Model
{

    protected $primaryKey = 'copyID';
    protected $fillable = ['ISBN', 'status', 'due_date']; // Add due_date to fillable attributes

    public function borrowers()
    {
        return $this->belongsToMany(Borrower::class, 'borrower_book_copy');
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'ISBN', 'ISBN');
    }
}
