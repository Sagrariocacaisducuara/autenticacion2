<h1>Editar servicio</h1>
<form method="POST" action="{{ route('services.update', $service->id_servicio) }}">
    @csrf
    @method('PUT')
    <label for="nombre_sercicio">Nombre sercicio</label>
    <input type="text" name="nombre_sercicio" value="{{ $service->nombre_sercicio }}">

    <label for="descripcion_servicio">Descripcion servicio</label>
    <input type="text" name="descripcion_servicio" value="{{ $service->descripcion_servicio }}">

    <label for="precio">precio</label>
    <input type="text" name="precio" value="{{ $service->precio }}">

    <label for="nro_reserva">Numero de la reserva</label>
    <input type="text" name="nro_reserva"  value="{{ $service->nro_reserva }}">


    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('services.shows', $service->id_servicio) }}">Ver Detalles</a>