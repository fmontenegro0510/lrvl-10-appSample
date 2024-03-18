<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Psicofisico;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use LaravelLang\Lang\Plugins\Breeze\V1;

//redirect,response,view

class PsicofisicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $paginate_value=5;
        $psicofisicos = Psicofisico::latest()->paginate($paginate_value);

        return view('psicofisicos.index',compact('psicofisicos'))
                    ->with('i', (request()->input('page', 1) - 1) * $paginate_value);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('psicofisicos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'fecha_realizacion' => 'required',
            'con_sobre' => 'required',
        ]);
        Psicofisico::create($request->all());
        return redirect()->route('psicofisicos.index')->with('success','Psicofisico creado.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Psicofisico $psicofisico):View
    {
        return view('psicofisicos.show',compact('psicofisico'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Psicofisico $psicofisico):View
    {
        return view('psicofisicos.edit',compact('psicofisico'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Psicofisico $psicofisico)
    {
        $request->validate([
            'fecha_realizacion' => 'required',
            'con_sobre' => 'required',
        ]);
        $psicofisico->update($request->all());
        return redirect()->route('psicofisicos.index')->with('success','Psicofisico actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Psicofisico $psicofisico)
    {
        $psicofisico->delete();
        return redirect()->route('psicofisicos.index')->with('success','Psicofisico eliminado.');
    }
}
