<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpeciesLocation extends Model
{
    protected $table = 'specieslocations';
    protected $primaryKey = 'id';
    protected $fillable = array('SpeciesId', 'LocationId');

}

