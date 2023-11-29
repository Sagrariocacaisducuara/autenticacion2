@extends('layouts.app')

@section('content')
<a href="{{ route('services.create') }}">Crear servicio</a>

<table>
    <thead>
        <tr>
            <th>Nombre servicio</th>
            <th>Descripcion del servicio</th>
            <th>precio</th>
            <th>Numero de la reserva</th>
            <th>fecha de Entrada</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($services as $service)
            <tr>
                <td>{{ $service->nombre_sercicio }}</td>
                <td>{{ $service->descripcion_servicio }}</td>
                <td>{{ $service->precio }}</td>
                <td>{{ $service->nro_recerva }}</td>
                <td>
    @if($service->bookings && $service->bookings->isNotEmpty())
        {{ $service->bookings->first()->fecha_entrada }}
    @else
        Sin reservas
    @endif
</td>
                <td>
                    <a href="{{ route('services.shows', $service->id_servicio) }}">Ver</a>
                    <a href="{{ route('services.edit', $service->id_servicio) }}">Editar</a>
                  
                    <form method="POST" action="{{ route('services4.destroy', $service->id_servicio) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No hay datos</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection