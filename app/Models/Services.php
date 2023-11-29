<?php

namespace App\Models;
use App\models\Bookings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $primaryKey = 'id_servicio';

    protected $fillable = [
        'nombre_servicio',
        'descripcion_servicio',
        'precio',
        'nro_reserva',
    ];

    public function services(){
        return $this->hasMany(Bookings::class, 'id_servicio', 'id_servicio');
    }
}
