<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Factories\HasFactory ;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;
Class Driver extends Model {
use HasFactory;
    use SoftDeletes;
protected $fillable = ["full_name",
"phone_number" ]; 
}