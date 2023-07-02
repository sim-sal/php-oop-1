<?php

use JetBrains\PhpStorm\ArrayShape;

class Genre
{
    public $filmGenre;

    public function __construct($filmGenre)
    {
        $this->filmGenre = $filmGenre;
    }
}
class Movie
{

    public $title;
    public $director;
    public $yearRelease;

    public array $genres;

    public function __construct($title, $director, int $yearRelease, Genre ...$genre)
    {
        $this->title = $title;
        $this->director = $director;
        $this->yearRelease = $yearRelease;

        $this->genres = $genre;
    }

    public function getMovie()
    {
        return "Titolo: " . $this->title . " - Regista: " . $this->director . " - Anno di uscita: " . $this->yearRelease;
    }
}

$genre1 = new Genre("Drammatico");
$genre2 = new Genre("Guerra");
$genre3 = new Genre("Giallo");

$movie1 = new Movie("La vita è bella", "Roberto Benigni", 1997, $genre2, $genre1);
var_dump($movie1);
echo "<br>";
$movie2 = new Movie("Le ali della libertà", "Frank Darabont", 1994, $genre1, $genre3);
var_dump($movie2);

// stampiamo a schermo
// echo $movie1->getMovie();
// echo "<br>";
// echo $movie2->getMovie();
// echo "<br>";
