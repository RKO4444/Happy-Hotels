<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'price',
        'arival',
        'departure',
        'message',
        'numberofroomtype1',
        'numberofroomtype2',
        'numberofroomtype3',
        'hotel_id',
        'customer_id'
    ];
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
