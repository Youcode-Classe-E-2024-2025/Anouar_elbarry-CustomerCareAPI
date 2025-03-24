<?php
namespace App\services;
use App\Models\Ticket;
class TicketService{

    
    public function create(array $ticketData){
        $ticket = Ticket::create($ticketData);
        return $ticket;
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
    }catch(\Exception $e){
        \Log::error($e);
        return false;
    }
}

}