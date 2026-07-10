@extends('layouts.app')

@section('title', 'Editar Entidad')

@section('content')

<div class="max-w-5xl mx-auto">

    <!-- Encabezado -->
    <div class="mb-6">

        <h1 class="text-2xl font-semibold text-gray-800">
            Editar Entidad
        </h1>

        <p class="text-sm text-gray-500 mt-1">
            Actualice la información de la entidad.
        </p>

    </div>

    <!-- Formulario -->
    <div class="bg-white rounded-lg shadow border border-gray-200">

        <form action="{{ route('configuracion.entidades.update', $entidad) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6">

                <!-- Código -->
                <div>

                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Código
                    </label>

                    <input
                        type="text"
                        name="codigo"
                        value="{{ old('codigo', $entidad->codigo) }}"
                        maxlength="20"
                        class="w-full rounded-lg border-gray-300 focus:border-blue-600 focus:ring-blue-600">

                    @error('codigo')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror

                </div>

                <!-- Siglas -->
                <div>

                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Siglas
                    </label>

                    <input
                        type="text"
                        name="siglas"
                        value="{{ old('siglas', $entidad->siglas) }}"
                        maxlength="20"
                        class="w-full rounded-lg border-gray-300 focus:border-blue-600 focus:ring-blue-600">

                    @error('siglas')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror

                </div>

                <!-- Nombre -->
                <div class="md:col-span-2">

                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Nombre
                    </label>

                    <input
                        type="text"
                        name="nombre"
                        value="{{ old('nombre', $entidad->nombre) }}"
                        maxlength="200"
                        class="w-full rounded-lg border-gray-300 focus:border-blue-600 focus:ring-blue-600">

                    @error('nombre')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror

                </div>

                <!-- RUC -->
                <div>

                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        RUC
                    </label>

                    <input
                        type="text"
                        name="ruc"
                        value="{{ old('ruc', $entidad->ruc) }}"
                        maxlength="13"
                        class="w-full rounded-lg border-gray-300 focus:border-blue-600 focus:ring-blue-600">

                    @error('ruc')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror

                </div>

                <!-- Tipo -->
                <div>

                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Tipo
                    </label>

                    <select
                        name="tipo"
                        class="w-full rounded-lg border-gray-300 focus:border-blue-600 focus:ring-blue-600">

                        <option value="">Seleccione...</option>

                        <option value="Organismo Rector"
                            {{ old('tipo', $entidad->tipo) == 'Organismo Rector' ? 'selected' : '' }}>
                            Organismo Rector
                        </option>

                        <option value="Ministerio"
                            {{ old('tipo', $entidad->tipo) == 'Ministerio' ? 'selected' : '' }}>
                            Ministerio
                        </option>

                    </select>

                    @error('tipo')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror

                </div>

                <!-- Estado -->
                <div>

                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Estado
                    </label>

                    <select
                        name="estado"
                        class="w-full rounded-lg border-gray-300 focus:border-blue-600 focus:ring-blue-600">

                        <option value="Activo"
                            {{ old('estado', $entidad->estado) == 'Activo' ? 'selected' : '' }}>
                            Activo
                        </option>

                        <option value="Inactivo"
                            {{ old('estado', $entidad->estado) == 'Inactivo' ? 'selected' : '' }}>
                            Inactivo
                        </option>

                    </select>

                    @error('estado')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror

                </div>

            </div>

            <!-- Botones -->
            <div class="flex justify-end gap-3 px-6 py-4 border-t">

                <a href="{{ route('configuracion.entidades.listar') }}"
                   class="px-5 py-2 rounded-lg border border-gray-300 hover:bg-gray-100">

                    Cancelar

                </a>

                <button
                    type="submit"
                    class="px-5 py-2 rounded-lg bg-[#024687] text-white hover:bg-blue-800">

                    Actualizar

                </button>

            </div>

        </form>

    </div>

</div>

@endsection