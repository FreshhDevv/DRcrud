<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    use HasFactory;
    protected $fillable = [
        'class',
    ];

    public function studentRelation()
    {
        return $this->hasMany(Student::class, 'class_id', 'id');
    }
}
