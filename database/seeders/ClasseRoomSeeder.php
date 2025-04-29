<?php

namespace Database\Seeders;

use App\Models\ClasseRoom;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasseRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $salles =  DB::table('classerooms')->insert(
            [
                'numero' => 101,
                'name' => 'Salle Informatique A',
                'capacite' => 25
            ]);

       
        
    }
}