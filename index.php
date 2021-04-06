<?php

require_once ('Classes/Ticket.php');

use Classes\Ticket;

try{
    $ticket = new Ticket();
    $ticket->calculate();
    
    $loop = range(1, 6);

    foreach($loop as $k){
    echo "<br>";
    print_r($ticket->generateTicket([15,30],6));
    }

}catch(\Exception $e){
    echo $e->getMessage();
}
