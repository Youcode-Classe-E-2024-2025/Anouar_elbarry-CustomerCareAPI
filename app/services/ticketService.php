<?php
namespace App\services;
use App\Models\Ticket;
use Auth;
class TicketService{

    
    public function getAllUsersTickets(){
        $tickets = Ticket::where('user_id',Auth::id())
        ->orderBy('created_at','desc')
        ->get();
        return $tickets;
    }
    public function create(array $ticketData){
        try{
            $ticket = Ticket::create($ticketData);
            return $ticket;
        }catch(\Exception $e){
            \Log::error('Ticket creation failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'data' => $ticketData
            ]);
            return false;
        }
        
    }
    
    public function destroy(int $ticketId){
        try{
       $ticket = Ticket::findOrFail($ticketId);
       $ticket->delete();
       return true;
        }catch(\Exception $e){
         \log::error($e); 
         return false;
        }
    }

    public function update(array $ticketData,int $ticketId){
        try{
         $ticket = Ticket::findOrFail($ticketId);
         $ticket= $ticket->update($ticketData);
         return true;
    }catch(\Exception $e){
        \Log::error($e->getMessage());
        return false;
    }
}

}