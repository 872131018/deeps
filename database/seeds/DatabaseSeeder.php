<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
           'name' => 'Administrator',
           'email' => 'admin@engrain.com',
           'password' => bcrypt('Alt@ir12'),
        ]);
        /*
        * Property Stuff
        */
        DB::table('property')->insert([
            'name' => 'Test Property',
            'address' => '123 Test St',
            'city' => 'Denver',
            'state' => 'CO',
            'zip' => '80303',
            'phone' => '3031231234',
            'slug' => 'testproperty',
            'latitude' => '0',
            'longitude'=> '0',
            'url' => 'www.engrain.com',
            'availability_username' => 'John_Galt',
            'availability_password' => 'atlas_shrugged',
            'availability_identifier' => 'Identifier',
            'availability_provider' => 'Provider',
            'availability_structure' => 'Structure',
            'cms_logo' => 'Logo',
            'cms_image' => 'Image'
        ]);
        /*
        * Amenity stuff so add a couple tests
        */
        DB::table('amenities')->insert([
            'category' => 'Category',
            'name' => 'Test Amenity 1',
            'description' => 'This is a test amenity!',
            'images' => 'http://image.jpg',
        ]);
        DB::table('amenities')->insert([
            'category' => 'Category',
            'name' => 'Test Amenity 2',
            'description' => 'This is another test amenity!',
            'images' => 'http://image.jpg',
        ]);
        DB::table('amenities')->insert([
            'category' => 'Category',
            'name' => 'Test Amenity 3',
            'description' => 'This is yet another test amenity!',
            'images' => 'http://image.jpg',
        ]);
        /*
        * Location stuff add a few here
        */
        DB::table('locations')->insert([
            'category' => 'Category',
            'name' => 'Location 1',
            'address' => '123 locations st',
            'city' => 'Denver',
            'state' => 'CO',
            'zip' => '80303',
            'phone' => '1234567890',
            'fax' => '1234567890',
            'url' => 'www.location.com',
            'latitude' => '120.12345',
            'longitude' => '120.12345',
        ]);
        DB::table('locations')->insert([
            'category' => 'Category',
            'name' => 'Location 2',
            'address' => '123 locations st',
            'city' => 'Denver',
            'state' => 'CO',
            'zip' => '80303',
            'phone' => '1234567890',
            'fax' => '1234567890',
            'url' => 'www.location.com',
            'latitude' => '120.12345',
            'longitude' => '120.12345',
        ]);
        DB::table('locations')->insert([
            'category' => 'Category',
            'name' => 'Location 3',
            'address' => '123 locations st',
            'city' => 'Denver',
            'state' => 'CO',
            'zip' => '80303',
            'phone' => '1234567890',
            'fax' => '1234567890',
            'url' => 'www.location.com',
            'latitude' => '120.12345',
            'longitude' => '120.12345',
        ]);
        /*
        * Event stuff here
        */
        DB::table('events')->insert([
            'category' => 'Category',
            'name' => 'Test Event 1',
            'location' => 'Event Room',
            'description' => 'A Test Event',
            'address' => '123 Event St',
            'city' => 'Denver',
            'state' => 'CO',
            'zip' => '80303',
            'phone' => '1234567890',
            'images' => 'event.jpg',
            'latitude' => '120.12345',
            'longitude' => '120.12345',
            'url' => 'www.event.com',
            'start_date' => '1-1-1970',
            'start_time' => '12:00pm',
            'end_date' => '1-1-2100',
            'end_time' => '12:00am'
        ]);
        DB::table('events')->insert([
            'category' => 'Category',
            'name' => 'Test Event 2',
            'location' => 'Event Room',
            'description' => 'A Test Event',
            'address' => '123 Event St',
            'city' => 'Denver',
            'state' => 'CO',
            'zip' => '80303',
            'phone' => '1234567890',
            'images' => 'event.jpg',
            'latitude' => '120.12345',
            'longitude' => '120.12345',
            'url' => 'www.event.com',
            'start_date' => '1-1-1970',
            'start_time' => '12:00pm',
            'end_date' => '1-1-2100',
            'end_time' => '12:00am'
        ]);
        DB::table('events')->insert([
            'category' => 'Category',
            'name' => 'Test Event 3',
            'location' => 'Event Room',
            'description' => 'A Test Event',
            'address' => '123 Event St',
            'city' => 'Denver',
            'state' => 'CO',
            'zip' => '80303',
            'phone' => '1234567890',
            'images' => 'event.jpg',
            'latitude' => '120.12345',
            'longitude' => '120.12345',
            'url' => 'www.event.com',
            'start_date' => '1-1-1970',
            'start_time' => '12:00pm',
            'end_date' => '1-1-2100',
            'end_time' => '12:00am'
        ]);
        /*
        * Test units for whatever
        */
        DB::table('units')->insert([
            'external_id' => '0001',
            'unit' => '101',
            'floor' => '1',
            'building' => 'Building A',
            'floorplan' => 'Floorplan A',
            'price' => '1500.00',
            'price_override' => '0',
            'available_status' => '1',
            'available_date' => '8-1-2016',
            'disabled' => 'N',
            'description' => 'This unit is amazing!',
            'images' => 'unit_101.jpg'
        ]);
        DB::table('units')->insert([
            'external_id' => '0002',
            'unit' => '102',
            'floor' => '1',
            'building' => 'Building A',
            'floorplan' => 'Floorplan B',
            'price' => '1500.00',
            'price_override' => '0',
            'available_status' => '1',
            'available_date' => '8-1-2016',
            'disabled' => 'N',
            'description' => 'This unit is amazing!',
            'images' => 'unit_102.jpg'
        ]);
        DB::table('units')->insert([
            'external_id' => '0003',
            'unit' => '103',
            'floor' => '1',
            'building' => 'Building A',
            'floorplan' => 'Floorplan C',
            'price' => '1500.00',
            'price_override' => '0',
            'available_status' => '1',
            'available_date' => '8-1-2016',
            'disabled' => 'N',
            'description' => 'This unit is amazing!',
            'images' => 'unit_103.jpg'
        ]);
        /*
        * Floorplan stuff
        */
        DB::table('floorplans')->insert([
            'external_id' => '0001',
            'floorplan' => 'Floorplan A',
            'bedrooms' => '1',
            'bathrooms' => '1',
            'den' => 'Y',
            'loft' => 'N',
            'penthouse' => 'N',
            'townhome' => 'N',
            'area_min' => '950',
            'area_max' => '1050',
            'description' => 'Floorplan A is great.',
            'images' => 'unit_101.jpg'
        ]);
        DB::table('floorplans')->insert([
            'external_id' => '0002',
            'floorplan' => 'Floorplan B',
            'bedrooms' => '2',
            'bathrooms' => '2',
            'den' => 'N',
            'loft' => 'Y',
            'penthouse' => 'N',
            'townhome' => 'N',
            'area_min' => '1000',
            'area_max' => '1200',
            'description' => 'Floorplan B is amazing.',
            'images' => 'unit_101.jpg'
        ]);
        DB::table('floorplans')->insert([
            'external_id' => '0003',
            'floorplan' => 'Floorplan C',
            'bedrooms' => '3',
            'bathrooms' => '2',
            'den' => 'N',
            'loft' => 'N',
            'penthouse' => 'Y',
            'townhome' => 'N',
            'area_min' => '1350',
            'area_max' => '1500',
            'description' => 'Floorplan C is the best.',
            'images' => 'unit_101.jpg'
        ]);
    }
}
