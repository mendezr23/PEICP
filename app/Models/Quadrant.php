<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Axi;
use App\Models\User;
use App\Models\Organism;
use App\Models\Type;
use App\Models\Municipality;
use App\Models\Region;



class Quadrant extends Model
{
    use HasFactory;

    protected $fillable = [
        
            'number',
            'type_id',
            'nomenclature',
            'area',
            'perimeter',
            'region_id',
            'state',
            'axis_id',
            'municipality_id',
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
   
    public function region(){

        return $this->belongsTo(Region::class);
    }
    public function axi(){

        return $this->belongsTo(Axi::class);
    }
    public function municipality(){

        return $this->belongsTo(Municipality::class);
    }
}
