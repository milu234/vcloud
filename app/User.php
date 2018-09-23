<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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
    public $timestamps = false;
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function is_staff(){
        if($this->role_id === 1 ){
            return true;
        }
        return false;
    }
    public function is_lab_ass(){
        if($this->role_id === 2 ){
            return true;
        }
        return false;
    }
    public function is_do(){
        if($this->role_id === 3 ){
            return true;
        }
        return false;
    }
    public function is_hod(){
        if($this->role_id === 4 ){
            return true;
        }
        return false;
    }
    public function is_p(){
        if($this->role_id === 5 ){
            return true;
        }
        return false;
    }
    public function is_sm(){
        if($this->role_id === 6 ){
            return true;
        }
        return false;
    }
    public function is_admin(){
        if($this->role_id === 8 ){
            return true;
        }
        return false;
    }
    public function is_unregis(){
        if($this->role_id === 7 ){
            return true;
        }
        return false;
    }
}
