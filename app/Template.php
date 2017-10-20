<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Hashids;

use jDate;

class Template extends Model
{
    
    protected $fillable = ["user_id", "title", "desc", "cover", "demo_addr", "zip_addr"];

    protected $appends = ["hashid", "kebabTitle", "humanDate"];


    public function getHashidAttribute()
    
    {
    	
    	return Hashids::encode( $this->id );
    
    }


    public function getKebabTitleAttribute()
    
    {
        
        return str_replace(' ', '-', $this->title );
    
    }

    public function getHumanDateAttribute()
    
    {
    	
    	return jDate::forge( $this->created_at )->ago();
    
    }
}
