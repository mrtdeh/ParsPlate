<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Silber\Bouncer\Database\HasRolesAndAbilities;
use Illuminate\Support\Facades\Hash;



class User extends Authenticatable
{
    use Notifiable, HasRolesAndAbilities;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];


    protected $append = [
        'username',
    ];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function isSuperAdmin()
    
    {
        
        return $this->id == 1;
    
    }


    public function getUsernameAttribute()
    
    {
        
        return explode("@", $this->email)[0];
    
    }


    public function setPasswordAttribute($rowPassword)
    
    {
        
        $this->attributes["password"] = Hash::make( $rowPassword );
    
    }
}
