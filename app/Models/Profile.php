<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'full_name',
        'mother_name',
        'father_name',
        'date_of_birth',
        'blood_group',
        'social_id',
        'passport_no',
        'cell_no',
        'emergency_contact_no',
        'email',
        'whatsapp',
        'linked_in',
        'twitter',
        'facebook',
        'github',
        'behance',
        'dribble',
        'portfolio'
        
    ];
}
