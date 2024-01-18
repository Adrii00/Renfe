<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use App\Models\TrainType;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trains = Train::all();
        return view('trains/index', ['trains'=>$trains]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipos = TrainType::all();
        return view('trains/create', ['tipos'=>$tipos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $train = new Train;
        $train -> name = $request -> input('nombre');
        $train -> passengers = $request -> input('pasajeros');
        $train -> year = $request -> input('year');
        $train -> train_type_id = $request -> input('tipo');
        $train -> save();

        return redirect('/trains');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $train = Train::find($id);
        return view('trains/show', ['train' => $train]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tipos = TrainType::all();
        $train = Train::find($id);
        return view('trains/edit', ['train' => $train], ['tipos'=>$tipos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $train = Train::find($id);

        $train -> name = $request -> input('nombre');
        $train -> passengers = $request -> input('pasajeros');
        $train -> year = $request -> input('year');
        $train -> train_type_id = $request -> input('tipo');
        $train -> save();

        return redirect('/trains');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
