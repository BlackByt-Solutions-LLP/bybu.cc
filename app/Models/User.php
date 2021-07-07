<?php

namespace App\Models;

use App\Models\Link;
use App\Models\Layout;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'about',
        'email',
        'password',
        'layout_id',
        'avatar',
        'website',
        'mobile',
        'slug'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRouteKeyName(){
        return 'slug';
    }

    public function layout(){
    	return $this->belongsTo(Layout::class);
    }

    public function links(){
    	return $this->hasMany(Link::class);
    }
}
