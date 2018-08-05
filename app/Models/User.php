<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

//门面类
use Auth;

class User extends Authenticatable
{
    use Notifiable {
    	notify as protected laravelNotify; 
    }
    
    public function notify($instance)
    {
    	//当前用户是自己的时候不用通知
    	if(Auth::check()){
	    	if($this->id == Auth::user()->id){
	    		return ;
	    	}
    	}
    	//$this->increment('notification_count');
    	$this->laravelNotify($instance);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
