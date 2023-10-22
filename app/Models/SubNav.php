<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class SubNav extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasTranslations;


    public $translatable = [
        'name',
    ];

    protected $fillable = [
        'nav_menu_id',
        'name',
        'status',
        'priority',
        'href',
        'special',
        'notes',
    ];


    // The Relationship With NavigationMenu
    public function navigationMenu()
    {
        return $this->belongsTo(NavigationMenu::class);
    } // End of NavigationMenu Relationship

} // End of Model
