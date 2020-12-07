<?php

namespace App\Models;

use App\Models\SocialProfile;
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
        'email',
        'password',
        'avatar',
         'provider'
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
    public function adminlte_image(){
        return 'https://i.pinimg.com/originals/19/b8/d6/19b8d6e9b13eef23ec9c746968bb88b1.jpg';
    }
    public function adminlte_desc(){
        return 'Aministrador';
    }
    

    public function socialProfiles(){
        return $this->hasMany(SocialProfile::class);
    }


}
