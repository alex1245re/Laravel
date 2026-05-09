<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Http\Requests\StoreContactoRequest;
use App\Http\Requests\UpdateContactoRequest;
use App\Actions\CreateContactoAction;
use App\Actions\UpdateContactoAction;
use App\Actions\DeleteContactoAction;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactos = Contacto::orderBy('apellidos')->orderBy('nombre')->paginate(10);
        return view('contactos.index', compact('contactos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contactos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactoRequest $request, CreateContactoAction $action)
    {
        // Validamos (vía $request)
        // Ejecutamos la acción
        $action->execute($request->validated());
        
        // Respondemos
        return redirect()->route('contactos.index')
            ->with('success', 'Contacto creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contacto $contacto)
    {
        return view('contactos.show', compact('contacto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contacto $contacto)
    {
        return view('contactos.edit', compact('contacto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactoRequest $request, Contacto $contacto, UpdateContactoAction $action)
    {
        // Ejecutamos la acción
        $action->execute($contacto, $request->validated());
        
        return redirect()->route('contactos.index')
            ->with('success', 'Contacto actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contacto $contacto, DeleteContactoAction $action)
    {
        $action->execute($contacto);
        
        return redirect()->route('contactos.index')
            ->with('success', 'Contacto eliminado exitosamente.');
    }
}
