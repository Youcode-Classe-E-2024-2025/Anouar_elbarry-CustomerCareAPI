<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketRequest;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\services\TicketService;
use function PHPUnit\Framework\returnSelf;

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
    public function store(TicketRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['user_id'] = Auth::id();
        $ticket = $this->ticketService->create($validatedData);
        if($ticket){
            return response()->json([
                'message' => 'ticket created successfully',
                'ticket' => $ticket
            ],201);
        } 

        return response()->json([
            'message' => 'ticket failed to create'
        ],500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        // Ensure the ticket belongs to the authenticated user
        if ($ticket->user_id !== Auth::id()) {
            return response()->json([
                'message' => 'Unauthorized to view this ticket'
            ], 403);
        }

        return response()->json([
            'ticket' => $ticket
        ], 200);
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
