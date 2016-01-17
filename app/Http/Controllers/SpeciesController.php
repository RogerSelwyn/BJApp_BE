<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Species;
use App\Models\Region;

class SpeciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // GET  /species  (just sending indexes for related tables)
        return Species::all();
		
		// GET /species  with embedded species type
//		return Species::with('SpeciesType')->get();
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
        // POST /species

        // TODO: do any integrity checks you need which are not provided by the database
        
        // Note: this currently gives me a foreign key constraint error upon insert?
        $species          = new Species($request->all());
        		
		$species->save();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //  GET  /species/1
        $species = Species::where('id', $id)
			->with('locations')
			->with('speciesphotos')
			->first();
			
		$regionsarray = array();
		$locationsarray = array();
		foreach($species->locations as $location) {
			array_push($locationsarray, $location->id);
			if (in_array($location->RegionId, $regionsarray) == false) {
				array_push($regionsarray, $location->RegionId);
			};
		};
		
		$regions = [];
		foreach($regionsarray as $regionid) {
			$region = Region::where('id', $regionid)
				->with('locations')
				->first();
			
			$locations = [];
			foreach($region->locations as $location) {
				if (in_array($location->id, $locationsarray)) {
					$locations[] = $location;
				};
			};
			
			$regions[] = [
				'id' 		 => $region->id,
				'RegionName' => $region->RegionName,
				'locations'  => $locations,
			];
		};
		
		$speciesone = [
			'id'					=> $species->id,
			'SpeciesTypeId'			=> $species->SpeciesTypeId,
			'CommonName'			=> $species->CommonName,
			'LatinName'				=> $species->LatinName,
			'AliasName'				=> $species->AliasName,
			'Gender'				=> $species->Gender,
			'Colouring'				=> $species->Colouring,
			'MigratoryPattern'		=> $species->MigratoryPattern,
			'Description'			=> $species->Description,
			'LocationDescription'	=> $species->LocationDescription,
			'SpecialistInformation'	=> $species->SpecialistInformation,
			'regions'				=> $regions,
			'speciesphotos'			=> $species->speciesphotos,
		];
		return $speciesone;
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
