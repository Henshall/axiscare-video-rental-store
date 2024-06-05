<?php

namespace App\Models;

class Rental
{
    private $movie;
    private $daysRented;

    public function __construct(Movie $movie, int $daysRented)
    {
        $this->movie = $movie;
        $this->daysRented = $daysRented;
    }

    public function getMovie(): Movie
    {
        return $this->movie;
    }

    public function getDaysRented(): int
    {
        return $this->daysRented;
    }

    public function getCharge(): float
    {
        return $this->movie->getCharge($this->daysRented);
    }

    public function getFrequentRenterPoints(): int
    {
        return $this->movie->getFrequentRenterPoints($this->daysRented);
    }
}
