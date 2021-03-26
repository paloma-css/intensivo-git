<?php

require_once ('Classes/Ticket.php');

use Classes\Ticket;

try{
    $ticket = new Ticket();
    $ticket->calculate();
    echo "<br>";
    print_r($ticket->generateTicket([25,23],6));
    
}catch(\Exception $e){
    echo $e->getMessage();
}
