<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;
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
            'name' => 'Usuario de ejemplo',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'description' => 'Software developer',
            'facebook_url' => '#',
            'twitter_url' => '#',
            'dribble_url' => '#',
            'linkedin_url' => '#',
            'phone' => '+34 639 39 02 49',
            'address' => 'Granada España',
            'birthdate' => '1997-06-11',
            'bio' => 'Soy un apasionado de la informática con una sólida experiencia de mas 6 años en el estudio de esta disciplina.<br>
            Durante este tiempo, he dedicado mi esfuerzo y dedicación al aprendizaje de diversos aspectos de la informática, incluyendo programación, bases de datos, redes y seguridad.<br>
            Este proceso me ha llevado a adquirir un amplio conjunto de habilidades técnicas y conocimientos teóricos en el campo de la informática.<br>
            Estoy emocionado por seguir creciendo y enfrentando nuevos desafíos en esta área.',
        ]);
    }
}
