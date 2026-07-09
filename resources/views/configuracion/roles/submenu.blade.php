<div class="h-full bg-white">

    {{-- Encabezado --}}
    <div class="px-5 py-4 border-b">

        <h2 class="text-lg font-semibold text-gray-800">

            Roles

        </h2>

    </div>

    {{-- Menú --}}
    <nav class="py-2">

        <a href="{{ route('configuracion.roles.index') }}"
           class="sidebar-link">

            Inicio

        </a>

        <a href="{{ route('configuracion.roles.listar') }}"
           class="sidebar-link">

            Roles registrados

        </a>

    </nav>

</div>