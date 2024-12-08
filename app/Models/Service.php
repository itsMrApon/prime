<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;


class Service extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'discription '];

    // One Service has many Subcategories
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }
    protected static function booted()
    {
        static::creating(function ($service) {
            $service->slug = Str::slug($service->name);
        });
    }
}

