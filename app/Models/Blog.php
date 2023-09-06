<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasTranslations;


    public $translatable = [
        'title',
        'brief_content',
        'content',
    ];

    protected $fillable = [
        'category_id',
        'title',
        'brief_content',
        'content',
        'image',
        'publish_date',
        'top_news',
        'notes',
    ];


    // The Relationship With Category Model
    public function category()
    {
        return $this->belongsTo(Category::class);
    } // End of Category Relationship


    // The Relationship With Tags (Many To Many)
    /*public function tags()
    {

        return $this->belongsToMany(Order::class, 'product_order');

    } // End of Orders Relationship
*/


    protected $appends = ['image_path'];

    // Get The Image Path To Show It in The Blogs Index Page
    public function getImagePathAttribute()
    {
        return asset('uploads/blogs_img/' . $this->image);
    } // End of Get Image Path


} // End of Model
