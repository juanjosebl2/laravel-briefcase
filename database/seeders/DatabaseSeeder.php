<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Juan Jose Barrera Linde',
            'email' => 'juanjosebl2@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'description' => 'Software developer',
            'facebook_url' => '#',
            'twitter_url' => '#',
            'dribbble_url' => '#',
            'linkedin_url' => '#',
            'phone' => '+34 639 39 02 49',
            'address' => 'Granada, España',
            'birthdate' => '1997-06-11',
            'cv_url' => '#',
            'bio' => 'Soy un apasionado de la informática con una sólida experiencia de mas 6 años en el estudio de esta disciplina.<br><br>
            Durante este tiempo, he dedicado mi esfuerzo y dedicación al aprendizaje de diversos aspectos de la informática, incluyendo programación, bases de datos, redes y seguridad.<br><br>
            Este proceso me ha llevado a adquirir un amplio conjunto de habilidades técnicas y conocimientos teóricos en el campo de la informática.<br><br>
            Estoy emocionado por seguir creciendo y enfrentando nuevos desafíos en esta área.',
        ]);

        Client::create([
            'logo_url' => 'http://127.0.0.1:8000/images/slider/brand2.png',
            'name' => 'Diana ejemplo',
        ]);

        Client::create([
            'logo_url' => 'http://127.0.0.1:8000/images/slider/brand3.png',
            'name' => 'Penny ejemplo',
        ]);

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

        /*$this->call([
            //Client::class,
            Service::class,
        ]);*/
    }
}
