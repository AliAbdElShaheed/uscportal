<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];


    // The Relationship With Client Model
    public function client()
    {

        return $this->belongsTo(Client::class);

    } // End of Client Relationship


    // The Relationship With Products (Many To Many)
    public function products()
    {

        return $this->belongsToMany(Product::class, 'product_order')->withPivot('quantity');

    } // End of Products Relationship


} // End of Model
