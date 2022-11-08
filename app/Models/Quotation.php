<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quotation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ["client_name",
        "phone",
        "email",
        "address",
        "description"];

    public function quotationItem()
    {
        return $this->hasMany(QuotationItem::class);
    }
}
