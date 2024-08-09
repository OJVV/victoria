<div>
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        @forelse  ($imagenes as $imagen )
        <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center ">
           <div class="space-y-3">
            <a href="#"class="text-xl font-bold">
             {{$imagen->alt_text}}
            </a>
            <img src="{{ asset('storage/imagenes/' . $imagen->filename) }}" width="80" class="img-thumbnail" alt="img"></td>
           </div>
    
           <div class="flex flex-col md:flex-row items-strecht gap-3 mt-5 md:mt-0">
            <a href="{{route('back.edit', $imagen->id)}}" class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold text-center">
                Editar
            </a>  
    
            <Button wire:click="$dispatch('mostrarAlerta', {{$imagen->id}})" class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold text-center">
                Eliminar
            </Button>
           </div>
        </div>
     
        @empty
        <p class="p-3 text-center text-sm text-gray-600">No hay imagenes que Mostrar</p>
        @endforelse 
    </div>
    
    <div class=" mt-10">
        {{$imagenes->links()}} 
    </div>
    
    
    
    </div>
    
    
    @push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    
            document.addEventListener('livewire:initialized', () => {
                @this.on('mostrarAlerta', (imageId) => {
                    Swal.fire({
                        title: '¿Eliminar Post?',
                        text: "Un Post eliminado no se puede recuperar:(",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Si, eliminar!',
                        cancelButtonText: 'Cancelar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Livewire.dispatch('eliminarImagen', {image: imageId});
                            Swal.fire(
                                'Se eliminó el Post',
                                'Eliminado correctamente',
                                'success'
                            )
                        }
                    })
        
                });
            });
       
    
    
    </script> 
    @endpush