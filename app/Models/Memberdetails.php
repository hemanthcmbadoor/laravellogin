<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memberdetails extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'memberdetails';
    protected $fillable = [
        'first_name','last_name',
        'aadhar_no','cast','gender',
        'skills','isdoneform1','isdoneform2',
        'filepath','memberid'
    ];
}
