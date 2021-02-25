<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVentasRequest;
use App\Http\Requests\UpdateVentasRequest;
use App\Repositories\VentasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

use App\Models\Ventas;
use App\Models\Productos;

class VentasController extends AppBaseController
{
    /** @var  VentasRepository */
    private $ventasRepository;

    public function __construct(VentasRepository $ventasRepo)
    {
        $this->ventasRepository = $ventasRepo;
    }

    /**
     * Display a listing of the Ventas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ventas = $this->ventasRepository->all();

        return view('ventas.index')
            ->with('ventas', $ventas);
    }

    /**
     * Show the form for creating a new Ventas.
     *
     * @return Response
     */
    public function create()
    {
        $productos = Productos::pluck('nombre', 'id');
        return view('ventas.create')
            ->with('productos', $productos);
    }

    /**
     * Store a newly created Ventas in storage.
     *
     * @param CreateVentasRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $venta = new Ventas();

        $venta->precio = $request->get('precio');
        $venta->producto_id = $request->get('productos');

        $venta->save();

        return redirect(route('ventas.index'));
    }

    /**
     * Display the specified Ventas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ventas = $this->ventasRepository->find($id);

        if (empty($ventas)) {
            //Flash::error('Ventas not found');

            return redirect(route('ventas.index'));
        }

        return view('ventas.show')->with('ventas', $ventas);
    }

    /**
     * Show the form for editing the specified Ventas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ventas = $this->ventasRepository->find($id);

        if (empty($ventas)) {
            //Flash::error('Ventas not found');

            return redirect(route('ventas.index'));
        }

        return view('ventas.edit')->with('ventas', $ventas);
    }

    /**
     * Update the specified Ventas in storage.
     *
     * @param int $id
     * @param UpdateVentasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVentasRequest $request)
    {
        $ventas = $this->ventasRepository->find($id);

        if (empty($ventas)) {
            //Flash::error('Ventas not found');

            return redirect(route('ventas.index'));
        }

        $ventas = $this->ventasRepository->update($request->all(), $id);

        //Flash::success('Ventas updated successfully.');

        return redirect(route('ventas.index'));
    }

    /**
     * Remove the specified Ventas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ventas = $this->ventasRepository->find($id);

        if (empty($ventas)) {
            // Flash::error('Ventas not found');

            return redirect(route('ventas.index'));
        }

        $this->ventasRepository->delete($id);

        // Flash::success('Ventas deleted successfully.');

        return redirect(route('ventas.index'));
    }
}
