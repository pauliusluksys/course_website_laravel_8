<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSelectedCourse extends Model
{
    use HasFactory;

    protected $fillable=['percent_done','user_id','courses_id'];

    // public function course(){
    // 	return $this->belongsTo(Course::class);

    // }
    // public function user(){

    // 	return $this->belongsTo(User::class);
    // }
}
