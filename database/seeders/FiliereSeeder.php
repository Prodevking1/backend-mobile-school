<?php

namespace Database\Seeders;

use App\Models\Filiere;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $filieres = [
            ['nom' => 'Comptabilité-Contrôle-Audit', 'code' => 'CCA', 'niveau' => 1],
            ['nom' => 'Assurance-Banque-Finance', 'code' => 'ABF', 'niveau' => 1],
            ['nom' => 'Marketing et Gestion', 'code' => 'MG', 'niveau' => 1],
            ['nom' => 'Assistance de Direction Bilingue', 'code' => 'ADB', 'niveau' => 1],
            ['nom' => 'Méthodes Informatiques Appliquées à la Gestion', 'code' => 'MIAGE', 'niveau' => 1],
            ['nom' => 'Marketing et innovations digitales', 'code' => 'MID', 'niveau' => 1],
            ['nom' => 'Master Banque Finance', 'code' => 'MBF', 'niveau' => 2],
            ['nom' => 'Master Comptabilité-Contrôle-Audit', 'code' => 'MCCA', 'niveau' => 2],
            ['nom' => 'Master Administration et Gestion des Entreprises', 'code' => 'MAGE', 'niveau' => 2],
            ['nom' => 'Master Méthodes Informatiques Appliquées à la Gestion', 'code' => 'M MIAGE', 'niveau' => 2],
        ];

        foreach ($filieres as $filiere) {
            Filiere::create($filiere);
        }
    }

}