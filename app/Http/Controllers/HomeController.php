<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Producto;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $productos = Producto::where('categoria_id',3)->orderByRaw('rand()')->get();
        $marcas= Marca::orderByRaw('rand()')->get();
        return view('home')
            ->with('productos', $productos)
            ->with('marcas',$marcas);
    }
}
