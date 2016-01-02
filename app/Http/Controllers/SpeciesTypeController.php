<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\SpeciesType;
use App\Models\SpeciesPhoto;

class SpeciesTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // GET  /speciestype  (just sending indexes for related tables)
        return SpeciesType::all();
		
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
        // POST /speciestype

            $speciestype          = new SpeciesType($request->all());
        		
		$speciestype->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
	        //  GET  /speciestype/1
        $speciestype = SpeciesType::where('id',$id)
			->with('Species')
			->first();
			
		$species = [];
		foreach($speciestype->species as $speciesone) {
			$speciesphoto = SpeciesPhoto::where('SpeciesId',$speciesone->id)
				->where('IsDefault',1)
				->first();
				
			if ($speciesphoto != null) {
				$species[] = [
					'id' 		 		=> $speciesone->id,
					'CommonName' 		=> $speciesone->CommonName,
					'LatinName' 		=> $speciesone->LatinName,
					'ThumbnailLocation' => $speciesphoto->ThumbnailLocation,
				];
			} else{
				$species[] = [
					'id' 		 		=> $speciesone->id,
					'CommonName' 		=> $speciesone->CommonName,
					'LatinName' 		=> $speciesone->LatinName,
				];
			};
		};
		
		$speciestypeout = [
			'id'				=> $speciestype->id,
			'SpeciesTypeName'	=> $speciestype->SpeciesTypeName,
			'species'			=> $species,
		];
		return $speciestypeout;
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
