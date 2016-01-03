<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\SpeciesType;
use App\Models\Species;
use App\Models\SpeciesPhoto;
use App\Models\Location;
use App\Models\SpeciesLocation;
use App\Models\Region;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->command->info('Clean down....');
        $this->call(CleandownSeeder::class);

        $this->command->info('Seeding SpeciesType....');
        $this->call(SpeciesTypeSeeder::class);

        $this->command->info('Seeding Species....');
        $this->call(SpeciesSeeder::class);

        $this->command->info('Seeding SpeciesPhoto....');
        $this->call(SpeciesPhotoSeeder::class);

        $this->command->info('Seeding Region....');
        $this->call(RegionSeeder::class);

        $this->command->info('Seeding Location....');
        $this->call(LocationSeeder::class);

        $this->command->info('Seeding SpeciesLocation....');
        $this->call(SpeciesLocationSeeder::class);

        $this->command->info('Seeding finished');

        Model::reguard();

        $this->call(RelationshipChecker::class);
 
    }
}

class CleandownSeeder extends Seeder {
    
    public function run() {
        DB::table('speciesphotos')->delete();
        DB::table('specieslocations')->delete();
        DB::table('locations')->delete();
        DB::table('regions')->delete();
        DB::table('species')->delete();
        DB::table('speciestypes')->delete();

	}
}

class SpeciesTypeSeeder extends Seeder {
    
    public function run() {
        $speciestype = SpeciesType::create(array(
		'SpeciesTypeName'         => 'Bird'
        ));

        $speciestype = SpeciesType::create(array(
		'SpeciesTypeName'         => 'Fish'
        ));
	}
}

class SpeciesSeeder extends Seeder {
    
