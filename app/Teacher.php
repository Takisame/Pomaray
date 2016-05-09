<?php

namespace Pomaray;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Teacher extends Model
{
    protected $fillable = ['image','name','technique','course','celPhone'];
    public function setimageAttribute($image)
    {
    		$this->attributes['image'] = Carbon::now()->second.$image->getClientOriginalName();
    		$name = Carbon::now()->second.$image->getClientOriginalName();
    		\Storage::disk('teacher')->put($name, \File::get($image));
    	
    }
}
