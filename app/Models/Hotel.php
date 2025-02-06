<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'country_id',
        'city_id',
        'name',
        'stars',
        'email',
        'phone',
        'address',
        'zip',
        'image',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
