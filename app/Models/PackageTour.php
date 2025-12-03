<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageTour extends Model
{
    //
    use HasFactory;

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function package_photos() {
        return $this->hasMany(PackagePhoto::class);
    } 
}