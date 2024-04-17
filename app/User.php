<?php

namespace App;

use App\Company;
use App\Product;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'company_id',
        'is_active',
        'security_code',
        'model_name',
        'custom_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }


    public function companies()
    {
        return $this->belongsToMany(Company::class,'company_product_user','user_id','company_id')->withPivot([]);
    }

//    public function products()
//    {
//        return $this->belongsToMany(Product::class);
//    }
    public function products()
    {
        return $this->belongsToMany(Product::class,'company_product_user','user_id','product_id')->withPivot([]);
    }

}
