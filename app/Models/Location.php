<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';
    protected $primaryKey = 'id';
    protected $fillable = array('LocationName', 'County', 'Country', 'Address', 'Description', 'Latitude', 'Longitude', 'ThumbnailLocation', 'MediumPhotoLocation', 'LargePhotoLocation', 'OriginalLocation');

// DEFINE RELATIONSHIPS ------------------
    public function species() {
        return $this->belongsToMany('App\Models\Species', 'specieslocations', 'LocationId', 'SpeciesId'); 
    }

	public function region() {
        return $this->belongsTo('App\Models\Region','RegionId'); 
    }

}
