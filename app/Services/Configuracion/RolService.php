<?php

namespace App\Services\Configuracion;

use App\Models\Rol;
use App\Repositories\Interfaces\Configuracion\RolRepositoryInterface;

class RolService
{
    public function __construct(
        protected RolRepositoryInterface $repository
    ) {
    }

    public function listar()
    {
        return $this->repository->getAll();
    }

    public function obtener(int $id): ?Rol
    {
        return $this->repository->findById($id);
    }

    public function crear(array $data): Rol
    {
        return $this->repository->create($data);
    }

    public function actualizar(Rol $rol, array $data): bool
    {
        return $this->repository->update($rol, $data);
    }

    public function dashboard(): array
    {
        return [
            'total'      => $this->repository->contar(),
            'activos'    => $this->repository->contarActivos(),
            'inactivos'  => $this->repository->contarInactivos(),
        ];
    }


}