<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title','slug','extract','body','destination_id','country_id','category_id','date'];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function destination(){
        return $this->belongsTo(Destination::class);
    }
    public function photo(){
        return $this->hasOne(Photo::class);
    }
    public function location(){
        return $this->hasOne(Location::class);
    }
}
