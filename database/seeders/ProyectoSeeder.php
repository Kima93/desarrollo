<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProyectoSeeder extends Seeder
{
    public function run()
    {
        DB::table('proyectos')->insert([
            [
                'nombre' => 'Proyecto B',
                'fecha_inicio' => '2024-01-01',
                'estado' => 'Activo',
                'responsable' => 'Juan',
                'monto' => 5000
            ],
            [
                'nombre' => 'Proyecto C',
                'fecha_inicio' => '2024-02-01',
                'estado' => 'En progreso',
                'responsable' => 'María',
                'monto' => 10000
            ]
            ]);
    }   
}
