<?php

namespace App\Strategies;

class NewReleasePricingStrategy implements PricingStrategy
{
    public function getCharge(int $daysRented): float
    {
        return $daysRented * 3;
    }

    public function getFrequentRenterPoints(int $daysRented): int
    {
        return ($daysRented > 1) ? 2 : 1;
    }
}
