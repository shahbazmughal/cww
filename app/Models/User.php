<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // The attributes that are mass assignable
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'address',
        'city',
        'b_state',
        'zip',
        'title',
        'company',
        'business',
        'product',
        'business_phone',
        'mobile_no',
        'password',
    ];

    // The attributes that should be hidden for arrays
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // The attributes that should be cast to native types
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
