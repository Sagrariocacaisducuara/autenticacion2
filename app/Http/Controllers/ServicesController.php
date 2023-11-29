<?php

namespace App\Http\Controllers;
use App\Models\Services;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        $services = Services::all();
        return view('services.index', ['services'=>$services]);
    }

    public function create()
    {
        return view("services.create");
    }


    public function store(Request $request)
    {

        Services::create($request->all());
        
        // $rooms = Rooms::with('Bookings')->get();

        return redirect()->route("services.index")->with("success","servicio registrado exitosamente");
        
    }
    public function show($id)
{
    $services = Services::find($id);

    if (!$services) {
        // Manejar el caso cuando el usuario no existe
        return redirect()->route('services.index')->with('error', 'servicio no encontrado');
    }

    return view('services.shows', ['services' => $services]);
}


public function edit($id_servicio)
    {
        $services = Services::find($id_servicio);
        return view('services.edit', compact('servicios'));
    }

    public function update(Request $request, $id_servicio)
    {
       

        // Actualiza el usuario
        Services::where('id_servicio', $id_servicio)->update($request->except('_token', '_method'));

        return redirect('/service')->with('success', 'servicio actualizado correctamente');
    }

        

    

public function destroy($id)
    {
        
        $services = Services::find($id);
        $services->delete(); 
        return redirect('/service')->with('success', 'servicio eliminado correctamente');
        
    }
}
