@extends('layouts.app')

@section('content')

<div class="p-6">

    <h1 class="text-2xl font-semibold text-gray-800 mb-6">
        Dashboard de Roles
    </h1>

    <div class="grid grid-cols-3 gap-6">

        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-sm text-gray-500">
                Roles registrados
            </h2>

            <p class="text-3xl font-bold">
                {{ $estadisticas['total'] }}
            </p>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-sm text-gray-500">
                Roles activos
            </h2>

            <p class="text-3xl font-bold text-green-600">
                {{ $estadisticas['activos'] }}
            </p>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-sm text-gray-500">
                Roles inactivos
            </h2>

            <p class="text-3xl font-bold text-red-600">
                {{ $estadisticas['inactivos'] }}
            </p>
        </div>

    </div>

</div>

@endsection