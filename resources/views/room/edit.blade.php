<h1>Editar Usuario</h1>
<form method="POST" action="{{ route('room.update', $room->id) }}">
    @csrf
    @method('PUT')
    <label for="nro_habitacion">Número de habitacion</label>
    <input type="text" name="nro_habiatcion" value="{{ $room->nro_habitacion }}">

    <label for="tipo">Tipo</label>
    <input type="text" name="tipo" value="{{ $room->tipo }}">

    <label for="precio">precio</label>
    <input type="text" name="precio" value="{{ $room->precio }}">

    <label for="disponibilidad">disponibilidad</label>
    <input type="text" name="disponibilidad"  value="{{ $room->disponibilidad }}">


    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('reserva.shows', $reservas->id) }}">Ver Detalles</a>