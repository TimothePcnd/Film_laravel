<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        DB::table('movies')->insert([
            [
                'title' => 'Les évades',
                'commentaire' => 'Les Évadés est un film que je trouve tout simplement magnifique. L’histoire d’Andy Dufresne, pleine d’espoir, de patience et de résilience, m’inspire profondément.
            Ce film montre que même dans les pires situations, l’intelligence, l’amitié et la foi peuvent triompher. À chaque visionnage, je ressors avec la même émotion : un mélange d’admiration et de gratitude. Pour moi, c’est un chef-d’œuvre intemporel.',
                'annee' => '1994-09-23',
                'note' => '10'
            ],
            [
                'title' => 'American Psycho',
                'commentaire' => 'American Psycho est un film que j’adore pour son ambiance glaciale et sa critique acerbe de la société superficielle des années 80. Christian Bale est juste incroyable dans ce rôle de Patrick Bateman, à la fois charmant et terrifiant.
                Ce film m’a vraiment marqué par son mélange d’humour noir et de tension psychologique, et il pousse à réfléchir sur l’obsession de l’apparence et du pouvoir. C’est un thriller unique qui reste gravé longtemps après le générique.',
                'annee' => '2000-04-14',
                'note' => '9.5'
            ]

        ]);
    }
}
