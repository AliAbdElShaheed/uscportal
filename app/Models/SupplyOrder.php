<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplyOrder extends Model
{
    use HasFactory;

    protected $guarded = [];


    // The Relationship With Supplier Model
    public function supplier()
    {

        return $this->belongsTo(Supplier::class);

    } // End of Supplier Relationship


    // The Relationship With Products (Many To Many)
    public function products()
    {

        return $this->belongsToMany(Product::class, 'product_supply_order')->withPivot('quantity');

    } // End of Products Relationship


} // End of Model
