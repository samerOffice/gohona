<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    // use HasFactory;
    protected $fillable = [
        'product_category_name', // Add product_category_name to the fillable array
    ];
}
