<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\hasMany;

class Category extends Model
{
    //
    use hasFactory;
    protected $fillable = ['name'];
    public function products(): hasMany
    {
        return $this->hasMany(Product::class);
    }
}
