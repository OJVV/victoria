<?php

namespace App\Livewire;

use App\Models\Image;
use Livewire\Component;

class HomeComponent extends Component
{
    public $limit = 6; // Adjust this value to control the number of elements displayed
    public function render()
    {
        $imagenes = Image::limit($this->limit)->get();
        return view('livewire.home-component', ['imagenes' => $imagenes])->layout('layouts.base');
    }
}
