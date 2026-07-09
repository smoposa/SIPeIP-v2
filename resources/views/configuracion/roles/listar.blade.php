@extends('layouts.app')

@section('content')


@if(session('success'))
    <div id="alertSuccess"
         class="fixed top-5 right-5 bg-green-600 text-white px-6 py-3 rounded-lg shadow-lg z-50">

        {{ session('success') }}

    </div>

    <script>
        setTimeout(() => {
            const alerta = document.getElementById('alertSuccess');

            if (alerta) {
                alerta.remove();
            }
        }, 3000);
    </script>
@endif

<div class="p-6">

    <!-- Encabezado -->
    <div class="flex items-center justify-between mb-6">

        <div>

            <h1 class="text-2xl font-semibold text-gray-800">
                Roles registrados
            </h1>

            <p class="text-sm text-gray-500">
                Total de registros: {{ $roles->count() }}
            </p>

        </div>

        <a href="{{ route('configuracion.roles.create') }}"
           class="px-4 py-2 bg-[#024687] text-white rounded-lg hover:bg-blue-800">

            <i class="bi bi-plus-lg"></i>

            Nuevo Rol

        </a>

    </div>

    <!-- Tabla -->

    <div class="bg-white rounded-lg shadow border border-gray-200 overflow-hidden">

        <table class="min-w-full">

            <thead class="bg-gray-100">

                <tr>

                    <th class="px-6 py-3 text-left">Nombre</th>

                    <th class="px-6 py-3 text-left">Descripción</th>

                    <th class="px-6 py-3 text-center">Estado</th>

                    <th class="px-6 py-3 text-center">Acciones</th>

                </tr>

            </thead>

            <tbody>

                @forelse($roles as $rol)

                    <tr class="border-t hover:bg-gray-50">

                        <!-- Nombre -->
                        <td class="px-6 py-4 text-sm font-medium">

                            <a href="{{ route('configuracion.roles.show', $rol) }}"
                            class="text-[#024687] hover:text-blue-800 hover:underline">

                                {{ $rol->nombre }}

                            </a>

                        </td>

                                                    <td class="px-2 py-2 text-sm text-gray-600">

                            {{ $rol->descripcion }}

                        </td>

                        <td class="px-6 py-4 text-center">

                            @if($rol->estado == 'Activo')

                                <span class="px-2 py-1 rounded-full bg-green-100 text-green-700 text-xs">

                                    Activo

                                </span>

                            @else

                                <span class="px-2 py-1 rounded-full bg-red-100 text-red-700 text-xs">

                                    Inactivo

                                </span>

                            @endif

                        </td>

                        <td class="px-6 py-4 text-center space-x-2">

                            <a href="{{ route('configuracion.roles.show',$rol) }}"
                               class="text-blue-600">

                                <i class="bi bi-eye"></i>

                            </a>

                            <a href="{{ route('configuracion.roles.edit',$rol) }}"
                               class="text-yellow-600">

                                <i class="bi bi-pencil-square"></i>

                            </a>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="4"
                            class="text-center py-8 text-gray-500">

                            No existen registros.

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection