<?php

namespace App;

use Cog\Likeable\Contracts\Likeable as LikeableContract;
use Cog\Likeable\Traits\Likeable;

use Illuminate\Database\Eloquent\Model;

use Hashids, Counter, jDate;



class Template extends Model implements LikeableContract 

{
    use Likeable;
    
    protected $fillable = ["user_id", "title", "desc", "tag"];

    protected $appends = ["hashid", "kebabTitle", "humanDate", "likesCount", "liked", "downloads", "pageViews"];




    public function getHashidAttribute()
    
    {
    	
    	return Hashids::encode( $this->id );
    
    }


    public function getKebabTitleAttribute()
    
    {
        
        return str_replace( ' ', '-', $this->title );
    
    }

    public function getHumanDateAttribute()
    
    {
    	
    	return jDate::forge( $this->created_at )->ago();
    
    }

    public function getDownloadsAttribute()
    
    {
        
        return Counter::show('downloads' . $this->id);
    
    }

    public function getPageViewsAttribute()
    
    {
        
        return Counter::show('pageviews' . $this->id);
    
    }
}
