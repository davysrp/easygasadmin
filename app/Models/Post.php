<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'thumbnail',
        'slug',
        'status',
        'description',
        'images',
        'parent_id',
        'order_by',
        'post_type_id',
    ];

    public function postAttribute()
    {
        return $this->hasMany(PostAttribute::class);
    }

    public function postType()
    {
        return $this->belongsTo(PostType::class);
    }


    public function parent()
    {
        return $this->belongsTo(Post::class, 'parent_id', 'id');
    }
    public function child()
    {
        return $this->hasMany(Post::class, 'parent_id', 'id');
    }
    public function children()
    {
        return $this->child()->with('children');
    }

    public function postImage()
    {
        return $this->hasMany(PostImage::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'post_categories');
    }
}
