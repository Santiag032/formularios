<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use App\Http\Requests\StorePlatoRequest;
use App\Http\Requests\UpdatePlatoRequest;
use Illuminate\Support\Facades\Storage;

class PlatoController extends Controller
{
    public function index()
    {
        $platos = Plato::latest()->get();

        return view('platos.index', compact('platos'));
    }

    public function create()
    {
        return view('platos.crear');
    }

    public function store(StorePlatoRequest $request)
    {
        $datos = $request->validated();

        $datos['imagen'] = $request->file('imagen')
            ->store('platos/' . date('Y/m'), 'public');

        Plato::create($datos);

        return redirect()
            ->route('platos.index')
            ->with('success', 'Plato creado correctamente.');
    }

    public function show(Plato $plato)
    {
        return view('platos.show', compact('plato'));
    }

    public function edit(Plato $plato)
    {
        return view('platos.editar', compact('plato'));
    }

    public function update(UpdatePlatoRequest $request, Plato $plato)
    {
        $datos = $request->validated();

        if ($request->hasFile('imagen')) {

            if ($plato->imagen) {
                Storage::disk('public')->delete($plato->imagen);
            }

            $datos['imagen'] = $request->file('imagen')
                ->store('platos/' . date('Y/m'), 'public');
        }

        $plato->update($datos);

        return redirect()
            ->route('platos.index')
            ->with('success', 'Plato actualizado correctamente.');
    }

    public function destroy(Plato $plato)
    {
        $plato->delete();

        return redirect()
            ->route('platos.index')
            ->with('success', 'Plato eliminado correctamente.');
    }

    public function menu()
    {
        $platos = Plato::orderBy('nombre')->get();

        return view('menu.index', compact('platos'));
    }

    public function menuShow(Plato $plato)
    {
        return view('menu.show', compact('plato'));
    }
}