<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Hotel extends Model
{
    use HasFactory;
     protected $fillable = [
        'district',
        'address',
        'location',
        'phonenumber',
        'numberofavailroom',
        'hotelimage',
        'wifi',
        'availability',
        'user_id'
    ];
    public function room()
    {
        return $this->hasMany(Room::class);
    }
    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}