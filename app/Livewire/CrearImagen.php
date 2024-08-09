<?php

namespace App\Livewire;

use App\Models\Image;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class CrearImagen extends Component
{

    public $filename;
    public $alt_text;
    public $category_id;

    use WithFileUploads;

    protected $rules = [
        'alt_text' => 'required|string',
        'category_id' => 'required',
        'filename' => 'required|image'
    ];

    public function crearImagen()
    {
       $datos =  $this->validate(); 

       //almacenar la imagen 

       $filename = $this->filename->store('public/imagenes');
       $datos['filename']= str_replace('public/imagenes/', '', $filename);

       Image::create([
        'alt_text' => $datos['alt_text'],
        'category_id' => $datos['category_id'],
        'filename' => $datos['filename'],

       ]);

       session()->flash('mensaje', 'Se publico Correctamente');

       return redirect()->route('back.index');

    

    }
    public function render()
    {
        $categorias = Category::all();
        return view('livewire.crear-imagen', ['categorias' => $categorias]);
    }
}
