<?php

namespace App\Repositories\Eloquent\Configuracion;

use App\Models\Rol;
use App\Repositories\Interfaces\Configuracion\RolRepositoryInterface;

class RolRepository implements RolRepositoryInterface
{
    public function getAll()
    {
        return Rol::orderBy('nombre')->get();
    }

    public function findById(int $id): ?Rol
    {
        return Rol::find($id);
    }

    public function create(array $data): Rol
    {
        return Rol::create($data);
    }

    public function update(Rol $rol, array $data): bool
    {
        return $rol->update($data);
    }

    public function contar(): int
    {
        return Rol::count();
    }

    public function contarActivos(): int
    {
        return Rol::where('estado', 'Activo')->count();
    }

    public function contarInactivos(): int
    {
        return Rol::where('estado', 'Inactivo')->count();
    }


}