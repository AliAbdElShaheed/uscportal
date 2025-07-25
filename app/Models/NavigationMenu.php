<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class NavigationMenu extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasTranslations;

    public $translatable = [
        'name',
    ];

    protected $fillable = [
        'name',
        'status',
        'priority',
        'href',
        'special',
        'notes',
    ];


    // Relation to Sub Navs
    public function sub_navs()
    {
        return $this->hasMany(SubNav::class);
    } // End of Sub Navs Relationship


} // End of Model
