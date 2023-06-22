<?php

namespace App\Http\Controllers;

use App\Models\Empaque;
use Illuminate\Http\Request;

/**
 * Class EmpaqueController
 * @package App\Http\Controllers
 */
class EmpaqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empaques = Empaque::paginate();

        return view('empaque.index', compact('empaques'))
            ->with('i', (request()->input('page', 1) - 1) * $empaques->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empaque = new Empaque();
        return view('empaque.create', compact('empaque'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Empaque::$rules);

        $empaque = Empaque::create($request->all());

        return redirect()->route('empaques.index')
            ->with('success', 'Empaque created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empaque = Empaque::find($id);

        return view('empaque.show', compact('empaque'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empaque = Empaque::find($id);

        return view('empaque.edit', compact('empaque'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Empaque $empaque
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empaque $empaque)
    {
        request()->validate(Empaque::$rules);

        $empaque->update($request->all());

        return redirect()->route('empaques.index')
            ->with('success', 'Empaque updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $empaque = Empaque::find($id)->delete();

        return redirect()->route('empaques.index')
            ->with('success', 'Empaque deleted successfully');
    }
}
