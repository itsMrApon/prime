<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable = ['subcategory_id', 'name', 'route', 'tags', 'moto', 'qoute1', 'qoute2', 'qoute3', 'qoute4', 'qoute5', 'discription', 'description2', 'price' ];

    // A Subcategory belongs to one Service
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}