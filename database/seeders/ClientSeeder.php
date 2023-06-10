<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'logo_url' => 'http://127.0.0.1:8000/images/slider/brand2.png',
            'name' => 'Diana ejemplo',
        ]);

        Client::create([
            'logo_url' => 'http://127.0.0.1:8000/images/slider/brand3.png',
            'name' => 'Penny ejemplo',
        ]);
    }
}
