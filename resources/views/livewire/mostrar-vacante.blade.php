<div class="p-10">
    <div class="mb-5 text-gray-800 dark:text-gray-100">
        <h3 class="font-bold text-3xl  my-3">
            {{ $vacante->titulo }}
        </h3>
        <div class="md:grid md:grid-cols-2 bg-gray-50 dark:bg-gray-700 p-4 my-10">
            <p class="font-bold text-sm uppercase  my-3">Empresa:
                <span class="normal-case font-normal">{{ $vacante->empresa }}<span>
            </p>
            <p class="font-bold text-sm uppercase  my-3">Fecha límite de inscripción:
                <span class="normal-case font-normal">{{ $vacante->ultimo_dia->toFormattedDateString() }}</span>
            </p>
            <p class="font-bold text-sm uppercase  my-3">Categoría:
                <span class="normal-case font-normal">{{ $vacante->categoria->categoria }}</span>
            </p>
            <p class="font-bold text-sm uppercase  my-3">Salario:
                <span class="normal-case font-normal">{{ $vacante->salario->salario }}</span>
            </p>
        </div>
    </div>

    <div class="md:grid md:grid-cols-6 gap-4">
        <div class="md:col-span-2">
            <img src="{{ asset('storage/vacantes/' . $vacante->imagen) }}" alt="{{'Imagen: ' . $vacante->titulo}}">
        </div>
        <div class="md:col-span-4 text-gray-800 dark:text-gray-100">
            <h2 class="font-bold text-2xl mb-5">Descripción del puesto</h2>
            <p>{{ $vacante->descripcion }}</p>
        </div>
    </div>
    @guest
        <div class="mt-5 bg-gray-50 dark:bg-gray-700 border border-dashed dark:border-gray-700 p-5 text-center dark:text-gray-100">
            <p>
                ¿Desea aplicar a este puesto? <a href="{{ route('register') }}" class="text-indigo-600 dark:text-indigo-400">Obten una cuenta y aplica a esta y otros puestos</a>
            </p>
        </div>
    @endguest
</div>
