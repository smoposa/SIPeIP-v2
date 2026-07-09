<?php

namespace App\Http\Controllers\Configuracion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Configuracion\Rol\StoreRolRequest;
use App\Http\Requests\Configuracion\Rol\UpdateRolRequest;
use App\Models\Rol;
use App\Services\Configuracion\RolService;

class RolController extends Controller
{
    public function __construct(
        protected RolService $service
    ) {}

    /**
     * Dashboard del módulo.
    */
    public function index()
    {
        $estadisticas = $this->service->dashboard();

        return view(
            'configuracion.roles.index',
            compact('estadisticas')
        );
    }     

    /**
     * Lista de roles.
     */
    public function listar()
    {
        $roles = $this->service->listar();

        return view('configuracion.roles.listar', compact('roles'));
    }

    /**
     * Formulario de creación.
     */
    public function create()
    {
        return view('configuracion.roles.create');
    }

    /**
     * Guardar nuevo rol.
     */
    public function store(StoreRolRequest $request)
    {
        $this->service->crear(
            $request->validated()
        );

            return redirect()
                ->route('configuracion.roles.listar')
                ->with('success', 'Rol creado correctamente.');

    }

    /**
     * Ver detalle.
     */
    public function show(Rol $rol)
    {
        return view('configuracion.roles.detalle', compact('rol'));
    }

    /**
     * Formulario de edición.
     */
    public function edit(Rol $rol)
    {
        return view('configuracion.roles.edit', compact('rol'));
    }

    /**
     * Actualizar.
     */
    public function update(UpdateRolRequest $request, Rol $rol)
    {
        $this->service->actualizar(
            $rol,
            $request->validated()
        );

return redirect()
    ->route('configuracion.roles.listar')
    ->with('success', 'Rol creado correctamente.');


    }
}