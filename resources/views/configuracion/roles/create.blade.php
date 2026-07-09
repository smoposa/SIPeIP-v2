@extends('layouts.app')

@section('content')

<div class="max-w-4xl mx-auto">

    <!-- Encabezado -->
    <div class="mb-6">

        <h1 class="text-2xl font-semibold text-gray-800">
            Nuevo Rol
        </h1>

        <p class="text-sm text-gray-500 mt-1">
            Registrar un nuevo rol en el sistema.
        </p>

    </div>

    <!-- Formulario -->
    <div class="bg-white rounded-lg shadow border border-gray-200">

        <form action="{{ route('configuracion.roles.store') }}" method="POST">

            @csrf

            <div class="p-6 space-y-6">

                <!-- Nombre -->
                <div>

                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Nombre <span class="text-red-500">*</span>
                    </label>

                    <input
                        type="text"
                        name="nombre"
                        value="{{ old('nombre') }}"
                        class="w-full rounded-lg border-gray-300 focus:border-[#024687] focus:ring-[#024687]"
                        maxlength="100"
                        required>

                    @error('nombre')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror

                </div>

                <!-- Descripción -->
                <div>

                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Descripción <span class="text-red-500">*</span>
                    </label>

                    <textarea
                        name="descripcion"
                        rows="4"
                        class="w-full rounded-lg border-gray-300 focus:border-[#024687] focus:ring-[#024687]"
                        required>{{ old('descripcion') }}</textarea>

                    @error('descripcion')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror

                </div>

                <!-- Estado -->
                <div class="w-64">

                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Estado
                    </label>

                    <select
                        name="estado"
                        class="w-full rounded-lg border-gray-300 focus:border-[#024687] focus:ring-[#024687]">

                        <option value="Activo" {{ old('estado') == 'Activo' ? 'selected' : '' }}>
                            Activo
                        </option>

                        <option value="Inactivo" {{ old('estado') == 'Inactivo' ? 'selected' : '' }}>
                            Inactivo
                        </option>

                    </select>

                </div>

            </div>

            <!-- Botones -->
            <div class="flex justify-end gap-3 border-t px-6 py-4 bg-gray-50">

                <a href="{{ route('configuracion.roles.listar') }}"
                   class="px-5 py-2 rounded-lg border border-gray-300 hover:bg-gray-100">

                    Cancelar

                </a>

                <button
                    type="submit"
                    class="px-5 py-2 rounded-lg bg-[#024687] text-white hover:bg-blue-800">

                    Guardar

                </button>

            </div>

        </form>

    </div>

</div>

@endsection