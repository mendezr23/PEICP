<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Organism;
use App\Models\Type;
use App\Models\Indicator;



class Quadrant extends Model
{
    use HasFactory;

    protected $fillable = [
        
            'number',
            'type_id',
            'nomenclature',
            'area',
            'perimeter',
            'region',
            'state',
            'axis',
            'municipality',
            'parish',
            'town',
            'sector',
            'organism_id',
            'user_id',
            
        ];
    //Relacion uno a muchos (Inversa)

        public function user(){

        return $this->belongsTo(User::class);
    } 

    public function organism(){

        return $this->belongsTo(Organism::class);
    } 
    
    public function type(){

        return $this->belongsTo(Type::class);
    } 
   
}
