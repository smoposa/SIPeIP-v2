<?php

namespace App\Repositories\Interfaces\Configuracion;

use App\Models\Rol;

interface RolRepositoryInterface
{
    public function getAll();

    public function findById(int $id): ?Rol;

    public function create(array $data): Rol;

    public function update(Rol $rol, array $data): bool;

    public function contar(): int;

    public function contarActivos(): int;

    public function contarInactivos(): int;

}