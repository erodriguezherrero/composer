<?php

namespace  App;

use App\Interfaces\PeliculasInterface;

class Peliculas implements PeliculasInterface
{
    private string $name;
    private int $minutes;

    public function __construct(string $name, int $minutes)
    {
        $this->name = $name;
        $this->minutes = $minutes;
    }


    public function name() : string
    {
        return $this->name;
    }

    public function minutes() :int
    {
        return $this->minutes;
    }
}
