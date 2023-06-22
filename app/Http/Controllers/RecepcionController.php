<?php

namespace App\Http\Controllers;

use App\Models\Recepcion;
use Illuminate\Http\Request;

/**
 * Class RecepcionController
 * @package App\Http\Controllers
 */
class RecepcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recepcions = Recepcion::paginate();

        return view('recepcion.index', compact('recepcions'))
            ->with('i', (request()->input('page', 1) - 1) * $recepcions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recepcion = new Recepcion();
        return view('recepcion.create', compact('recepcion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Recepcion::$rules);

        $recepcion = Recepcion::create($request->all());

        return redirect()->route('recepcions.index')
            ->with('success', 'Recepcion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recepcion = Recepcion::find($id);

        return view('recepcion.show', compact('recepcion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recepcion = Recepcion::find($id);

        return view('recepcion.edit', compact('recepcion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Recepcion $recepcion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recepcion $recepcion)
    {
        request()->validate(Recepcion::$rules);

        $recepcion->update($request->all());

        return redirect()->route('recepcions.index')
            ->with('success', 'Recepcion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $recepcion = Recepcion::find($id)->delete();

        return redirect()->route('recepcions.index')
            ->with('success', 'Recepcion deleted successfully');
    }
}
