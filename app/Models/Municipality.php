<?php

namespace App\Models;
use App\Models\Quadrant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function quadrants()
        
    {
        return $this->hasMany(Quadrant::class);
    }
}