    public function run() {
        $speciesType = SpeciesType::where('SpeciesTypeName', '=', 'Bird')->first();

        $speciesGull = Species::create(array(
		'SpeciesTypeId'      => $speciesType->id,
		'CommonName'         => 'Gull',
		'LatinName'          => 'Gullus',
		'AliasName'          => 'Sea Gull',
		'Gender'             => 'Male',
		'Colouring'          => 'Greyish',
		'MigratoryPattern'   => 'All over the place',
		'Description'        => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pharetra lacinia dolor sit amet facilisis. Donec sapien tortor, aliquet at ipsum sed, venenatis viverra quam. Phasellus et volutpat sem. Maecenas eget sapien ac justo feugiat sollicitudin eu non nibh. Ut rutrum finibus lacus, a vehicula elit cursus in. Nullam malesuada massa non justo tincidunt fermentum. Quisque viverra, mauris et gravida semper, dui massa convallis massa, vitae laoreet diam eros sit amet risus. Nullam posuere orci lorem, vel ultrices sem molestie sit amet. Vestibulum vel tellus bibendum, gravida mi at, commodo justo. Vestibulum ac orci aliquet ligula molestie ullamcorper. Aliquam sed est aliquet nisi volutpat varius. Phasellus consectetur tempor molestie. Aliquam convallis malesuada justo, nec sodales est.</p><p>Pellentesque lobortis lacinia orci ac pulvinar. Cras placerat feugiat orci non sollicitudin. Pellentesque convallis ante rhoncus est ultricies laoreet. Integer dignissim eu nulla nec semper. Nam nec sem et tortor volutpat congue eget ut risus. Mauris ullamcorper nisi nisl, finibus tristique tortor pulvinar rutrum. Praesent dui quam, porta sodales pretium vitae, venenatis at leo. Ut at enim fermentum, faucibus quam ac, consectetur justo. Aenean cursus odio vel nunc rutrum lacinia luctus eget sapien. Suspendisse consequat consequat molestie. Duis id ultrices lectus. Donec eleifend justo eget nisi semper ultricies. Aliquam accumsan non neque nec imperdiet. Nunc feugiat consequat pellentesque.</p><p>Etiam a lorem id tortor maximus porta. Fusce vel condimentum sem, eget rutrum magna. Suspendisse posuere mattis pulvinar. Duis blandit eu libero non pharetra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque vel nibh urna. Phasellus fermentum dolor in purus malesuada euismod.</p>'
        ));

        $speciesGull = Species::create(array(
		'SpeciesTypeId'      => $speciesType->id,
		'CommonName'         => 'Tern',
		'LatinName'          => 'Ternii',
		'AliasName'          => 'Sea Tern',
		'Gender'             => 'Male',
		'Colouring'          => 'Greyish',
		'MigratoryPattern'   => 'All over',
		'Description'        => 'Lorem Ipsum'
        ));

        $speciesGull = Species::create(array(
		'SpeciesTypeId'      => $speciesType->id,
		'CommonName'         => 'Tern2',
		'LatinName'          => 'Ternii',
		'AliasName'          => 'Sea Tern',
		'Gender'             => 'Male',
		'Colouring'          => 'Greyish',
		'MigratoryPattern'   => 'All over',
		'Description'        => 'Lorem Ipsum'
        ));

        $speciesGull = Species::create(array(
		'SpeciesTypeId'      => $speciesType->id,
		'CommonName'         => 'Tern3',
		'LatinName'          => 'Ternii',
		'AliasName'          => 'Sea Tern',
		'Gender'             => 'Male',
		'Colouring'          => 'Greyish',
		'MigratoryPattern'   => 'All over',
		'Description'        => 'Lorem Ipsum'
        ));

        $speciesGull = Species::create(array(
		'SpeciesTypeId'      => $speciesType->id,
		'CommonName'         => 'Tern4',
		'LatinName'          => 'Ternii',
		'AliasName'          => 'Sea Tern',
		'Gender'             => 'Male',
		'Colouring'          => 'Greyish',
		'MigratoryPattern'   => 'All over',
		'Description'        => 'Lorem Ipsum'
        ));

        $speciesGull = Species::create(array(
		'SpeciesTypeId'      => $speciesType->id,
		'CommonName'         => 'Tern5',
		'LatinName'          => 'Ternii',
		'AliasName'          => 'Sea Tern',
		'Gender'             => 'Male',
		'Colouring'          => 'Greyish',
		'MigratoryPattern'   => 'All over',
		'Description'        => 'Lorem Ipsum'
        ));

        $speciesGull = Species::create(array(
		'SpeciesTypeId'      => $speciesType->id,
		'CommonName'         => 'Tern6',
		'LatinName'          => 'Ternii',
		'AliasName'          => 'Sea Tern',
		'Gender'             => 'Male',
		'Colouring'          => 'Greyish',
		'MigratoryPattern'   => 'All over',
		'Description'        => 'Lorem Ipsum'
        ));

        $speciesGull = Species::create(array(
		'SpeciesTypeId'      => $speciesType->id,
		'CommonName'         => 'Tern7',
		'LatinName'          => 'Ternii',
		'AliasName'          => 'Sea Tern',
		'Gender'             => 'Male',
		'Colouring'          => 'Greyish',
		'MigratoryPattern'   => 'All over',
		'Description'        => 'Lorem Ipsum'
        ));

        $speciesGull = Species::create(array(
		'SpeciesTypeId'      => $speciesType->id,
		'CommonName'         => 'Tern8',
		'LatinName'          => 'Ternii',
		'AliasName'          => 'Sea Tern',
		'Gender'             => 'Male',
		'Colouring'          => 'Greyish',
		'MigratoryPattern'   => 'All over',
		'Description'        => 'Lorem Ipsum'
        ));

        $speciesGull = Species::create(array(
		'SpeciesTypeId'      => $speciesType->id,
		'CommonName'         => 'Tern9',
		'LatinName'          => 'Ternii',
		'AliasName'          => 'Sea Tern',
		'Gender'             => 'Male',
		'Colouring'          => 'Greyish',
		'MigratoryPattern'   => 'All over',
		'Description'        => 'Lorem Ipsum'
        ));

        $speciesGull = Species::create(array(
		'SpeciesTypeId'      => $speciesType->id,
		'CommonName'         => 'Tern10',
		'LatinName'          => 'Ternii',
		'AliasName'          => 'Sea Tern',
		'Gender'             => 'Male',
		'Colouring'          => 'Greyish',
		'MigratoryPattern'   => 'All over',
		'Description'        => 'Lorem Ipsum'
        ));

        $speciesType = SpeciesType::where('SpeciesTypeName', '=', 'Fish')->first();

        $speciesSeaHare = Species::create(array(
		'SpeciesTypeId'      => $speciesType->id,
		'CommonName'         => 'Sea Hare',
		'LatinName'          => 'Long latin name',
		'AliasName'          => 'Sea Hare',
		'Gender'             => 'Male',
		'Colouring'          => 'Very Pretty',
		'MigratoryPattern'   => 'Not far',
		'Description'        => 'Lorem Ipsum'
        ));
	}
}

