<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'email',
        'number'
    ];

    public function classRelation()
    {
        return $this->belongsTo(StudentClass::class, 'class_id', 'id');
    }
}
