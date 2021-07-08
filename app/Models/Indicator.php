<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Period;

class Indicator extends Model
{
    use HasFactory;

    protected $fillable = ['activity','action'];

    public function periods() 
    
    //relacion muchos a muchos
    
    {
        return $this->belongsToMany(Period::class,'indicator_period')
                ->withPivot('observation','amount')                
                ->withTimestamps();
    }            
              
                    
    
  
    
              
}
