<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Quadrant;
use App\Models\Indicator;

class Period extends Model
{
    use HasFactory;

    protected $fillable = [        
        
        'user_id',
        'date_regis', 
        'quadrant_id',
    ];

    
    public function user(){

        return $this->belongsTo(User::class);
    } 

    public function quadrant(){

        return $this->belongsTo(Quadrant::class);
    } 
    
    public function indicators(){

        return $this->belongsToMany(Indicator::class,'indicator_periods')
                    ->withPivot('amount','observation')
                    ->orderBy('amount','desc')
                    ->withTimestamps();
    } 

}
