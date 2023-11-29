
<!-- <link rel="stylesheet" href="{{ asset('css/room.css') }}"> -->
<a href="{{ route('services.index') }}">REGRESAR</a>
<form method="post" action="{{ route('services.store') }}" class="my-form">

    @csrf
    
    <label for="nombre_servicio">Nombre del servicio</label>
    <input type="text" name="nombre_servicio" id="nombre_servicio" >

    <label for="descripcion_servicio">Descripcion del servicio</label>
    <input type="text" name="descripcion_servicio" id="descripcion_servicio" >

    <label for="precio">Precio</label>
    <input type="text" name="precio" id="precio">

    <label for="nro_reserva">numero de reserva</label>
    <input type="text" name="nro_reserva" id="nro_reserva" >


    <input type="submit" value="Create" class="btn btn-primary"/>

</form>