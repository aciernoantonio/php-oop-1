<?php

class Movie {

    public $title;
    public $img;
    public $year;

    function __construct($title, $img, $year) {
        $this -> title = $title;
        $this -> img = $img;
        $this-> year = $year;

    }

    public function printMovies() {
        return $this-> title;
        return $this-> img;
        return $this-> year;
    }

};

$movies = [
    new Movie ( "Doctor Strange in the multiverse of madness", "https://www.themoviedb.org/t/p/original/uH0dFlOQI6V613yTiGTvg3PMJum.jpg", "2022" ),

    new Movie ( "Spiderman no way home", "https://www.themoviedb.org/t/p/original/ikxhhCw0P0erRwu5lZTqPR674j7.jpg", "2021" ),

    new Movie ( "uncharted", "https://www.themoviedb.org/t/p/original/nM2p3MmwXzedsaueOgR3gfzv9UW.jpg", "2022" )
];


var_dump($movies);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        foreach ($movies as $movie) { ?>
            <h3><?= $movie -> title?></h3>
            <img style="width: 150px" src="<?= $movie -> img ?>" alt="">
            <div><?= $movie -> year ?></div>
            <br>
    <?php } ?>
    
</body>
</html>
