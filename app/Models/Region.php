<?php

namespace App\Models;
use App\Models\Quadrant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    
    protected $fillable = ['name'];

    public function quadrants() 
    //relacion uno a muchos
    
    {
        return $this->hasMany(Quadrant::class);
    }
}
