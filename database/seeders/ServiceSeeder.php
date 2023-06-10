<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'title' => 'Desarrollo de Apps',
            'description' => 'Realizo aplicaciones nativas tanto web, como móviles.',
            'logo_url' => 'http://127.0.0.1:8000/images/icons/icon1.svg',
            'color_hex' => '#fefaf0',
        ]);

        Service::create([
            'title' => 'Desarrollo Web',
            'description' => 'Desarrollo Web con la mejor función.',
            'logo_url' => 'http://127.0.0.1:8000/images/icons/icon5.svg',
            'color_hex' => '#f3faff',
        ]);
    }
}
