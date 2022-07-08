<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMarcaRequest;
use App\Http\Requests\UpdateMarcaRequest;
use App\Models\Marca;
use App\Repositories\MarcaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MarcaController extends AppBaseController
{
    /** @var MarcaRepository $marcaRepository*/
    private $marcaRepository;

    public function __construct(MarcaRepository $marcaRepo)
    {
        $this->marcaRepository = $marcaRepo;
    }

    /**
     * Display a listing of the Marca.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $marcas = $this->marcaRepository->all();

        return view('marcas.index')
            ->with('marcas', $marcas);
    }

    /**
     * Show the form for creating a new Marca.
     *
     * @return Response
     */
    public function create()
    {
        return view('marcas.create');
    }

    /**
     * Store a newly created Marca in storage.
     *
     * @param CreateMarcaRequest $request
     *
     * @return Response
     */
    public function store(CreateMarcaRequest $request)
    {
        $marca= new Marca();
        $input = $request->all();
        if($request->hasFile('foto')){
            $principal=$request->file('foto');
            $imgName = $principal->getClientOriginalName();
            $img = str_replace(' ','_',$imgName);
            $filenameprin= date('dmYGi').$img;
            $avatar1=$principal->move(env('RUTA_PRODUCTOS').'/images/marcas', $filenameprin);
            $marca->foto=$filenameprin;
        }
        $marca->nombre=$request->nombre;
        $marca->save();

        Flash::success('Marca saved successfully.');

        return redirect(route('marcas.index'));
    }

    /**
     * Display the specified Marca.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $marca = $this->marcaRepository->find($id);

        if (empty($marca)) {
            Flash::error('Marca not found');

            return redirect(route('marcas.index'));
        }

        return view('marcas.show')->with('marca', $marca);
    }

    /**
     * Show the form for editing the specified Marca.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $marca = $this->marcaRepository->find($id);

        if (empty($marca)) {
            Flash::error('Marca not found');

            return redirect(route('marcas.index'));
        }

        return view('marcas.edit')->with('marca', $marca);
    }

    /**
     * Update the specified Marca in storage.
     *
     * @param int $id
     * @param UpdateMarcaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMarcaRequest $request)
    {
        $marca = $this->marcaRepository->find($id);

        if (empty($marca)) {
            Flash::error('Marca not found');

            return redirect(route('marcas.index'));
        }

        $marca = $this->marcaRepository->update($request->all(), $id);

        Flash::success('Marca updated successfully.');

        return redirect(route('marcas.index'));
    }

    /**
     * Remove the specified Marca from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $marca = $this->marcaRepository->find($id);

        if (empty($marca)) {
            Flash::error('Marca not found');

            return redirect(route('marcas.index'));
        }

        $this->marcaRepository->delete($id);

        Flash::success('Marca deleted successfully.');

        return redirect(route('marcas.index'));
    }
}
