<?php

namespace App\Http\Controllers;

use App\Models\MagazijnModel;
use Illuminate\Http\Request;

class MagazijnmedewerkerController extends Controller
{
    private $MagazijnModel;

    public function __construct()
    {
        $this->MagazijnModel = new MagazijnModel();
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $magazijn = $this->MagazijnModel->SP_GetAllMagazijn();

        return view('Magazijnmedewerker.index', [
            'title' => 'Magazijn',
            'magazijnen' => $magazijn
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
