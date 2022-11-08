<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ["parent_id",
        "name",
        "slug",
        "view",
        "post_id",
        "order_by",
        "post_type_id",
        "show_explore",
        "show_dropdown"];

    public function postType()
    {
        return $this->belongsTo(PostType::class);
    }

    public function menuValue()
    {
        return $this->hasMany(MenuValue::class);
    }
}
