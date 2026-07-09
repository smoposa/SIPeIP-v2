<header class="h-14 bg-[#024687] border-b border-[#013B74] px-6">

    <div class="flex items-center justify-between h-full">

        <!-- Fecha y hora -->
        <div class="text-sm text-blue-100">
            <span id="fechaHora"></span>
        </div>

        <!-- Bienvenida -->
        <div class="text-sm text-white font-medium">
            Bienvenido, {{ Auth::user()->name }}
        </div>

        <!-- Usuario -->
        <div class="flex items-center">

            <x-dropdown align="right" width="56">

                <x-slot name="trigger">

                    <button
                        class="flex items-center gap-2 rounded-md px-3 py-2 text-white hover:bg-[#0357A8] transition">

                        <i class="bi bi-person-circle text-xl"></i>

                        <span class="text-sm">
                            {{ Auth::user()->name }}
                        </span>

                        <i class="bi bi-chevron-down text-xs"></i>

                    </button>

                </x-slot>

                <x-slot name="content">

                    <x-dropdown-link :href="route('profile.edit')">

                        <i class="bi bi-person me-2"></i>

                        Mi perfil

                    </x-dropdown-link>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link
                            :href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();">

                            <i class="bi bi-box-arrow-right me-2"></i>

                            Cerrar sesión

                        </x-dropdown-link>

                    </form>

                </x-slot>

            </x-dropdown>

        </div>

    </div>

</header>

<script>

function actualizarFechaHora() {

    const ahora = new Date();

    const dias = [
        'Domingo',
        'Lunes',
        'Martes',
        'Miércoles',
        'Jueves',
        'Viernes',
        'Sábado'
    ];

    const dia = dias[ahora.getDay()];

    const fecha =
        String(ahora.getDate()).padStart(2,'0') + '/' +
        String(ahora.getMonth()+1).padStart(2,'0') + '/' +
        ahora.getFullYear();

    const hora = ahora.toLocaleTimeString('es-EC');

    document.getElementById('fechaHora').innerHTML =
        dia + ', ' + fecha + ' | ' + hora;

}

actualizarFechaHora();

setInterval(actualizarFechaHora,1000);

</script>