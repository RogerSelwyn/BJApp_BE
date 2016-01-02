<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'regions';
    protected $primaryKey = 'id';
    protected $fillable = array('RegionName');

// DEFINE RELATIONSHIPS ------------------
    public function locations() {
        return $this->hasMany('App\Models\Location','RegionId'); 
    }

}
