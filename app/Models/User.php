<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory,HasApiTokens,Notifiable;
    protected $fillable = [ 'email', 'password',];
    protected $attributes = [
        'role' => 'candidate',
        'otp' => '0'
    ];
    protected $hidden = [
        'password',
        'otp'
    ];
    function company(){
        return $this->hasOne(Company::class);
    }
}
