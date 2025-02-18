<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ReturnModel;

class Borrower extends Model
{
     protected $primaryKey = 'borrowerID';
    protected $fillable = ['name', 'contactInfo', 'returnID'];

    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function faculty()
    {
        return $this->hasOne(Faculty::class);
    }

    public function Book_copy()
    {
        return $this ->belongsToMany(Book_copy::class, 'borroower_book_copy');
    }

    public function returns()
    {
        return $this->hasMany(Return_book::class);
    }
}
