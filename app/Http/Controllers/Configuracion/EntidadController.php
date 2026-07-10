<?php

namespace App\Http\Controllers\Configuracion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Configuracion\Entidad\StoreEntidadRequest;
use App\Http\Requests\Configuracion\Entidad\UpdateEntidadRequest;
use App\Models\Entidad;
use App\Services\Configuracion\EntidadService;

class EntidadController extends Controller
{
    public function __construct(
        protected EntidadService $service
    ) {}

    /**
     * Lista de entidades.
     */
    public function listar()
    {
        $entidades = $this->service->listar();

        return view(
            'configuracion.entidades.listar',
            compact('entidades')
        );
    }

    /**
     * Formulario de creación.
     */
    public function create()
    {
        return view('configuracion.entidades.create');
    }

    /**
     * Guardar nueva entidad.
     */
    public function store(StoreEntidadRequest $request)
    {
        $this->service->crear(
            $request->validated()
        );

        return redirect()
            ->route('configuracion.entidades.listar')
            ->with('success', 'Entidad creada correctamente.');
    }

    /**
     * Ver detalle.
     */
    public function show(Entidad $entidad)
    {
        return view(
            'configuracion.entidades.detalle',
            compact('entidad')
        );
    }

    /**
     * Formulario de edición.
     */
    public function edit(Entidad $entidad)
    {
        return view(
            'configuracion.entidades.edit',
            compact('entidad')
        );
    }

    /**
     * Actualizar.
     */
    public function update(
        UpdateEntidadRequest $request,
        Entidad $entidad
    ) {
        $this->service->actualizar(
            $entidad,
            $request->validated()
        );

        return redirect()
            ->route('configuracion.entidades.listar')
            ->with('success', 'Entidad actualizada correctamente.');
    }
}