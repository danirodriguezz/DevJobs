<div class="md:w-1/2 space-y-5">
    {{-- Titulo Vacantes --}}
    <div>
        <x-input-label for="titulo" :value="__('Título Vacante')" />
        <x-text-input 
            id="titulo" 
            class="block mt-1 w-full" 
            type="text" 
            name="titulo" 
            :value="old('titulo')" 
        />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>
    {{-- Salario mensual --}}
    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />
        <select 
            name="salario" 
            id="salario"
            class="
                w-full 
                border-gray-300 
                dark:border-gray-700 
                dark:bg-gray-900 
                dark:text-gray-300 
                focus:border-indigo-500 
                dark:focus:border-indigo-600 
                focus:ring-indigo-500 
                dark:focus:ring-indigo-600 
                rounded-md shadow-sm"
        >
        
        </select>    
    </div>
    {{-- Categoría --}}
    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />
        <select 
            name="salario" 
            id="salario"
            class="
                w-full 
                border-gray-300 
                dark:border-gray-700 
                dark:bg-gray-900 
                dark:text-gray-300 
                focus:border-indigo-500 
                dark:focus:border-indigo-600 
                focus:ring-indigo-500 
                dark:focus:ring-indigo-600 
                rounded-md shadow-sm"
        >
        </select>    
    </div>
    {{-- Empresa --}}
    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input 
            id="empresa" 
            class="block mt-1 w-full" 
            type="text" 
            name="empresa" 
            :value="old('empresa')"
            placeholder="Empresa: ej. Netflix, Shopify, Uber" 
        />
        <x-input-error :messages="$errors->get('empresa')" class="mt-2" />
    </div>
    
    {{-- Último dia para presentarse --}}
    <div>
        <x-input-label for="ultimo_dia" :value="__('Último día de plazo para presentarse')" />
        <x-text-input   
            id="ultimo_dia" 
            class="block mt-1 w-full" 
            type="date" 
            name="ultimo_dia" 
            :value="old('ultimo_dia')" 
        />
        <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
    </div>

    {{-- Descripción del Trabajo --}}
    <div>
        <x-input-label for="empresa" :value="__('Descripción del Trabajo')" />
        <textarea 
            name="descripcion" 
            id="descripcion"
            placeholder="Descripción general del puesto"
            class="
                w-full 
                border-gray-300 
                dark:border-gray-700 
                dark:bg-gray-900 
                dark:text-gray-300 
                focus:border-indigo-500 
                dark:focus:border-indigo-600 
                focus:ring-indigo-500 
                dark:focus:ring-indigo-600 
                rounded-md shadow-sm"
        ></textarea>
        <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
    </div>

    {{-- Imagen --}}
    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input   
            id="imagen" 
            class="block mt-1 w-full" 
            type="file" 
            name="imagen" 
        />
        <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
    </div>
    
    <x-primary-button>
        {{ __('Crear Vacante') }}
    </x-primary-button>
</div>
