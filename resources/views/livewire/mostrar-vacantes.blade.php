<div>

    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        @forelse ($vacantes as $vacante)        
        <div class="p-6 text-gray-900 dark:text-gray-100 md:flex md:justify-between md:items-center">
            <div class="leading-10 mt-1">
                <a href="#" class="text-xl font-bold">
                    {{ $vacante->titulo }}
                </a>
            <p class="text-sm text-gray-600 dark:text-gray-400 font-bold">{{ $vacante->empresa }}</p>
            <p>Ultimo día: {{ $vacante->ultimo_dia->format('d/m/Y') }}</p>
        </div>
        <div class="flex gap-3 flex-col md:flex-row item md:mt-0 mt-5">
            <a 
            href="#"
            class="bg-slate-800 dark:bg-slate-600 py-2 px-4 rounded-lg text-white text-xs font-bold text-center"
            >Candidatos</a>
            <a 
            href="{{ route('vacantes.edit', $vacante->id) }}"
            class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold text-center"
            >Editar</a>
            <a 
            href="#"
            class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold text-center"
            >Eliminar</a>
        </div>
    </div>
    @empty
    <p class="p-3 text-center text-sm text-gray-600 dark:text-gray-300">No hay vacantes</p>
    @endforelse
</div>
<div class="mt-10">
    {{ $vacantes->links() }}
</div>
</div>