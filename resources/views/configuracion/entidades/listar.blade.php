@extends('layouts.app')

@section('title', 'Entidades')

@section('content')

<div class="space-y-6">

    {{-- Encabezado --}}
    <div class="flex items-center justify-between">

        <div>
            <h1 class="text-2xl font-semibold text-gray-800">
                Entidades
            </h1>

            <p class="text-sm text-gray-500 mt-1">
                Administración de entidades registradas en el sistema.
            </p>
        </div>

        <a href="{{ route('configuracion.entidades.create') }}"
           class="px-4 py-2 bg-[#024687] text-white rounded-lg hover:bg-blue-800 transition">

            <i class="bi bi-plus-circle mr-1"></i>
            Nueva entidad

        </a>

    </div>

    {{-- Mensaje --}}
    @if(session('success'))

        <div class="bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded">

            {{ session('success') }}

        </div>

    @endif

    {{-- Tabla --}}
    <div class="bg-white rounded-lg shadow border border-gray-200 overflow-hidden">

        <table class="w-full">

            <thead class="bg-gray-100">

                <tr class="text-left text-sm text-gray-700">

                    <th class="px-4 py-3">Código</th>

                    <th class="px-4 py-3">Entidad</th>

                    <th class="px-4 py-3">Siglas</th>

                    <th class="px-4 py-3">RUC</th>

                    <th class="px-4 py-3">Tipo</th>

                    <th class="px-4 py-3">Estado</th>

                    <th class="px-4 py-3 text-center">
                        Acciones
                    </th>

                </tr>

            </thead>

            <tbody>

                @forelse($entidades as $entidad)

                    <tr class="border-t hover:bg-gray-50">

                        <td class="px-4 py-3">

                            {{ $entidad->codigo }}

                        </td>

                        <td class="px-4 py-3">

                            {{ $entidad->nombre }}

                        </td>

                        <td class="px-4 py-3">

                            {{ $entidad->siglas }}

                        </td>

                        <td class="px-4 py-3">

                            {{ $entidad->ruc }}

                        </td>

                        <td class="px-4 py-3">

                            {{ $entidad->tipo }}

                        </td>

                        <td class="px-4 py-3">

                            @if($entidad->estado=='Activo')

                                <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs">

                                    Activo

                                </span>

                            @else

                                <span class="px-2 py-1 bg-red-100 text-red-700 rounded text-xs">

                                    Inactivo

                                </span>

                            @endif

                        </td>

                        <td class="px-4 py-3 text-center space-x-2">

                            <a href="{{ route('configuracion.entidades.show',$entidad) }}"
                               class="text-blue-600 hover:text-blue-800">

                                <i class="bi bi-eye-fill"></i>

                            </a>

                            <a href="{{ route('configuracion.entidades.edit',$entidad) }}"
                               class="text-amber-600 hover:text-amber-800">

                                <i class="bi bi-pencil-fill"></i>

                            </a>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="7"
                            class="text-center py-10 text-gray-500">

                            No existen entidades registradas.

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection