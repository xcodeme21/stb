<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalData extends Model
{
    use HasFactory;

    protected $table = "personal_data";
    protected $fillable = ['full_name','mobile_phone','designation','company_name','company_address','company_phone','email','province_origin','industry','industry_other','industry_type','industry_type_other']; 
    public $timestamps = true;
}
