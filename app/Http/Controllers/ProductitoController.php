<?php

namespace App\Http\Controllers;

use App\Models\Productito;
use Illuminate\Http\Request;

/**
 * Class ProductitoController
 * @package App\Http\Controllers
 */
class ProductitoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productitos = Productito::paginate();

        return view('productito.index', compact('productitos'))
            ->with('i', (request()->input('page', 1) - 1) * $productitos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productito = new Productito();
        return view('productito.create', compact('productito'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Productito::$rules);

        $productito = Productito::create($request->all());

        return redirect()->route('productitos.index')
            ->with('success', 'Productito created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productito = Productito::find($id);

        return view('productito.show', compact('productito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productito = Productito::find($id);

        return view('productito.edit', compact('productito'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Productito $productito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productito $productito)
    {
        request()->validate(Productito::$rules);

        $productito->update($request->all());

        return redirect()->route('productitos.index')
            ->with('success', 'Productito updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $productito = Productito::find($id)->delete();

        return redirect()->route('productitos.index')
            ->with('success', 'Productito deleted successfully');
    }
}
