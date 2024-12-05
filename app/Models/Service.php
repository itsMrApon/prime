<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'discription '];

    // One Service has many Subcategories
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }
}

