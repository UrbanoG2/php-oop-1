<?php 

class Movie 

{
    public $title;
    public $director;
    public $genre;
    public $release;
    public $rating;
    public $runningTime;


    public function __construct(string $title, string $director, string $genre){
        $this->title = $title;
        $this->director = $director; 
        $this->genre = $genre; 
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }


    public function setDirectcor($directcor) {
        $this->directcor = $directcor;
    }

    public function getDirector() {
        return $this->director;
    }


    public function setGenre($genre) {
        $this->genre = $genre;
    }

    public function getGenre() {
        return $this->genre;
    }


    public function setRelease($release) {
        $this->release = $release;
    }

    public function getRelease() {
        return $this->release;
    }


    public function setRating($rating) {
        $this->rating = $rating;
    }

    public function getRating() {
        return $this->rating;
    }


    public function setRunningTime($runningTime) {
        $this->runningTime = $runningTime;
    }

    public function getRunningTime() {
        return $this->runningTime;
    }
}

$movie1 = new Movie ("Assassinio sul Nilo", "Kenneth Branagh", "Mystery");
$movie1 ->setRelease("10/02/2022");
$movie1 ->setRating(6.8);
$movie1 ->setRunningTime("2h 14m");


$movie2 = new Movie ("Jackass Forever", "Jeff Tremaine", "Action");
$movie2 ->setRelease("04/02/2022 ");
$movie2 ->setRating(6.8);
$movie2 ->setRunningTime("1h 36m");
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

    <h1><?php echo $movie1->getTitle() ?></h1>
    <ul>
        <li><?php echo $movie1->getDirector() ?></li>
        <li><?php echo $movie1->getGenre() ?></li>
        <li><?php echo $movie1->getRelease() ?></li>
        <li><?php echo $movie1->getRating() ?></li>
        <li><?php echo $movie1->getRunningTime() ?></li>
    </ul>


    <h1><?php echo $movie2->getTitle() ?></h1>
    <ul>
        <li><?php echo $movie2->getDirector() ?></li>
        <li><?php echo $movie2->getGenre() ?></li>
        <li><?php echo $movie2->getRelease() ?></li>
        <li><?php echo $movie2->getRating() ?></li>
        <li><?php echo $movie2->getRunningTime() ?></li>
    </ul>


</body>
</html>