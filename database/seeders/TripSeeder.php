<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trip::create([
            'title' => 'Paris Adventure',
            'description' => 'Explore the city of love with this exciting trip to Paris!',
            'start_date' => '2023-07-01',
            'end_date' => '2023-07-10',
            'destination_id' => 1,
            'user_id' => 1,
        ]);

        Trip::create([
            'title' => 'New York City Getaway',
            'description' => 'Experience the Big Apple like never before with this trip to New York City!',
            'start_date' => '2023-08-15',
            'end_date' => '2023-08-22',
            'destination_id' => 2,
            'user_id' => 1,
        ]);

        Trip::create([
            'title' => 'China Expedition',
            'description' => 'Journey to the Far East with this unforgettable trip to China!',
            'start_date' => '2023-09-01',
            'end_date' => '2023-09-15',
            'destination_id' => 3,
            'user_id' => 2,
        ]);
    }
}
