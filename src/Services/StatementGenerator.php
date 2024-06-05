<?php

namespace App\Services;

use App\Models\Customer;

class StatementGenerator
{
    private $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function generatePlainTextStatement()
    {
        $totalAmount = 0;
        $frequentRenterPoints = 0;
        $result = "Rental Record for " . $this->customer->getName() . "\n";

        foreach ($this->customer->getRentals() as $rental) {
            $thisAmount = $rental->getCharge();
            $frequentRenterPoints += $rental->getFrequentRenterPoints();

            $result .= "\t" . $rental->getMovie()->getTitle() . "\t" . $thisAmount . "\n";
            $totalAmount += $thisAmount;
        }

        $result .= "Amount owed is " . $totalAmount . "\n";
        $result .= "You earned " . $frequentRenterPoints . " frequent renter points";
        return $result;
    }

    public function generateHtmlStatement()
    {
        $totalAmount = 0;
        $frequentRenterPoints = 0;
        $result = "<h1>Rentals for <i>" . $this->customer->getName() . "</i></h1>\n";

        foreach ($this->customer->getRentals() as $rental) {
            $thisAmount = $rental->getCharge();
            $frequentRenterPoints += $rental->getFrequentRenterPoints();

            $result .= $rental->getMovie()->getTitle() . ": " . $thisAmount . "<br>\n";
            $totalAmount += $thisAmount;
        }

        $result .= "<p>Amount owed is <i>" . $totalAmount . "</i></p>\n";
        $result .= "<p>You earned <i>" . $frequentRenterPoints . "</i> frequent renter points</p>";
        return $result;
    }
}
