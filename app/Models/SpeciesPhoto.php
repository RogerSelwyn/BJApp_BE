<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpeciesPhoto extends Model
{
    protected $table = 'speciesphotos';
    protected $primaryKey = 'id';
    protected $fillable = array('SpeciesId', 'ThumbnailLocation', 'MediumPhotoLocation', 'LargePhotoLocation', 'Description', 'OriginalLocation');

// DEFINE RELATIONSHIPS ------------------
    public function species() {
        return $this->belongsTo('App\Models\Species','SpeciesId'); 
    }

}
