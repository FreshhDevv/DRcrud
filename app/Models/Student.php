<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'class_id',
        'class',
        'email',
        'number'
    ];

    public function class()
    {
        return $this->belongsTo(StudentClass::class);
    }
}
