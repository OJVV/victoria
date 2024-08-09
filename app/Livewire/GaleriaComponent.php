<?php

namespace App\Livewire;

use App\Models\Image;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class GaleriaComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap-4';
    public $category_id;
   
    public function render()
    {
        $categories = Category::all();

        // Filter images by selected category
        $imagenes = Image::when($this->category_id, function($query) {
            return $query->where('category_id', $this->category_id);
        })
        ->orderBy('id', 'desc')
        ->paginate(5);
        return view('livewire.galeria-component', [
            'imagenes' => $imagenes,
            'categories' => $categories,
        ])->layout('layouts.base');
    }
}
