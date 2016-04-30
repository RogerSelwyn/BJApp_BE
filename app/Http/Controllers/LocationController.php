<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // GET  /location  (just sending indexes for related tables)
        return Location::all();
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // POST /location

        $location          = new Location($request->all());
        		
		$location->save();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //  GET  /location/1
        $location = Location::where('id',$id)
			->first();
        $locationspecies = Location::where('id',$id)
			->first()
			->species()
			->orderBy('CommonName','asc')
			->with(array('speciesphotos' => function($query) {
				$query->where('IsDefault', 1);
				}))
			->get();
			
		$species = [];
		foreach($locationspecies as $speciesone) {
			$thumbnail = '';
			foreach($speciesone->speciesphotos as $speciesphoto) {
				$thumbnail = $speciesphoto->ThumbnailLocation;
				$photo = $speciesphoto->PhotoLocation;
			};	
			if ($thumbnail != '') {
				$species[] = [
					'id' 		 			=> $speciesone->id,
					'CommonName' 			=> $speciesone->CommonName,
					'LatinName' 			=> $speciesone->LatinName,
					'AliasName' 			=> $speciesone->AliasName,
					'Gender'	 			=> $speciesone->Gender,
					'Colouring' 			=> $speciesone->Colouring,
					'MigratoryPattern' 		=> $speciesone->MigratoryPattern,
					'Description' 			=> $speciesone->Description,
					'LocationDescription' 	=> $speciesone->LocationDescription,
					'SpecialistInformation'	=> $speciesone->SpecialistInformation,
					'ThumbnailLocation' 	=> $thumbnail,
					'PhotoLocation' 		=> $photo,
				];
			} else{
				$species[] = [
					'id' 		 			=> $speciesone->id,
					'CommonName' 			=> $speciesone->CommonName,
					'LatinName' 			=> $speciesone->LatinName,
					'AliasName' 			=> $speciesone->AliasName,
					'Gender'	 			=> $speciesone->Gender,
					'Colouring' 			=> $speciesone->Colouring,
					'MigratoryPattern' 		=> $speciesone->MigratoryPattern,
					'Description' 			=> $speciesone->Description,
					'LocationDescription' 	=> $speciesone->LocationDescription,
					'SpecialistInformation'	=> $speciesone->SpecialistInformation,
				];
			};
		};	
		$locationout = [
			'id'				=> $location->id,
			'RegionId'			=> $location->RegionId,
			'LocationName'		=> $location->LocationName,
			'Address'			=> $location->Address,
			'County'			=> $location->County,
			'Postcode'			=> $location->Postcode,
			'Country'			=> $location->Country,
			'Description'		=> $location->Description,
			'Latitude'			=> $location->Latitude,
			'Longitude' 		=> $location->Longitude,
			'ThumbnailLocation'	=> $location->ThumbnailLocation,
			'PhotoLocation'		=> $location->PhotoLocation,
			'OriginalLocation'	=> $location->OriginalLocation,
			'species'			=> $species,
		];
		return $locationout;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
