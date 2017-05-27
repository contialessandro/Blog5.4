<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'user_email', 'password'

    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token'
    ];
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function publish(Post $post)
    {
        $this->posts()->save($post);
    }

    /*public function getAuthPassword()
    {
        $custom_field = 'user_pass';
        return $this->$custom_field;
    }*/
    public $timestamps = false;

}
