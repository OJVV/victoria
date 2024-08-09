<form class="md:w-1/2 space-y-5" wire:submit.prevent='editarImagen'>

    <div>
        <x-label for="alt_text" value="{{ __('Descripcion') }}" />
        <x-input 
        id="alt_text" 
        class="block mt-1 w-full" 
        type="text" 
        wire:model="alt_text" 
       />

       @error('alt_text')
         <livewire:mostrar-alerta :message="$message">
       @enderror
    </div>

    <div>
        <x-label for="category_id" value="{{ __('Categoria') }}" />
        <select 
        id="category_id" 
        class="block mt-1 w-full" 
        wire:model="category_id" 
       >
       <option value="">-->>Select<<--</option>
       @foreach ($categorias as $categoria)
       <option value="{{$categoria->id}}">{{$categoria->name}}</option>
       @endforeach
        </select>

        @error('category_id')
         <livewire:mostrar-alerta :message="$message">
       @enderror
    
    </div>

    <div>
        <x-label for="filename" value="{{ __('Imagen') }}" />
        <x-input 
        id="filename" 
        class="block mt-4" 
        type="file" 
        wire:model="imagen_nueva" 
        accept="image/*"
       />

       <div class="my-5 w-80">
        <x-label value="{{ __('Imagen Actual') }}" />

        <img src="{{asset('storage/imagenes/' . $filename)}}" alt="{{'Imagen N ' . $alt_text}}">
       </div>

       <div class="my-5 w-80">
      @if($imagen_nueva)
            Imagen nuevo:
            <img src="{{ $imagen_nueva->temporaryUrl()}}" alt="" class="">
        @endif
          
       </div>

       @error('imagen_nueva')
         <livewire:mostrar-alerta :message="$message">
       @enderror
    </div>

    <x-button class="ms-4">
        {{ __('Guardar Cambios') }}
    </x-button>
</form>