class SpeciesPhotoSeeder extends Seeder {
    
    public function run() {
        $species = Species::where('CommonName', '=', 'Gull')->first();

        $speciesphoto1 = SpeciesPhoto::create(array(
		'SpeciesId'          => $species->id,
		'ThumbnailLocation'  => 'images/thumbs/species-1.jpg',
		'PhotoLocation'      => 'images/species-1.jpg',
		'IsDefault'          => True
        ));

        $speciesphoto2 = SpeciesPhoto::create(array(
		'SpeciesId'          => $species->id,
		'ThumbnailLocation'  => 'images/thumbs/species-1.jpg',
		'PhotoLocation'      => 'images/species-1.jpg',
		'IsDefault'          => False
        ));

        $speciesphoto1 = SpeciesPhoto::create(array(
		'SpeciesId'          => $species->id,
		'ThumbnailLocation'  => 'images/thumbs/species-1.jpg',
		'PhotoLocation'      => 'images/species-1.jpg',
		'IsDefault'          => False
        ));

        $speciesphoto2 = SpeciesPhoto::create(array(
		'SpeciesId'          => $species->id,
		'ThumbnailLocation'  => 'images/thumbs/species-1.jpg',
		'PhotoLocation'      => 'images/species-1.jpg',
		'IsDefault'          => False
        ));

        $speciesphoto1 = SpeciesPhoto::create(array(
		'SpeciesId'          => $species->id,
		'ThumbnailLocation'  => 'images/thumbs/species-1.jpg',
		'PhotoLocation'      => 'images/species-1.jpg',
		'IsDefault'          => False
        ));

        $speciesphoto2 = SpeciesPhoto::create(array(
		'SpeciesId'          => $species->id,
		'ThumbnailLocation'  => 'images/thumbs/species-1.jpg',
		'PhotoLocation'      => 'images/species-1.jpg',
		'IsDefault'          => False
        ));
		
        $speciesphoto1 = SpeciesPhoto::create(array(
		'SpeciesId'          => $species->id,
		'ThumbnailLocation'  => 'images/thumbs/species-1.jpg',
		'PhotoLocation'      => 'images/species-1.jpg',
		'IsDefault'          => False
        ));

        $speciesphoto2 = SpeciesPhoto::create(array(
		'SpeciesId'          => $species->id,
		'ThumbnailLocation'  => 'images/thumbs/species-1.jpg',
		'PhotoLocation'      => 'images/species-1.jpg',
		'IsDefault'          => False
        ));
	}
}

class RegionSeeder extends Seeder {
    
    public function run() {
        
        $region = Region::create(array(
		'RegionName'       => 'Cornwall & Devon',
        ));

        $region = Region::create(array(
		'RegionName'       => 'Wales',
        ));

	}
}

class LocationSeeder extends Seeder {
    
