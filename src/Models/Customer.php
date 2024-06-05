<?php

namespace App\Models;

use App\Strategies\RegularPricingStrategy;
use App\Strategies\NewReleasePricingStrategy;
use App\Strategies\ChildrensPricingStrategy;

class Customer
{
    private $name;
    private $rentals = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addRental(Rental $rental)
    {
        $this->rentals[] = $rental;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getRentals()
    {
        return $this->rentals;
    }


    public function addSampleMovies(){
        $prognosisNegative = new Movie("Prognosis Negative", new NewReleasePricingStrategy());
        $sackLunch = new Movie("Sack Lunch", new ChildrensPricingStrategy());
        $painAndYearning = new Movie("The Pain and the Yearning", new RegularPricingStrategy());

        $this->addRental(new Rental($prognosisNegative, 3));
        $this->addRental(new Rental($painAndYearning, 1));
        $this->addRental(new Rental($sackLunch, 1));
    }
}
