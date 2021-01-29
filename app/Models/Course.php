<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Course extends Model implements HasMedia
{
    use HasFactory;
 	
 	 use InteractsWithMedia;
    protected $fillable=[
    	'meta_title','title','description','creator','time_to_complete','category_id','slug',
    ];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function ratings(){
    	return $this->hasMany(Rating::class);


    }
    public function selectedCourses(){
    return $this->belongsToMany(UserSelectedCourse::class, 'user_selected_courses');
	}

	public function notSelectedCourses($id){
    return $this->belongsToMany(UserSelectedCourse::class, 'user_selected_courses')->wherePivotNotIn('user_id', $id);
	}
	
     public function getAverageRatingAttribute()
    {
        return $this->rating()->average('value');
    }

    //  public function ratings()
    // {
    //     return $this->morphMany(Rating::class, 'rateable');
    // }

    // public function getAverageRatingAttribute()
    // {
    //     return $this->ratings()->average('value');
    // }
    // public function userSelectedCourses()
    // {
    //     return $this->hasMany(UserSelectedCourse::class);
    // }
}
