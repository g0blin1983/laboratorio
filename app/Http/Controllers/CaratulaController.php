<?php

namespace App\Http\Controllers;

use App\Models\Caratula;
use Illuminate\Http\Request;

/**
 * Class CaratulaController
 * @package App\Http\Controllers
 */
class CaratulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caratulas = Caratula::paginate();

        return view('caratula.index', compact('caratulas'))
            ->with('i', (request()->input('page', 1) - 1) * $caratulas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caratula = new Caratula();
        return view('caratula.create', compact('caratula'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Caratula::$rules);

        $caratula = Caratula::create($request->all());

        return redirect()->route('caratulas.index')
            ->with('success', 'Caratula created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caratula = Caratula::find($id);

        return view('caratula.show', compact('caratula'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caratula = Caratula::find($id);

        return view('caratula.edit', compact('caratula'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Caratula $caratula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caratula $caratula)
    {
        request()->validate(Caratula::$rules);

        $caratula->update($request->all());

        return redirect()->route('caratulas.index')
            ->with('success', 'Caratula updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caratula = Caratula::find($id)->delete();

        return redirect()->route('caratulas.index')
            ->with('success', 'Caratula deleted successfully');
    }
}
