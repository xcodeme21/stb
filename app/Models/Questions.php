<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    protected $table = "questions";
    protected $fillable = ['personal_data_id', 'question1', 'question2','question3','question4','question5','question6','question6_other','question7','question8','question9']; 
    public $timestamps = true;
}
