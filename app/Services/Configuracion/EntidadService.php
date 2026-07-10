<?php

namespace App\Services\Configuracion;

use App\Models\Entidad;
use App\Repositories\Interfaces\Configuracion\EntidadRepositoryInterface;

class EntidadService
{
    protected EntidadRepositoryInterface $entidadRepository;

    public function __construct(EntidadRepositoryInterface $entidadRepository)
    {
        $this->entidadRepository = $entidadRepository;
    }

    public function listar()
    {
        return $this->entidadRepository->listar();
    }

    public function obtenerPorId(int $id): ?Entidad
    {
        return $this->entidadRepository->obtenerPorId($id);
    }

    public function crear(array $datos): Entidad
    {
        return $this->entidadRepository->crear($datos);
    }

    public function actualizar(Entidad $entidad, array $datos): bool
    {
        return $this->entidadRepository->actualizar($entidad, $datos);
    }

    public function actualizarEstado(Entidad $entidad, string $estado): bool
    {
        return $this->entidadRepository->actualizarEstado($entidad, $estado);
    }
}