@extends('layouts.app')

@section('content')

<div class="max-w-5xl mx-auto">

    <!-- Encabezado -->
    <div class="flex items-center justify-between mb-6">

        <div>

            <h1 class="text-2xl font-semibold text-gray-800">
                Detalle del Rol
            </h1>

            <p class="text-sm text-gray-500 mt-1">
                Información detallada del rol registrado.
            </p>

        </div>

        <a href="{{ route('configuracion.roles.listar') }}"
           class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100">

            <i class="bi bi-arrow-left"></i>

            Regresar

        </a>

    </div>

    <!-- Información -->
    <div class="bg-white rounded-lg shadow border border-gray-200">

        <div class="grid grid-cols-2 gap-6 p-6">

            <!-- Nombre -->
            <div>

                <label class="block text-sm font-semibold text-gray-500 mb-1">
                    Nombre
                </label>

                <div class="text-gray-800">
                    {{ $rol->nombre }}
                </div>

            </div>

            <!-- Estado -->
            <div>

                <label class="block text-sm font-semibold text-gray-500 mb-1">
                    Estado
                </label>

                @if($rol->estado == 'Activo')

                    <span class="inline-flex px-3 py-1 rounded-full bg-green-100 text-green-700 text-sm">
                        Activo
                    </span>

                @else

                    <span class="inline-flex px-3 py-1 rounded-full bg-red-100 text-red-700 text-sm">
                        Inactivo
                    </span>

                @endif

            </div>

            <!-- Descripción -->
            <div class="col-span-2">

                <label class="block text-sm font-semibold text-gray-500 mb-1">
                    Descripción
                </label>

                <div class="text-gray-800 whitespace-pre-line">
                    {{ $rol->descripcion }}
                </div>

            </div>

            <!-- Fecha de creación -->
            <div>

                <label class="block text-sm font-semibold text-gray-500 mb-1">
                    Fecha de creación
                </label>

                <div class="text-gray-800">
                    {{ $rol->created_at->format('d/m/Y H:i') }}
                </div>

            </div>

            <!-- Última actualización -->
            <div>

                <label class="block text-sm font-semibold text-gray-500 mb-1">
                    Última actualización
                </label>

                <div class="text-gray-800">
                    {{ $rol->updated_at->format('d/m/Y H:i') }}
                </div>

            </div>

        </div>

        <!-- Botones -->
        <div class="flex justify-end gap-3 border-t px-6 py-4 bg-gray-50">

            <a href="{{ route('configuracion.roles.edit', $rol) }}"
               class="px-5 py-2 bg-amber-500 text-white rounded-lg hover:bg-amber-600">

                <i class="bi bi-pencil-square"></i>

                Editar

            </a>

        </div>

    </div>

</div>

@endsection