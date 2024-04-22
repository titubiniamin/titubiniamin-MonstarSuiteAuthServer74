<?php

namespace App;

use App\Country;
use App\Industry;
use App\Product;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'industry_id',
        'contact_person',
        'phone',
        'email',
        'country_id',
        'state',
        'city',
        'address',
        'postal_code',
        'currency',
        'is_parent',
    ];
    protected $hidden=['created_at','updated_at'];

    public function user()
    {
        return $this->hasMany(User::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class,'company_product_user','company_id','user_id')->withPivot([]);
    }
    public function products()
    {
        return $this->belongsToMany(Product::class,'company_product_user','company_id','product_id')->withPivot([]);
    }

}
