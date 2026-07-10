<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Entidad;

class EntidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $entidades = [

            [
                'codigo' => 'SNP',
                'nombre' => 'Secretaría Nacional de Planificación',
                'siglas' => 'SNP',
                'ruc' => '1760001200001',
                'tipo' => 'Organismo Rector',
                'estado' => 'Activo',
            ],

            [
                'codigo' => 'MTOP',
                'nombre' => 'Ministerio de Transporte y Obras Públicas',
                'siglas' => 'MTOP',
                'ruc' => '1760001500001',
                'tipo' => 'Ministerio',
                'estado' => 'Activo',
            ],

            [
                'codigo' => 'MSP',
                'nombre' => 'Ministerio de Salud Pública',
                'siglas' => 'MSP',
                'ruc' => '1760001600001',
                'tipo' => 'Ministerio',
                'estado' => 'Activo',
            ],

            [
                'codigo' => 'MINEDUC',
                'nombre' => 'Ministerio de Educación',
                'siglas' => 'MINEDUC',
                'ruc' => '1760001700001',
                'tipo' => 'Ministerio',
                'estado' => 'Activo',
            ],

            [
                'codigo' => 'MEF',
                'nombre' => 'Ministerio de Economía y Finanzas',
                'siglas' => 'MEF',
                'ruc' => '1760001800001',
                'tipo' => 'Ministerio',
                'estado' => 'Activo',
            ],

            [
                'codigo' => 'MAATE',
                'nombre' => 'Ministerio del Ambiente, Agua y Transición Ecológica',
                'siglas' => 'MAATE',
                'ruc' => '1760001900001',
                'tipo' => 'Ministerio',
                'estado' => 'Activo',
            ],

            [
                'codigo' => 'MAG',
                'nombre' => 'Ministerio de Agricultura y Ganadería',
                'siglas' => 'MAG',
                'ruc' => '1760002000001',
                'tipo' => 'Ministerio',
                'estado' => 'Activo',
            ],

            [
                'codigo' => 'MIES',
                'nombre' => 'Ministerio de Inclusión Económica y Social',
                'siglas' => 'MIES',
                'ruc' => '1760002100001',
                'tipo' => 'Ministerio',
                'estado' => 'Activo',
            ],

        ];

        foreach ($entidades as $entidad) {
            Entidad::create($entidad);
        }
    }
}