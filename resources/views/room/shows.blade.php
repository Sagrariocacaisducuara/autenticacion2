@if ($rooms)
    <h1>DETALLES</h1>
    <p>Numero de habitacion: {{ $rooms->nro_habitacion }}</p>
    <p>Tipo: {{ $rooms->tipo}}</p>
    <p>Precio: {{ $rooms->precio }}</p>
    <p>Disponibilidad: {{ $rooms->disponibilidad }}</p>
    
    <a href="{{ route('room.index') }}">Volver al Listado</a>
@else
    <p>servicio no encontrado</p>
@endif