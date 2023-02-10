<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function index() {

       //$tickets = Ticket::all();
       $tickets = Ticket::latest()->get();

        return view('tickets.index', [
            'tickets' => $tickets,
        ]);
    }

    public function show($id) {
        //use the $id variable to querry the database for a record.

        $ticket = Ticket::findorfail($id);

        return view('tickets.show', ['ticket' => $ticket]);
    }

    public function create() {
        return view('tickets.create');
    }

    public function store() {

        $ticket = new Ticket();

        $ticket->Name = request('Name');
        $ticket->Email = request('Email');
        $ticket->Phone_Number = request('Phone_Number');
        $ticket->Subject = request('Subject');
        $ticket->Category = request('Category');
        $ticket->Sub_Category = request('Sub_Category');
        $ticket->Priority = request('Priority');
        $ticket->Resolution = request('Resolution');
        $ticket->Recommendation= request('Recommendation');
        


        //error_log($ticket);
        $ticket->save();

        return redirect('/');
    }
    
}
