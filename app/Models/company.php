<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;
    protected $fillable = ['company_name', 'company_id'];
    function users(){
        return $this->belongsTo(User::class);
    }
}