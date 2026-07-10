<?php

namespace App\Repositories\Eloquent\Configuracion;

use App\Models\Entidad;
use App\Repositories\Interfaces\Configuracion\EntidadRepositoryInterface;

class EntidadRepository implements EntidadRepositoryInterface
{
    public function listar()
    {
        return Entidad::orderBy('nombre')->get();
    }

    public function obtenerPorId(int $id): ?Entidad
    {
        return Entidad::find($id);
    }

    public function crear(array $datos): Entidad
    {
        return Entidad::create($datos);
    }

    public function actualizar(Entidad $entidad, array $datos): bool
    {
        return $entidad->update($datos);
    }

    public function actualizarEstado(Entidad $entidad, string $estado): bool
    {
        return $entidad->update([
            'estado' => $estado
        ]);
    }
}