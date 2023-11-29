<?php

namespace App\Http\Controllers;
use App\Models\Rooms;
use App\Models\Bookings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){
        $rooms = Rooms::all();
        return view('room.index', ['rooms'=>$rooms]);
    }

    public function create()
    {
        return view("room.create");
    }


    public function store(Request $request)
    {

        Rooms::create($request->all());
        
        // $rooms = Rooms::with('Bookings')->get();

        return redirect()->route("room.index")->with("success","habitacion registrado exitosamente");
        
    }
    public function show($id)
{
    $rooms = Rooms::find($id);

    if (!$rooms) {
        // Manejar el caso cuando el usuario no existe
        return redirect()->route('room.index')->with('error', 'numero de habitacion no encontrado');
    }

    return view('room.shows', ['rooms' => $rooms]);
}


public function edit($id)
    {
        $rooms = Rooms::find($id);
        return view('room.edit', compact('rooms'));
    }

    public function update(Request $request, $id)
    {
       

        // Actualiza el usuario
        Rooms::where('id', $id)->update($request->except('_token', '_method'));

        return redirect('/room')->with('success', 'room actualizado correctamente');
    }

        

    

public function destroy($id)
    {
        
        $rooms = Rooms::find($id);
        $rooms->delete(); 
        return redirect('/room')->with('success', 'room eliminado correctamente');
        
    }
}
