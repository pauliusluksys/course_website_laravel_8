<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
class Level extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

     public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
