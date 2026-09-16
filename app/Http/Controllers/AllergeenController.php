<?php

namespace App\Http\Controllers;

use App\Models\AllergeenModel;
use Illuminate\Http\Request;

class AllergeenController extends Controller
{

    private $allergeenModel

    public function __construct()
    {
        $this->allergeenModel = new AllergeenModel();
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
           $allergenen = $this->allergeenModel->sp_GetAllAllergenen();
    
            return view('allergenen.index', [
            'title' =>'Allergenen',
            'allergenen' => $allergenen
        ]); 
        } catch (Exception $e) {

            echo "Er is van dit product op dit moment geen voorraad aanwezig, de verwachte eerstvolgende levering is: 30-04-2023 ”". 
                $e->getMessage();
        }
 
      
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
