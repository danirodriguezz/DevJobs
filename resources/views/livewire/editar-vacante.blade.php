<form class="md:w-1/2 space-y-5" wire:submit.prevent='editarVacante'>
    {{-- Titulo Vacantes --}}
    <div>
        <x-input-label for="titulo" :value="__('Título Vacante')" />
        <x-text-input 
            id="titulo" 
            class="block mt-1 w-full" 
            type="text" 
            wire:model="titulo" 
            :value="old('titulo')" 
        />
        @error('titulo')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
        {{-- <x-input-error :messages="$errors->get('titulo')" class="mt-2" /> --}}
    </div>
    {{-- Salario mensual --}}
    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />
        <select 
            wire:model="salario" 
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
            <option> -- Seleccione -- </option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach
        </select>
        @error('salario')
        <livewire:mostrar-alerta :message="$message"/>
        @enderror   
        {{-- <x-input-error :messages="$errors->get('salario')" class="mt-2" />  --}}
    </div>
    {{-- Categoría --}}
    <div>
        <x-input-label for="categoria" :value="__('Categoría')" />
        <select 
            wire:model="categoria"  
            id="categoria"
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
            <option> -- Seleccione -- </option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
            @endforeach
        </select> 
        @error('categoria')
        <livewire:mostrar-alerta :message="$message"/>
        @enderror
        {{-- <x-input-error :messages="$errors->get('categoria')" class="mt-2" />     --}}
    </div>
    {{-- Empresa --}}
    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input 
            id="empresa" 
            class="block mt-1 w-full" 
            type="text" 
            wire:model="empresa" 
            :value="old('empresa')"
            placeholder="Empresa: ej. Netflix, Shopify, Uber" 
        />
        @error('empresa')
        <livewire:mostrar-alerta :message="$message"/>
        @enderror
        {{-- <x-input-error :messages="$errors->get('empresa')" class="mt-2" /> --}}
    </div>
    
    {{-- Último dia para presentarse --}}
    <div>
        <x-input-label for="ultimo_dia" :value="__('Último día de plazo para presentarse')" />
        <x-text-input   
            id="ultimo_dia" 
            class="block mt-1 w-full" 
            type="date" 
            wire:model="ultimo_dia" 
            :value="old('ultimo_dia')" 
        />
        @error('ultimo_dia')
        <livewire:mostrar-alerta :message="$message"/>
        @enderror
        {{-- <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" /> --}}
    </div>

    {{-- Descripción del Trabajo --}}
    <div>
        <x-input-label for="empresa" :value="__('Descripción del Trabajo')" />
        <textarea 
            wire:model="descripcion" 
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
        @error('descripcion')
        <livewire:mostrar-alerta :message="$message"/>
        @enderror
        {{-- <x-input-error :messages="$errors->get('descripcion')" class="mt-2" /> --}}
    </div>

    {{-- Imagen --}}
    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input   
            id="imagen" 
            class="block mt-1 w-full" 
            type="file" 
            wire:model="imagen_nueva" 
            accept=image/*
        />

        <div>
            <x-input-label :value="__('Imagen Actual')" />
            <img src="{{ asset('storage/vacantes/' . $imagen) }}" alt="{{ "Imagen Vacante " . $titulo }}">
        </div>
        <div class="my-5 w-80">
            @if ($imagen_nueva)
                Imagen Nueva:
                <img src="{{ $imagen_nueva->temporaryUrl() }}" alt="Imagen para vacante">
            @endif
        </div> 
        @error('imagen_nueva')
        <livewire:mostrar-alerta :message="$message"/>
        @enderror
        {{-- <x-input-error :messages="$errors->get('imagen')" class="mt-2" /> --}}
    </div>
    
    <x-primary-button>
        {{ __('Editar Vacante') }}
    </x-primary-button>
</form>
