<?php

namespace App;

use App\Company;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class CompanyProductUser extends Model
{
    protected $fillable=['user_id','company_id','product_id'];
    protected $table='company_product_user';

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
