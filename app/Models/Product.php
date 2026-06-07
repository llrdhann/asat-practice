<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Hasfactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Darabase\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    //
    use Hasfactory;
    protected $fillable = [
        'category_id',
        'name',
        'stock',
        'cost_price',
        'selling_price'
    ];
    // or
    // protected $guarded = ['id'];

    public function category(): BelongsTo
    {
        return $this->BelongsTo(Category::class);
    }
}
