<link rel="stylesheet" href="{{ asset('css/bookings/showspñ9.css') }}"> 
<header>
    <h1>Reservation Details</h1>
</header>

<div class="details-container">
    @if ($reservas)
        <p>Reservation Number: {{ $reservas->nro_reserva }}</p>
        <p>Room Number: {{ $reservas->nro_habitacion }}</p>
        <p>Client ID: {{ $reservas->id_cliente }}</p>
        <p>Check-In Date: {{ $reservas->fecha_entrada }}</p>
        <p>Check-Out Date: {{ $reservas->fecha_salida }}</p>  
        <p>Status: {{ $reservas->estado }}</p> 
        <a href="{{ route('bookings.index') }}">Go Back to List</a>
    @else
        <p>Reservation not found</p>
    @endif
</div>

</body>
</html>