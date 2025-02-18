<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'studentID';
    protected $fillable = ['borrowerID', 'major', 'student_type'];

    public function borrower()
    {
        return $this->belongsTo(Borrower::class, 'borrowerID');
    }
}
