<?php

namespace App\Interfaces\Configuracion;

use App\Models\Entidad;

interface EntidadRepositoryInterface
{
    public function listar();

    public function obtenerPorId(int $id): ?Entidad;

    public function crear(array $datos): Entidad;

    public function actualizar(Entidad $entidad, array $datos): bool;

    public function actualizarEstado(Entidad $entidad, string $estado): bool;
}