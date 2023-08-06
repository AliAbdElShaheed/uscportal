<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasTranslations;

    public $translatable = ['name'];

    protected $fillable = [
        'name',
        'notes',
    ];


    public function blogs()
    {
        return $this->hasMany(Blog::class);

    } // End of Blogs Relationship


    public function events()
    {
        return $this->hasMany(Event::class);

    } // End of Events Relationship


} // End of Model
