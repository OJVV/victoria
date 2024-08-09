<form class="md:w-1/2 space-y-5" wire:submit.prevent='crearImagen'>

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
        wire:model="filename" 
        accept="image/*"
       />

       <div class="my-5 w-80">
        @if($filename)
            Filename:
            <img src="{{ $filename->temporaryUrl()}}" alt="" class="">
        @endif
       </div>

       @error('filename')
         <livewire:mostrar-alerta :message="$message">
       @enderror
    </div>

    <x-button class="ms-4">
        {{ __('Subir') }}
    </x-button>
</form>

