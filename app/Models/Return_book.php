<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Return_book extends Model
{
    protected $primaryKey = 'returnID';
    protected $fillable = ['return_date', 'borrowerID', 'borrower_name', 'bookID', 'return_bookcopyID'];

    public function borrower()
    {
        return $this->belongsTo(Borrower::class, 'borrowerID');
    }

    public function bookCopy()
    {
        return $this->belongsTo(Book_copy::class, 'return_bookcopyID');
    }
}
