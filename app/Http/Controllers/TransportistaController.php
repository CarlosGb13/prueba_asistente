<?php

namespace App\Http\Controllers;

use App\Models\Transportista;
use Illuminate\Http\Request;

/**
 * Class TransportistaController
 * @package App\Http\Controllers
 */
class TransportistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transportistas = Transportista::paginate();

        return view('transportista.index', compact('transportistas'))
            ->with('i', (request()->input('page', 1) - 1) * $transportistas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transportista = new Transportista();
        return view('transportista.create', compact('transportista'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Transportista::$rules);

        $transportista = Transportista::create($request->all());

        return redirect()->route('transportistas.index')
            ->with('success', 'Transportista created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transportista = Transportista::find($id);

        return view('transportista.show', compact('transportista'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transportista = Transportista::find($id);

        return view('transportista.edit', compact('transportista'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Transportista $transportista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transportista $transportista)
    {
        request()->validate(Transportista::$rules);

        $transportista->update($request->all());

        return redirect()->route('transportistas.index')
            ->with('success', 'Transportista updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $transportista = Transportista::find($id)->delete();

        return redirect()->route('transportistas.index')
            ->with('success', 'Transportista deleted successfully');
    }
}
