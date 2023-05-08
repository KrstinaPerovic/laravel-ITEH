<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activity::create([
            'name' => 'Visit the Eiffel Tower',
            'description' => 'Climb the iconic tower for stunning views of Paris.',
            'date_time' => '2023-07-03 10:00:00',
            'trip_id' => 1,
        ]);

        Activity::create([
            'name' => 'Take a stroll through Park Guell',
            'description' => 'Explore the colorful park and admire the views of Barcelona.',
            'date_time' => '2023-08-17 15:00:00',
            'trip_id' => 2,
        ]);

        Activity::create([
            'name' => 'Explore the Van Gogh Museum',
            'description' => 'See some of the most famous works of art by Vincent van Gogh in Amsterdam.',
            'date_time' => '2023-09-05 11:00:00',
            'trip_id' => 3,
        ]);

        Activity::create([
            'name' => 'Discover Berlin Wall',
            'description' => 'Learn about the history of the wall and its significance in Berlin.',
            'date_time' => '2023-07-03 14:00:00',
            'trip_id' => 1,
        ]);

        Activity::create([
            'name' => 'Visit the Hofburg Palace',
            'description' => 'Experience the grandeur of Vienna with a visit to this historic palace.',
            'date_time' => '2023-08-19 10:00:00',
            'trip_id' => 2,
        ]);

        Activity::create([
            'name' => 'Explore the Colosseum',
            'description' => 'Step back in time and discover the history of Rome\'s most famous landmark.',
            'date_time' => '2023-09-10 14:00:00',
            'trip_id' => 3,
        ]);
    }
}
