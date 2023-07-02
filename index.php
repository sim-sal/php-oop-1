<?php

class Movie
{

    public $title;
    public $director;
    public $yearRelease;

    public function __construct($title, $director, int $yearRelease)
    {
        $this->title = $title;
        $this->director = $director;
        $this->yearRelease = $yearRelease;
    }

    public function getMovie()
    {
        return "Titolo: " . $this->title . " - Regista: " . $this->director . " - Anno di uscita: " . $this->yearRelease;
    }
}

$movie1 = new Movie("La vita è bella", "Roberto Benigni", 1997);
$movie2 = new Movie("Le ali della libertà", "Frank Darabont", 1994);

// stampiamo a schermo
echo $movie1->getMovie();
echo "<br>";
echo $movie2->getMovie();
