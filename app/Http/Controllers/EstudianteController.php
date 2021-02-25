<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\storage; 
class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('estudiante.index');
        $vrdato = Estudiante::All();
        return view('estudiante.index', compact('vrdato'));
        //return view('estudiante.index', ['vrdato' => $vrdato]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Estudiante = new Estudiante;

         $request->validate([
                'foto' => 'required|image|max:2048'
            ]);

            $imagenes = $request->file('foto')->store('public/imagenes');
            $url = Storage::url($imagenes);
            //return $url;
            /* Estudiante::create([
                'foto' => $url
            ]);
 */


            $Estudiante->nombre = $request->nombre;
            $Estudiante->email = $request->email;
            $Estudiante->fecha = $request->fecha;
            $Estudiante->foto = $url;
            
            $Estudiante->save();
            //return redirect()->route('estudiante.create');
            return view('estudiante.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editEstudiante = Estudiante::find($id);
        return view('estudiante.edit', compact('editEstudiante'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editEstudiante = Estudiante::find($id);
        if ($request->hasFile('foto')) {
            $Estudiante['foto'] = $request->file('foto')->store('uploads', 'public');
        }
            $editEstudiante->nombre = $request->nombre;
            $editEstudiante->email = $request->email;
            $editEstudiante->fecha = $request->fecha;
            $editEstudiante->foto = $request->foto;
            
            $editEstudiante->save();
            return view('estudiante.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiante $estudiante)
    {
        //
    }
}
