<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Factories\HasFactory ;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;
Class Order extends Model {
use HasFactory;
    use SoftDeletes;
protected $fillable = ["customer_id",
"payment_method_id",
"shipping_method_id",
"driver_id",
"total",
"status",
"payment_status" ]; 
public function customer(){

                 return $this->belongsTo(Customer::class);

                    }
public function payment(){

                 return $this->belongsTo(Payment::class);

                    }
public function driver(){

                 return $this->belongsTo(Driver::class);

                    }
}