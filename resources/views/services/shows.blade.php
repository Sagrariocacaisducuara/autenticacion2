@if ($services)
    <h1>DETALLES</h1>
    <p>Nombre del sercicio: {{ $services->nombre_sercicio }}</p>
    <p>Descripcion servicio: {{ $services->descripcion_servicio}}</p>
    <p>Precio: {{ $services->precio }}</p>
    <p>Numero de reserva: {{ $services->nro_reserva }}</p>
    
    <a href="{{ route('services.index') }}">Volver al Listado</a>
@else
    <p>servicio no encontrado</p>
@endif