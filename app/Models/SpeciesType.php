<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpeciesType extends Model
{
    protected $table = 'speciestypes';
    protected $primaryKey = 'id';
    protected $fillable = array('SpeciesTypeName');

// DEFINE RELATIONSHIPS ------------------
    public function species() {
        return $this->hasMany('App\Models\Species','SpeciesTypeId'); 
    }

}
