<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    protected $casts = [

        'phone' => 'array'
    ];


    // Function To Make First Letter of Client Name in UpperCase
    public function getNameAttribute($val)
    {

        return ucfirst($val);
    } // End of Get Name Attribute


    // Relationship to Orders
    public function orders()
    {

        return $this->hasMany(Order::class);

    } // End of Orders Relationship


} // End of Model
