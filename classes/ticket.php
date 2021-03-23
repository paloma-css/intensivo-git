<?php

namespace Paloma\Ticket;

class Ticket 
{
    public function __construct()
    {
    }

    public function calculate()
    {
        try {
            echo 'Meus números sorteados';
        } catch (\Exception $e) {
            print_r($e->getMessage());die;
        }
    }
}
