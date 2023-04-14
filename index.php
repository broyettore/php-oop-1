<?php
require_once (__DIR__."/db.php/models/action.php");
require_once (__DIR__."/db.php/models/horror.php");
require_once (__DIR__."/db.php/models/anime.php");
require_once (__DIR__."/db.php/models/movie.php");


$movieFile = new Movie(
    new ActionMovie("Top Gun", "Action", "Eng", "good", 5), 
    new HorrorMovie("Scary Movie", "Horror/Comedy", "Fr", "funny", 4), 
    new AnimeMovie("Dragon Ball", "Anime", "Jp", "Exciting", 4)
);

$bestMovie = $movieFile->getBestMovie();
$trendingMovies = $movieFile->showMovieList();
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
    <!-- header  -->
    <header>
        <div class="container p-2 d-flex justify-content-between align-items-center">
            <div class="title d-flex align-items-center">
                <h1 class="fs-3">OOP</h1>
            </div>
            <nav>
                <ul class="d-flex  align-items-center">
                    <li class="p-2 m-2">Services</li>
                    <li class="p-2 m-2">About</li>
                    <li class="p-2 m-2">Contact</li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- /header  -->

    <!-- main  -->
    <main>
        <div class="container text-center">
            <h2 class="fs-5 mt-5">Trending Movies</h2>
            <div class="row row-cols-3 ms-ctn">
                <div class="col">
                    <?php echo  ?>
                </div>
                <div class="col">
                    <?php echo  ?>
                </div>
                <div class="col">
                    <?php echo  ?>
                </div>
            </div>
        </div>
    </main>
    <!-- /main  -->

    <!-- Bootstrap js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>