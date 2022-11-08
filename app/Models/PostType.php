<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostType extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        "name",
        "slug",
        "view",
        "icon",
        "show_category",
        "attribute_set_id"
    ];

    public function menu()
    {
        return $this->hasMany(Menu::class);
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }

}
