<?php

namespace App\Strategies;

interface PricingStrategy
{
    public function getCharge(int $daysRented): float;
    public function getFrequentRenterPoints(int $daysRented): int;
}
