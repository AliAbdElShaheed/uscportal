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
        'special',
        'notes',
    ];
} // End of Model
