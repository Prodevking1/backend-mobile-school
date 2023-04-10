<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Note;

class NoteSeeder extends Seeder
{
    public function run()
    {
        $ine = [1234567890, 1234556789, 123456678];
        $matieres = ['Programmation Web', 'Bases de données', 'Analyse et Conception de Systèmes d\'Information', 'Réseaux et Communications'];
        $professeurs = ['Dr Ouédraogo', 'Dr Traoré', 'Dr Sanou', 'Dr Kaboré', 'Dr Yaméogo', 'Dr Kiere', 'Pr Bado'];

        foreach (range(1, 100) as $index) {
            Note::create([
                'ine' => $ine[array_rand($ine)],
                'matiere' => $matieres[array_rand($matieres)],
                'professeur' => $professeurs[array_rand($professeurs)],
                'note' => rand(0, 20),

            ]);
        }
    }
}