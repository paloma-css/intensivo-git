<?php
namespace Classes;

class Ticket 
{
    private $numbers =[];
    
    public function __construct()
    {
        $this->numbers = range(1, 60); 
    }

    public function calculate()
    {
        try {
            echo 'Meus números sorteados';
        } catch (\Exception $e) {
            print_r($e->getMessage());die;
        }
    }

    public function generateTicket($fixedNumbers = [], $ticketRangeSize)
    {
        try {
            $candidates = array_diff($this->numbers, $fixedNumbers);
            $myFixedNUmberSize = count($fixedNumbers);
            shuffle($candidates);
            $numberDrawSize = $ticketRangeSize - $myFixedNUmberSize;
            $numbersDrawn = array_slice($candidates,0, $numberDrawSize);
            
            $resultSet= array_merge($numbersDrawn, $fixedNumbers);
            sort($resultSet);
            return $resultSet;
            
        } catch (\Exception $e) {
            print_r($e->getMessage());die;
        }
    }
}
