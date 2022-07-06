<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoWebController extends Controller
{
    public function index(Request $request)
    {
        $productos = Producto::orderByRaw('rand()')->get();
        $categorias= Categoria::all();
        return view('portafolio')
            ->with('portafolios', $productos)
            ->with('categorias',$categorias);
    }

    /**
     * Show the form for creating a new Portafolio.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created Portafolio in storage.
     *
     * @param CreatePortafolioRequest $request
     *
     * @return Response
     */
    public function store(CreatePortafolioRequest $request)
    {

    }

    /**
     * Display the specified Portafolio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $portafolio = Producto::find($id);
        $categorias= Categoria::pluck('nombre','id');
        $related = Producto::orderByRaw('rand()')
            ->whereNotIn('id', [$id])
            ->take(3)
            ->get();

        return view('portfolio-details')
            ->with('portafolio', $portafolio)
            ->with('categorias',$categorias)
            ->with('related',$related);
    }

    /**
     * Show the form for editing the specified Portafolio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified Portafolio in storage.
     *
     * @param int $id
     * @param UpdatePortafolioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePortafolioRequest $request)
    {

    }

    /**
     * Remove the specified Portafolio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {

    }
}
