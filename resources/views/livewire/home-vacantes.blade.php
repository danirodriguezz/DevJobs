<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <h3 class="font-extrabold text-4xl text-gray-700 dark:text-gray-100 mb-12 text-center">Nuestras Ofertas Disponibles</h3>
            <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-6 divide-y divide-gray-300">
                @forelse ($vacantes as $vacante)
                    <div class="md:flex md:justify-between md:items-center py-5">
                        <div class="md:flex-1">
                            <a class="text-3xl font-extrabold text-gray-600 dark:text-gray-300" href="{{ route('vacantes.show', $vacante->id) }}">{{ $vacante->titulo }}</a>
                            <p class="text-base text-gray-600 dark:text-gray-300 mb-1">{{ $vacante->empresa }}</p>
                            <p class="font-bold text-xs text-gray-600 dark:text-gray-300">
                                Último día para presentarse: <span class="font-normal">{{ $vacante->ultimo_dia->format('d/m/Y') }}</span>
                            </p>
                        </div>

                        <div class="mt-5 md:mt-0">
                            <a class="bg-indigo-500 p-3 text-sm uppercase font-bold text-white rounded-lg block text-center" href="{{ route('vacantes.show', $vacante->id) }}">Ver oferta</a>
                        </div>
                    </div>
                @empty
                    <p class="p-3 text-center text-sm text-gray-600">No hay ofertas disponibles</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
