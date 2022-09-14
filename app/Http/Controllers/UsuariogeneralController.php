<?php

namespace App\Http\Controllers;

use App\Models\UserGeneral;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class UsuariogeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuarios = UserGeneral::all();
        
        return Inertia::render('UsuariosGenerales',['usuarios'=>$usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return Inertia::render('FormCrear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'Nombre' => 'required',
            'Edad' => 'required',
            'Direccion' => 'required'
        ]);

        Usergeneral::create($request->all());
        return Redirect::route('UserGeneral.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserGeneral  $userGeneral
     * @return \Illuminate\Http\Response
     */
    public function show(UserGeneral $userGeneral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserGeneral  $userGeneral
     * @return \Illuminate\Http\Response
     */
    public function edit(UserGeneral $userGeneral)
    {
        //
        return Inertia::render('FormEditar',['UserGeneral'=> $userGeneral]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserGeneral  $userGeneral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserGeneral $userGeneral)
    {
        //
        $userGeneral->update($request->all());
        return Redirect::route('UserGeneral.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserGeneral  $userGeneral
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        // Usergeneral::findOrFail($id)->delete();
        // $userGeneral->delete();

      Usergeneral::findOrFail($id)->delete();

       
       return redirect()->back();
        
    }
}
