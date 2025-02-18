<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $primaryKey = 'facultyID';
    protected $fillable = ['borrowerID', 'department', 'faculty_type'];

    public function borrower()
    {
        return $this->belongsTo(Borrower::class, 'borrowerID');
    }
}
