<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'birth_date',
        'gender',
        'country_id',
        'city_id',
        'postal_code',
        'user_id',
    ];
}
