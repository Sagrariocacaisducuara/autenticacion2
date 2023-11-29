
<header>
    <h1>Create Reservation</h1>
</header>

<a href="{{ route('bookings.index') }}" class="back-link">Go Back</a>
<link rel="stylesheet" href="{{ asset('css/bookings/create.css') }}"> 
<form method="post" action="{{ route('bookings.store') }}" class="my-form">
    @csrf
    
    <label for="nro_reserva">Reservation Number</label>
    <input type="text" name="nro_reserva" id="nro_reserva">

    <label for="nro_habitacion">Room Number</label>
    <input type="text" name="nro_habitacion" id="nro_habitacion">

    <label for="id_cliente">Client ID</label>
    <input type="text" name="id_cliente" id="id_cliente">

    <label for="fecha_entrada">Check-In Date</label>
    <input type="date" name="fecha_entrada" id="fecha_entrada">

    <label for="fecha_salida">Check-Out Date</label>
    <input type="date" name="fecha_salida" id="fecha_salida">

    <label for="estado">Status</label>
    <input type="text" name="estado" id="estado">

    <input type="submit" value="Create" class="btn btn-primary"/>
</form>

</body>
</html>
