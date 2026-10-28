<?php

namespace App\Http\Controllers;

use App\Models\LeverancierModel;
use Illuminate\Http\Request;

class LeverancierController extends Controller
{

    private $leverancierModel;

    public function __construct()
    {
        $this->leverancierModel = new LeverancierModel();
    }

    /**
     * Display a listing of the resource.
     */
    public function index(int $id)
    {
        //
        $leverancier = $this->leverancierModel->sp_GetLeverantieById($id);

        return view('Leverancier.index', [
            'title' => 'leverancier',
            'leverancier' => $leverancier

        ]);
    }

    // aparte pagine voor leverancier
    public function LeverancierPagina()
    {
        $leverancierPagina = $this->leverancierModel->sp_GetAllLeverancier();
              #  var_dump($leverancierPagina);exit();
        return view('Leverancierpagina.index', [
            'title' => 'Overzicht Leveranciers',
            'leverancierPagina' => $leverancierPagina
        ]);
    }

    public function getGeleverdeProductenByLeverancierId($id)
    {
        $geleverdeProducten = $this->leverancierModel->sp_GetGeleverdeProductenByLeverancierId($id);
        return view('Leverancierpagina.geleverdeproducten', [
            'title' => 'Geleverde Producten',
            'geleverdeProducten' => $geleverdeProducten
        ]);
    }






    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
