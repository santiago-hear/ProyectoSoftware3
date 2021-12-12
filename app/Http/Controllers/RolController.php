<?php

namespace App\Http\Controllers;

use App\Http\Requests\RolStore;
use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','rol.admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rols = Rol::orderBy('id', 'ASC')->paginate(10);
        return view('dashboard.rols.index', ['rols' => $rols]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.rols.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RolStore $request)
    {
        Rol::create($request -> validated());
        return back()->with('status','Rol creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function show(Rol $rol)
    {
        return view('dashboard.rols.show', ['rol' => $rol]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function edit(Rol $rol)
    {
        $rols = Rol::pluck('id', 'rol');
        return view('dashboard.rols.edit', ['rol' => $rol, 'rols' => $rols]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function update(RolStore $request, Rol $rol)
    {
        $rol -> update($request -> validated());
        return back()->with('status','Rol actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rol $rol)
    {
        $rol -> delete();
        return back()->with('status','Rol eliminado con éxito');
    }
}
