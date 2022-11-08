<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostAttribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'attribute_id',
        'language_id',
        'value',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
