<?php

use app\Peliculas;


require 'vendor/autoload.php';


$pelicula = new peliculas("torrente 5", 90);

echo $pelicula->name();

?>