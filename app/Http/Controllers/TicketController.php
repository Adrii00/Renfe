<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use App\Models\Train;
use App\Models\TicketType;
use DB;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets/index', ['tickets'=>$tickets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipos = TicketType::all();
        $trenes = Train::all();
        return view('tickets/create', ['tipos'=>$tipos, 'trenes'=>$trenes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ticket  = new Ticket;
        $ticket  -> date = $request -> input('fecha');
        $ticket  -> price = $request -> input('precio');
        $ticket  -> train_id = $request -> input('tren');
        $ticket  -> ticket_type_id = $request -> input('tipo');
        $ticket -> save();

        return redirect('/tickets');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tipo = TicketType::find($id);
        $tren = Train::find($id);
        $ticket = Ticket::find($id);
        return view('tickets/show', ['tipo'=>$tipo, 'tren'=>$tren, 'ticket'=>$ticket]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tipos = TicketType::all();
        $trenes = Train::all();
        $ticket = Ticket::find($id);
        return view('tickets/edit', ['tipos'=>$tipos, 'trenes'=>$trenes, 'ticket'=>$ticket]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ticket = Ticket::find($id);

        $ticket -> date = $request -> input('fecha');
        $ticket -> price = $request -> input('precio');
        $ticket -> train_id = $request -> input('tren');
        $ticket -> ticket_type_id = $request -> input('tipo');
        $ticket -> save();

        return redirect('/tickets');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('tickets')->where('id', "=", $id)->delete();
        return redirect('/tickets');
    }
}
