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
            'logo_url' => 'Desarrollo de Apps',
            'name' => 'Realizo aplicaciones nativas tanto web, como móviles.',
        ]);
    }
}
