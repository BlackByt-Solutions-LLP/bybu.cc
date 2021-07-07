<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Layout extends Model
{
    use HasFactory;

    protected $table = 'layouts';

    protected $fillable = [
        'primaryColor',
        'secondaryColor',
        'bgImage',
        'bgColor',
        'profileImageDiv',
        'profileImage',
        'userDetailsDiv',
        'userNameDiv',
        'userName',
        'linksContainer',
        'linksDiv',
        'linkIcon',
        'linkText'
    ];

    public function users(){
        return $this->hasMany(User::class);
    }
}
