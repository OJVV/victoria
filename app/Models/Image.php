<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['filename', 'alt_text', 'category_id'];

    

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

   
}
