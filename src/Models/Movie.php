<?php

namespace App\Models;

use App\Strategies\PricingStrategy;

class Movie
{
    private $title;
    private $pricingStrategy;

    public function __construct($title, PricingStrategy $pricingStrategy)
    {
        $this->title = $title;
        $this->pricingStrategy = $pricingStrategy;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getCharge(int $daysRented): float
    {
        return $this->pricingStrategy->getCharge($daysRented);
    }

    public function getFrequentRenterPoints(int $daysRented): int
    {
        return $this->pricingStrategy->getFrequentRenterPoints($daysRented);
    }

    public function setPricingStrategy(PricingStrategy $pricingStrategy): void
    {
        $this->pricingStrategy = $pricingStrategy;
    }
}