    public function run() {
        
        $region1 = Region::where('RegionName', '=', 'Cornwall & Devon')->first();
        $region2 = Region::where('RegionName', '=', 'Wales')->first();

        $gylly = Location::create(array(
		'RegionId'          => $region1->id,
		'LocationName'       => 'Gyllyngvase Beach',
		'Address'            => 'Falmouth',
		'County'             => 'Cornwall',
		'Postcode'           => 'TR11 5',
		'Country'            => 'UK',
		'Description'        => 'Lorem Ipsum',
		'Longitude'          => -5.0696103,
		'Latitude'           => 50.1439527
        ));

        $swanpool = Location::create(array(
		'RegionId'          => $region1->id,
		'LocationName'       => 'Swanpool Beach',
		'Address'            => 'Falmouth',
		'County'             => 'Cornwall',
		'Postcode'           => 'TR11 4',
		'Country'            => 'UK',
		'Description'        => 'Lorem Ipsum',
		'Longitude'          => -5.0790497,
		'Latitude'           => 50.1404154,
        ));

        $tyrcelyn = Location::create(array(
		'RegionId'          => $region2->id,
		'LocationName'       => 'Tyr Celyn',
		'Address'            => 'Clynnog Fawr',
		'County'             => 'Gwynedd',
		'Postcode'           => 'LL54',
		'Country'            => 'UK',
		'Description'        => 'Lorem Ipsum',
		'Longitude'          => -4.372918,
		'Latitude'           => 53.021744
        ));

	}
}

class SpeciesLocationSeeder extends Seeder {
    
    public function run() {
        
        $gull = Species::where('CommonName', '=', 'Gull')->first();
        $tern = Species::where('CommonName', '=', 'Tern')->first();
        $seahare = Species::where('CommonName', '=', 'Sea Hare')->first();
        
        $gylly = Location::where('LocationName', '=', 'Gyllyngvase Beach')->first();
        $swanpool = Location::where('LocationName', '=', 'Swanpool Beach')->first();
        $tyrcelyn = Location::where('LocationName', '=', 'Tyr Celyn')->first();

// ---------- Attach doesn't seem to maintain timestamp
//        $gull->locations()->attach($gylly->id);
//        $gull->locations()->attach($swanpool->id);
//        $tern->locations()->attach($gylly->id);

        $rel1 = SpeciesLocation::create(array(
		'SpeciesId'          => $gull->id,
		'LocationId'         => $gylly->id
        ));

        $rel2 = SpeciesLocation::create(array(
		'SpeciesId'          => $gull->id,
		'LocationId'         => $swanpool->id
        ));

        $rel2 = SpeciesLocation::create(array(
		'SpeciesId'          => $gull->id,
		'LocationId'         => $tyrcelyn->id
        ));

        $rel1 = SpeciesLocation::create(array(
		'SpeciesId'          => $tern->id,
		'LocationId'         => $gylly->id
        ));

        $rel1 = SpeciesLocation::create(array(
		'SpeciesId'          => $seahare->id,
		'LocationId'         => $gylly->id
        ));

	}
}




class RelationshipChecker extends Seeder {
    public function run() {
        $this->command->info('Check Species - SpeciesType relationship....');
        $gull = Species::where('CommonName', '=', 'Gull')->first();
        $type = $gull->speciestype;
        $this->command->info($type->SpeciesTypeName);

        $this->command->info('Check SpeciesType - Species relationship....');

        $bird = SpeciesType::where('SpeciesTypeName', '=', 'Bird')->first();
        $species = $bird->species;
        foreach ($species as $onespecies)
        	$this->command->info($onespecies->CommonName);

//---------------------------

        $this->command->info('Check Species - SpeciesPhoto relationship....');

        $photos = $gull->speciesphotos;
        foreach ($photos as $photo)
        	$this->command->info($photo->PhotoLocation);

        $this->command->info('Check SpeciesPhoto - Species relationship....');
        $photo1 = SpeciesPhoto::first();
        $speciesone = $photo1->species;
        $this->command->info($speciesone->CommonName);

//---------------------------

        $this->command->info('Check Species - Location relationship....');

        $gull = Species::where('CommonName', '=', 'Gull')->first();
        $locations = $gull->locations;
        foreach ($locations as $location)
        	$this->command->info($location->LocationName);

        $this->command->info('Check Location - Species relationship....');

        $gylly = Location::where('LocationName', '=', 'Gyllyngvase Beach')->first();
        $species = $gylly->species;
        foreach ($species as $speciesone)
        	$this->command->info($speciesone->CommonName);

//---------------------------

        $this->command->info('Relationships OK if no error');

	}
}

