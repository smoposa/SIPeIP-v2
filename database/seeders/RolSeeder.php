<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [

            [
                'nombre' => 'Administrador del Sistema',
                'descripcion' => 'Administra toda la plataforma y la configuración general.',
                'estado' => 'Activo',
            ],

            [
                'nombre' => 'Administrador Institucional',
                'descripcion' => 'Administra usuarios y configuración de una entidad pública.',
                'estado' => 'Activo',
            ],

            [
                'nombre' => 'Director de Planificación',
                'descripcion' => 'Aprueba y supervisa la planificación institucional.',
                'estado' => 'Activo',
            ],

            [
                'nombre' => 'Analista de Planificación',
                'descripcion' => 'Registra y actualiza planes, objetivos, metas e indicadores.',
                'estado' => 'Activo',
            ],

            [
                'nombre' => 'Director de Inversión Pública',
                'descripcion' => 'Supervisa programas y proyectos de inversión.',
                'estado' => 'Activo',
            ],

            [
                'nombre' => 'Analista de Inversión Pública',
                'descripcion' => 'Registra y administra programas y proyectos de inversión.',
                'estado' => 'Activo',
            ],

            [
                'nombre' => 'Auditor',
                'descripcion' => 'Consulta la trazabilidad y auditoría del sistema.',
                'estado' => 'Activo',
            ],

            [
                'nombre' => 'Consulta',
                'descripcion' => 'Acceso únicamente de lectura a la información.',
                'estado' => 'Activo',
            ],

        ];

        foreach ($roles as $rol) {
            Rol::firstOrCreate(
                ['nombre' => $rol['nombre']],
                $rol
            );
        }
    }
}