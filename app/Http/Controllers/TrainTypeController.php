<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainType;
use Illuminate\Support\Facades\DB;

class TrainTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainTypes = TrainType::all();
        return view('trainTypes/index', ['trainTypes'=>$trainTypes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('trainTypes/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $trainType = new TrainType;
        $trainType -> type = $request -> input('tipo');
        $trainType -> save();

        return redirect('/trainTypes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trainType = TrainType::find($id);
        return view('trainTypes/show', ['trainType' => $trainType]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $trainType = TrainType::find($id);
        return view('trainTypes/edit', ['trainType' => $trainType]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $trainType = TrainType::find($id); 

        $trainType -> type = $request -> input('tipo');
        $trainType -> save();

        return redirect('/trainTypes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('train_types')->where('id', "=", $id)->delete();
        return redirect('/trainTypes');
    }
}
