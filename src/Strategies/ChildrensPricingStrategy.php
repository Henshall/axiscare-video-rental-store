<?php

namespace App\Strategies;

class ChildrensPricingStrategy implements PricingStrategy
{
    public function getCharge(int $daysRented): float
    {
        $result = 1.5;
        if ($daysRented > 3) {
            $result += ($daysRented - 3) * 1.5;
        }
        return $result;
    }

    public function getFrequentRenterPoints(int $daysRented): int
    {
        return 1;
    }
}
