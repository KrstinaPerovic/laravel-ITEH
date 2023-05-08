<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Destination::create([
            'name' => 'Paris',
            'description' => 'The city of love, famous for its food, art, and culture.',
            'price' => 25.99,
        ]);

        Destination::create([
            'name' => 'Barcelona',
            'description' => 'A city of endless possibilities, with beaches, mountains, and stunning architecture.',
            'price' => 19.99,
        ]);

        Destination::create([
            'name' => 'Amsterdam',
            'description' => 'A charming city of canals, museums, and colorful houses.',
            'price' => 30.99,
        ]);

        Destination::create([
            'name' => 'Berlin',
            'description' => 'A city of vibrant art, culture, and history.',
            'price' => 23.99,
        ]);

        Destination::create([
            'name' => 'Vienna',
            'description' => 'The city of music, known for its elegant architecture and cultural events.',
            'price' => 28.99,
        ]);

        Destination::create([
            'name' => 'Rome',
            'description' => 'The Eternal City, famous for its history, art, and food.',
            'price' => 31.99,
        ]);
    }
}
