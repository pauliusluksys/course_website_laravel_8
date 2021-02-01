<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
  
    	protected $fillable=[
    		'score','comments','user_id','course_id',


    	];
    	public function level()
  
    {
        return $this->belongsTo(Level::class);
    }
}
