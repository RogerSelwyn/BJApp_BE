<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    protected $table = 'species';
    protected $primaryKey = 'id';
    protected $fillable = array('SpeciesTypeId', 'CommonName', 'LatinName', 'AliasName', 'Gender', 'Colouring', 'MigratoryPattern', 'Description', 'LocationDescription', 'SpecialistInformation');


// DEFINE RELATIONSHIPS ------------------
    public function speciestype() {
        return $this->belongsTo('App\Models\SpeciesType','SpeciesTypeId'); 
    }

    public function speciesphotos() {
        return $this->hasMany('App\Models\SpeciesPhoto','SpeciesId')->orderBy('IsDefault');; 
    }

    public function locations() {
        return $this->belongsToMany('App\Models\Location', 'specieslocations', 'SpeciesId', 'LocationId'); 
    }
}

