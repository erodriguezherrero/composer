<?php

use App\Peliculas;

require 'vendor/autoload.php';


$pelicula = new Peliculas("torrente 5", 90);

echo $pelicula->name();
