<?php

namespace App\Livewire;


use App\Models\Image;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class EditarImagen extends Component
{
    public $image_id;
    public $alt_text;
    public $category_id;
    public $filename;
    public $imagen_nueva;
 

    use WithFileUploads;

    protected $rules = [
        'alt_text' => 'required|string',
        'category_id' =>'required',
        'imagen_nueva' => 'nullable|image'
        
    ];

    public function mount(Image $image)
    {
        $this->image_id = $image->id;
        $this->alt_text = $image->alt_text;
        $this->category_id = $image->category_id;
        $this->filename = $image->filename;
    }

    public function editarImagen()
    {
        $datos = $this->validate();

        if($this->imagen_nueva){
            $filename = $this->imagen_nueva->store('public/imagenes');
            $datos['filename'] = str_replace('public/imagenes/', '', $filename);
           
        }

        $image = Image::find($this->image_id);

        $image->alt_text = $datos['alt_text'];
        $image->category_id = $datos['category_id'];
        $image->filename = $datos['filename'] ?? $image->filename;


        $image->save();

        session()->flash('mensaje', 'Los datos se actualizaron correctamente');

        return redirect()->route('back.index');

    }
    public function render()
    {
        $categorias = Category::all();
        return view('livewire.editar-imagen',[
            'categorias'=> $categorias
        ]);
    }
}
