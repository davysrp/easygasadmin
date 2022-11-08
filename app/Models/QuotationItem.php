<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuotationItem extends Model
{
    use HasFactory;

    protected $fillable = [
        "quotation_id",
        "name",
        "qty",
        "price",
        "total",
        "description"];

    public function quotation()
    {
        return $this->belongsTo(Quotation::class);
    }
}
