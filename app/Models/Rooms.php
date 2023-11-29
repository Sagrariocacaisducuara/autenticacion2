<?php

namespace App\Models;
use App\models\Bookings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;
    protected $table = 'rooms';
    protected $fillable = [
        'nro_habitacion',
        'tipo',
        'precio',
        'disponibilidad',
    ];
    public function rooms(){
        return $this->hasMany(Bookings::class, 'nro_habitacion', 'id');
    }
}
