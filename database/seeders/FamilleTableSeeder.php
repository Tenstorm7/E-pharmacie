<?php

namespace Database\Seeders;

use App\Models\Famille;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamilleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $familles =[
            [
                'nom_fam'=>'PHARMACIE',
                'descri_fam'=>'produit ou medicament destiner aux etre humain',
            ],

            [
                'nom_fam'=>'PARA-PHARMACIE',
                'descri_fam'=>' autre produit vendu en pharmacie mis a part les medicament',
            ],

            [
                'nom_fam'=>'VETERINAIRE',
                'descri_fam'=>'produit ou medicament destiner aux animaux',
            ],
        ];

        foreach ($familles as $key => $value) {
            Famille::create($value);
        }
    }
}
