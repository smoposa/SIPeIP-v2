@extends('layouts.app')

@section('title', 'Detalle de la Entidad')

@section('content')

<div class="max-w-5xl mx-auto">

    <!-- Encabezado -->
    <div class="flex items-center justify-between mb-6">

        <div>

            <h1 class="text-2xl font-semibold text-gray-800">
                Detalle de la Entidad
            </h1>

            <p class="text-sm text-gray-500 mt-1">
                Información general de la entidad registrada.
            </p>

        </div>

        <a href="{{ route('configuracion.entidades.listar') }}"
           class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100">

            <i class="bi bi-arrow-left"></i>

            Regresar

        </a>

    </div>

    <!-- Información -->
    <div class="bg-white rounded-lg shadow border border-gray-200">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6">

            <div>

                <label class="block text-sm font-medium text-gray-500">
                    Código
                </label>

                <p class="mt-1 text-gray-800">
                    {{ $entidad->codigo }}
                </p>

            </div>

            <div>

                <label class="block text-sm font-medium text-gray-500">
                    Siglas
                </label>

                <p class="mt-1 text-gray-800">
                    {{ $entidad->siglas }}
                </p>

            </div>

            <div class="md:col-span-2">

                <label class="block text-sm font-medium text-gray-500">
                    Nombre
                </label>

                <p class="mt-1 text-gray-800">
                    {{ $entidad->nombre }}
                </p>

            </div>

            <div>

                <label class="block text-sm font-medium text-gray-500">
                    RUC
                </label>

                <p class="mt-1 text-gray-800">
                    {{ $entidad->ruc }}
                </p>

            </div>

            <div>

                <label class="block text-sm font-medium text-gray-500">
                    Tipo
                </label>

                <p class="mt-1 text-gray-800">
                    {{ $entidad->tipo }}
                </p>

            </div>

            <div>

                <label class="block text-sm font-medium text-gray-500">
                    Estado
                </label>

                <p class="mt-1">

                    @if($entidad->estado == 'Activo')

                        <span class="inline-flex px-3 py-1 text-sm rounded-full bg-green-100 text-green-700">
                            Activo
                        </span>

                    @else

                        <span class="inline-flex px-3 py-1 text-sm rounded-full bg-red-100 text-red-700">
                            Inactivo
                        </span>

                    @endif

                </p>

            </div>

            <div>

                <label class="block text-sm font-medium text-gray-500">
                    Fecha de creación
                </label>

                <p class="mt-1 text-gray-800">
                    {{ $entidad->created_at->format('d/m/Y H:i') }}
                </p>

            </div>

            <div>

                <label class="block text-sm font-medium text-gray-500">
                    Última actualización
                </label>

                <p class="mt-1 text-gray-800">
                    {{ $entidad->updated_at->format('d/m/Y H:i') }}
                </p>

            </div>

        </div>

        <div class="border-t px-6 py-4 flex justify-end">

            <a href="{{ route('configuracion.entidades.edit', $entidad) }}"
               class="px-5 py-2 bg-[#024687] text-white rounded-lg hover:bg-blue-800">

                <i class="bi bi-pencil-square"></i>

                Editar

            </a>

        </div>

    </div>

</div>

@endsection