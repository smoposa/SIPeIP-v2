<aside class="w-64 h-screen flex flex-col bg-[#F3F2F1] border-r border-gray-300">

    <!-- Logo -->
    <div class="text-center pt-2 pb-2 border-b border-gray-300">

        <a href="{{ route('dashboard') }}">

            <img
                src="{{ asset('images/menusidebar.png') }}"
                alt="SIPeIP"
                class="mx-auto h-12">

            <div class="text-xs text-gray-500">
                Planificación e Inversión Pública
            </div>

        </a>

    </div>

    <!-- Menú -->
    <nav class="flex-1 overflow-y-auto py-3">

        <!-- Dashboard -->
        <a href="{{ route('dashboard') }}"
        class="flex items-center gap-3 px-5 py-3 text-gray-700 hover:bg-gray-200 hover:text-[#024687] transition">

            <i class="bi bi-grid text-[15px]"></i>

            <span class="text-sm font-medium">Dashboard</span>

        </a>

        <!-- Configuración Institucional -->
        <details class="mt-1"
            {{ request()->routeIs('configuracion.roles.*')
                || request()->routeIs('configuracion.usuarios.*')
                || request()->routeIs('configuracion.entidades.*')
                ? 'open' : '' }}>

            <summary
                class="flex items-center justify-between px-5 py-3 cursor-pointer transition list-none
                {{ request()->routeIs('configuracion.roles.*')
                    || request()->routeIs('configuracion.usuarios.*')
                    || request()->routeIs('configuracion.entidades.*')
                    ? 'bg-[#024687] text-white'
                    : 'text-gray-700 hover:bg-gray-200 hover:text-[#024687]' }}">

                <div class="flex items-center gap-3">

                    <i class="bi bi-gear text-[15px]"></i>

                    <span class="text-sm font-medium">
                        Configuración
                    </span>

                </div>

                <i class="bi bi-chevron-down text-xs"></i>

            </summary>

            <div class="ml-11 mt-1 space-y-1">

                <a href="{{ route('configuracion.roles.listar') }}"
                class="block py-1 text-sm transition-all duration-200
                {{ request()->routeIs('configuracion.roles.*')
                        ? 'text-[#024687] font-semibold'
                        : 'text-gray-600 hover:text-[#024687]' }}">
                    Roles
                </a>

                <a href="#"
                class="block py-1 text-sm transition-all duration-200
                {{ request()->routeIs('configuracion.entidades.*')
                        ? 'text-[#024687] font-semibold'
                        : 'text-gray-600 hover:text-[#024687]' }}">
                    Entidades
                </a>

                <a href="#"
                class="block py-1 text-sm transition-all duration-200
                {{ request()->routeIs('configuracion.usuarios.*')
                        ? 'text-[#024687] font-semibold'
                        : 'text-gray-600 hover:text-[#024687]' }}">
                    Usuarios
                </a>

            </div>

        </details>

        <!-- Catálogos -->
        <details class="mt-1">

            <summary class="flex items-center justify-between px-5 py-3 cursor-pointer text-gray-700 hover:bg-gray-200 hover:text-[#024687] transition list-none">

                <div class="flex items-center gap-3">

                    <i class="bi bi-book text-[15px]"></i>

                    <span class="text-sm font-medium">Catálogos</span>

                </div>

                <i class="bi bi-chevron-down text-xs"></i>

            </summary>

            <div class="ml-11 mt-1 space-y-1">

                <a href="#" class="block py-1 text-sm text-gray-600 hover:text-[#024687]">
                    ODS
                </a>

                <a href="#" class="block py-1 text-sm text-gray-600 hover:text-[#024687]">
                    PND
                </a>

            </div>

        </details>

        <!-- Planificación Nacional -->
        <details class="mt-1">

            <summary class="flex items-center justify-between px-5 py-3 cursor-pointer text-gray-700 hover:bg-gray-200 hover:text-[#024687] transition list-none">

                <div class="flex items-center gap-3">

                    <i class="bi bi-diagram-3 text-[15px]"></i>

                    <span class="text-sm font-medium">Planificación Nacional</span>

                </div>

                <i class="bi bi-chevron-down text-xs"></i>

            </summary>

            <div class="ml-11 mt-1 space-y-1">

                <a href="#" class="block py-1 text-sm text-gray-600 hover:text-[#024687]">
                    Planes
                </a>

                <a href="#" class="block py-1 text-sm text-gray-600 hover:text-[#024687]">
                    Objetivos
                </a>

                <a href="#" class="block py-1 text-sm text-gray-600 hover:text-[#024687]">
                    Metas
                </a>

                <a href="#" class="block py-1 text-sm text-gray-600 hover:text-[#024687]">
                    Indicadores
                </a>

            </div>

        </details>

        <!-- Inversión Pública -->
        <details class="mt-1">

            <summary class="flex items-center justify-between px-5 py-3 cursor-pointer text-gray-700 hover:bg-gray-200 hover:text-[#024687] transition list-none">

                <div class="flex items-center gap-3">

                    <i class="bi bi-briefcase text-[15px]"></i>

                    <span class="text-sm font-medium">Inversión Pública</span>

                </div>

                <i class="bi bi-chevron-down text-xs"></i>

            </summary>

            <div class="ml-11 mt-1 space-y-1">

                <a href="#" class="block py-1 text-sm text-gray-600 hover:text-[#024687]">
                    Programas
                </a>

                <a href="#" class="block py-1 text-sm text-gray-600 hover:text-[#024687]">
                    Proyectos
                </a>

            </div>

        </details>

        <!-- Seguimiento -->
        <details class="mt-1">

            <summary class="flex items-center justify-between px-5 py-3 cursor-pointer text-gray-700 hover:bg-gray-200 hover:text-[#024687] transition list-none">

                <div class="flex items-center gap-3">

                    <i class="bi bi-clipboard-check text-[15px]"></i>

                    <span class="text-sm font-medium">Seguimiento</span>

                </div>

                <i class="bi bi-chevron-down text-xs"></i>

            </summary>

            <div class="ml-11 mt-1 space-y-1">

                <a href="#" class="block py-1 text-sm text-gray-600 hover:text-[#024687]">
                    Avances
                </a>

                <a href="#" class="block py-1 text-sm text-gray-600 hover:text-[#024687]">
                    Presupuesto
                </a>

            </div>

        </details>

        <!-- Reportes -->
        <details class="mt-1">

            <summary class="flex items-center justify-between px-5 py-3 cursor-pointer text-gray-700 hover:bg-gray-200 hover:text-[#024687] transition list-none">

                <div class="flex items-center gap-3">

                    <i class="bi bi-file-earmark-bar-graph text-[15px]"></i>

                    <span class="text-sm font-medium">Reportes</span>

                </div>

                <i class="bi bi-chevron-down text-xs"></i>

            </summary>

            <div class="ml-11 mt-1 space-y-1">

                <a href="#" class="block py-1 text-sm text-gray-600 hover:text-[#024687]">
                    Reportes
                </a>

            </div>

        </details>

        <!-- Auditoría -->
        <details class="mt-1">

            <summary class="flex items-center justify-between px-5 py-3 cursor-pointer text-gray-700 hover:bg-gray-200 hover:text-[#024687] transition list-none">

                <div class="flex items-center gap-3">

                    <i class="bi bi-clock-history text-[15px]"></i>

                    <span class="text-sm font-medium">Auditoría</span>

                </div>

                <i class="bi bi-chevron-down text-xs"></i>

            </summary>

            <div class="ml-11 mt-1 space-y-1">

                <a href="#" class="block py-1 text-sm text-gray-600 hover:text-[#024687]">
                    Bitácora
                </a>

                <a href="#" class="block py-1 text-sm text-gray-600 hover:text-[#024687]">
                    Historial
                </a>

            </div>

        </details>

    </nav>

    <!-- Footer user-->
    <div class="border-t p-4 text-center">

        <div class="text-sm font-semibold text-gray-800">
            {{ Auth::user()->name }}
        </div>

        <div class="text-xs text-gray-500">
            {{ Auth::user()->email }}
        </div>

    </div>

</aside>