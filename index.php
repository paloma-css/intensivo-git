<?php

//require('classes/ticket.php');

class Ticket 
{
   
    public function calculate()
    {
        try {
            echo 'Meus números sorteados';
        } catch (\Exception $e) {
            print_r($e->getMessage());die;
        }
    }
    public function calculate2($num1 = 0, $num2 = 0)
    {
        try {
            echo "Você informou $num1, $num2";
        } catch (\Exception $e) {
            print_r($e->getMessage());die;
        }
    }
}

	

$ticket = new Ticket();

$ticket->calculate2(15, 255);