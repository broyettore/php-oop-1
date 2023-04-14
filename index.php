<?php

/*  Creare un file index.php in cui è definita una classe ‘Movie’ :

* all’interno della classe sono dichiarate delle variabili d’istanza
* all’interno della classe è definito un costruttore
* all’interno della classe è definito almeno un metodo

Devono essere istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà */

class ActionMovie {
    public $name;
    public $genre;
    public $lang;
    public $description;
    public $vote;

    public function __construct(string $_name, string $_genre, string $_lang, string $_description, int $_vote)
    {
        $this->name = $_name;
        $this->genre = $_genre;
        $this->lang = $_lang;
        $this->description = $_description;
        $this->vote = $_vote;
    }
};

class HorrorMovie {
    public $name;
    public $genre;
    public $lang;
    public $description;
    public $vote;

    public function __construct(string $_name, string $_genre, string $_lang, string $_description, int $_vote)
    {
        $this->name = $_name;
        $this->genre = $_genre;
        $this->lang = $_lang;
        $this->description = $_description;
        $this->vote = $_vote;
    }
};

class AnimeMovie {
    public $name;
    public $genre;
    public $lang;
    public $description;
    public $vote;

    public function __construct(string $_name, string $_genre, string $_lang, string $_description, int $_vote)
    {
        $this->name = $_name;
        $this->genre = $_genre;
        $this->lang = $_lang;
        $this->description = $_description;
        $this->vote = $_vote;
    }
};

class Movie {
    public $movieType1;
    public $movieType2;
    public $movieType3;

    public function __construct(ActionMovie $_movieType1, HorrorMovie $_movieType2, AnimeMovie $_movieType3,)
    {
        $this->movieType1 = $_movieType1;
        $this->movieType2 = $_movieType2;
        $this->movieType3 = $_movieType3;
    }

    public function getBestMovie() {
        $movieList = [
            $this->movieType1,
            $this->movieType2,
            $this->movieType3,
        ];

        foreach($movieList as $movie) {
            if ($movie->vote > 4) {
                return $movie->name . " is the best rated out of the movies selected";
            }
        }
    }
};

$movieFile = new Movie(
    new ActionMovie("Top Gun", "Action", "Eng", "good", 5), 
    new HorrorMovie("Scary Movie", "Horror/Comedy", "Fr", "funny", 4), 
    new AnimeMovie("Dragon Ball", "Anime", "Jp", "Exciting", 4)
);

$bestMovie = $movieFile->getBestMovie();

var_dump($movieFile);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
    <!-- Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- my css  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Php Oop</title>
</head>
<body>

    <!-- Bootstrap js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>