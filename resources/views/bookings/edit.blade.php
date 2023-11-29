
<header>
    <h1>Edit Reservation</h1>
</header>
<link rel="stylesheet" href="{{ asset('css/bookings/edit.css') }}"> 
<form method="POST" action="{{ route('bookings.update', $reservas->id) }}">
    @csrf
    @method('PUT')
    <label for="nro_reserva">Reservation Number</label>
    <input type="text" name="nro_reserva" value="{{ $reservas->nro_reserva }}">

    <label for="nro_habitacion">Room Number</label>
    <input type="text" name="nro_habitacion" value="{{ $reservas->nro_habitacion }}">

    <label for="id_cliente">Client ID</label>
    <input type="text" name="id_cliente" value="{{ $reservas->id_cliente }}">

    <label for="fecha_entrada">Check-In Date</label>
    <input type="date" name="fecha_entrada" value="{{ $reservas->fecha_entrada }}">

    <label for="fecha_salida">Check-Out Date</label>
    <input type="date" name="fecha_salida" value="{{ $reservas->fecha_salida }}">

    <label for="estado">Status</label>
    <input type="text" name="estado" value="{{ $reservas->estado }}">

    <button type="submit">Update</button>
</form>

<a href="{{ route('bookings.shows', $reservas->id) }}" class="details-link">View Details</a>

</body>
</html>