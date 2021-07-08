<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indicator_period extends Model
{

    use HasFactory;

    protected $fillable = ['period_id','indicator_id','amount','observation'];
    
}
