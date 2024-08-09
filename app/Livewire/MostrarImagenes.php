<?php

namespace App\Livewire;

use App\Models\Image;
use Livewire\Component;

class MostrarImagenes extends Component
{

    protected $listeners = ['eliminarImagen'];
    #[On('eliminarImagen')]   
    public function eliminarImagen(Image $image)
    {
        $image->delete();
    }
    public function render()
    {
        $imagenes = Image::orderBy('id', 'desc')->paginate(8);
        return view('livewire.mostrar-imagenes', [
            'imagenes' => $imagenes 
        ]);
    }
}
