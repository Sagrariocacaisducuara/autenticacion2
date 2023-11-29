@extends('layouts.app')

@section('content')
<a href="{{ route('room.create') }}">Create new room</a>

<table>
    <thead>
        <tr>
            <th>Numero habitacion</th>
            <th>tipo</th>
            <th>precio</th>
            <th>disponibilidad</th>
            <th>fecha</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($rooms as $room)
            <tr>
                <td>{{ $room->nro_habitacion }}</td>
                <td>{{ $room->tipo }}</td>
                <td>{{ $room->precio }}</td>
                <td>{{ $room->disponibilidad }}</td>
                <td>
    @if($room->bookings && $room->bookings->isNotEmpty())
        {{ $room->bookings->first()->fecha_entrada }}
    @else
        Sin reservas
    @endif
</td>




                <td>
                    <a href="{{ route('room.shows', $room->id) }}">Ver</a>
                    <a href="{{ route('room.edit', $room->id) }}">Editar</a>
                  
                    <form method="POST" action="{{ route('room.destroy', $room->id) }}">
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