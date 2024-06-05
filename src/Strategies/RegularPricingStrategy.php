<?php

namespace App\Strategies;

class RegularPricingStrategy implements PricingStrategy
{
    public function getCharge(int $daysRented): float
    {
        $result = 2;
        if ($daysRented > 2) {
            $result += ($daysRented - 2) * 1.5;
        }
        return $result;
    }

    public function getFrequentRenterPoints(int $daysRented): int
    {
        return 1;
    }
}
