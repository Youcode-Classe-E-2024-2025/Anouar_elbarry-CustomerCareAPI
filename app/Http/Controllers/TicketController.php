<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\services\TicketService;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $ticketService;

     public function __construct(TicketService $ticketService){
        $this->ticketService = $ticketService;
     }
    public function index()
    {
        $tickets = $this->ticketService->getAllUsersTickets();
        return response()->json([
            'tickets' => $tickets
        ],200);
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
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
