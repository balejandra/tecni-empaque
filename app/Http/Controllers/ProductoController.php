<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductoRequest;
use App\Http\Requests\UpdateProductoRequest;
use App\Models\Categoria;
use App\Models\Producto;
use App\Repositories\ProductoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ProductoController extends AppBaseController
{
    /** @var ProductoRepository $productoRepository*/
    private $productoRepository;

    public function __construct(ProductoRepository $productoRepo)
    {
        $this->productoRepository = $productoRepo;
    }

    /**
     * Display a listing of the Producto.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $productos = $this->productoRepository->all();

        return view('productos.index')
            ->with('productos', $productos);
    }

    /**
     * Show the form for creating a new Producto.
     *
     * @return Response
     */
    public function create()
    {
        $categorias=Categoria::pluck('nombre','id');
        return view('productos.create',compact('categorias'));
    }

    /**
     * Store a newly created Producto in storage.
     *
     * @param CreateProductoRequest $request
     *
     * @return Response
     */
    public function store(CreateProductoRequest $request)
    {
        $producto= new Producto();
        $principal=$request->file('foto_principal');
        $filenameprin= date('dmYGi').$principal->getClientOriginalName();
        $avatar1=$principal->move(env('RUTA_PRODUCTOS').'/images/productos', $filenameprin);
        $producto->foto_principal=$filenameprin;

        if($request->hasFile('foto_2')){
            $izq2=$request->file('foto_2');
            $filenameizq2= date('dmYGi').$izq2->getClientOriginalName();
            $avatar3=$izq2->move(env('RUTA_PRODUCTOS').'/images/productos', $filenameizq2);
            $producto->foto_2=$filenameizq2;
        }

        if($request->hasFile('foto_3')){
            $izq3=$request->file('foto_3');
            $filenameizq3= date('dmYGi').$izq3->getClientOriginalName();
            $avatar3=$izq3->move(env('RUTA_PRODUCTOS').'/images/productos', $filenameizq3);
            $producto->foto_3=$filenameizq3;
        }
        $producto->nombre=$request->nombre;
        $producto->descripcion=$request->descripcion;
        $producto->marca =$request->marca;
        $producto->categoria_id=$request->categoria_id;
        $producto->save();

        Flash::success('Producto guardado satisfactoriamente.');

        return redirect(route('productos.index'));
    }

    /**
     * Display the specified Producto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $producto = $this->productoRepository->find($id);
        $categoria= Categoria::pluck('nombre','id');

        if (empty($producto)) {
            Flash::error('Producto no encontrado');

            return redirect(route('productos.index'));
        }

        return view('productos.show')
            ->with('producto', $producto)
            ->with('categoria',$categoria);
    }

    /**
     * Show the form for editing the specified Producto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id, Request $request)
    {
        $producto = $this->productoRepository->find($id);
        $categoria=Categoria::pluck('nombre','id');

        if (empty($producto)) {
            Flash::error('no encontrado');

            return redirect(route('productos.index'));
        }

        return view('productos.edit')
            ->with('producto', $producto)
            ->with('categoria',$categoria);
    }

    /**
     * Update the specified Producto in storage.
     *
     * @param int $id
     * @param UpdateProductoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductoRequest $request)
    {
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error('Producto not found');

            return redirect(route('productos.index'));
        }

        if($request->hasFile('foto_principal')){
            $principal=$request->file('foto_principal');
            $filenameprin= date('dmYGi').$principal->getClientOriginalName();
            $avatar1=$principal->move(env('RUTA_PRODUCTOS').'/images/productos', $filenameprin);
            $producto->foto_principal=$filenameprin;
        }

        if($request->hasFile('foto_2')){
            $izq2=$request->file('foto_2');
            $filenameizq2= date('dmYGi').$izq2->getClientOriginalName();
            $avatar3=$izq2->move(env('RUTA_PRODUCTOS').'/images/productos', $filenameizq2);
            $producto->foto_2=$filenameizq2;
        }

        if($request->hasFile('foto_3')){
            $izq3=$request->file('foto_3');
            $filenameizq3= date('dmYGi').$izq3->getClientOriginalName();
            $avatar3=$izq3->move(env('RUTA_PRODUCTOS').'/images/productos', $filenameizq3);
            $producto->foto_3=$filenameizq3;
        }
        $producto->nombre=$request->nombre;
        $producto->descripcion=$request->descripcion;
        $producto->marca =$request->marca;
        $producto->categoria_id=$request->categoria_id;
        $producto->save();

        Flash::success('Producto actualizado satisfactoriamente.');

        return redirect(route('productos.index'));
    }

    /**
     * Remove the specified Producto from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error('Producto no encontrado');

            return redirect(route('productos.index'));
        }

        $this->productoRepository->delete($id);

        Flash::success('Producto eliminado satisfactoriamente.');

        return redirect(route('productos.index'));
    }
}
