<?php

class Movie {
    public $title;

    public $year;

    public function __constructor($genre) {
        $this->genre = $genre;
    }

    
    public function sayTheMovie() {
        return $this->title . ' ' . $this->year . ' ' .$this->genre;
    }
}

$FantasticBeasts = new Movie('Rock');
    $FantasticBeasts->title = 'Fantastic Beasts: The Secrets of Dumbledore';
    $FantasticBeasts->year = 2022;

var_dump($FantasticBeasts);

$Sonic = new Movie('Rock');
    $Sonic->title = 'Sonic the Hedgehog 2';
    $Sonic->year = 2022;

var_dump($Sonic);
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
    <h1>Titolo: <?php echo $FantasticBeasts->title; ?></h1>

    <div> <?php echo $FantasticBeasts->sayTheMovie(); ?> </div>

    <div>Anno: <?php echo $FantasticBeasts->year; ?></div>

    <hr>

    <h1>Titolo: <?php echo $Sonic->title; ?></h1>

    <div> <?php echo $Sonic->sayTheMovie(); ?> </div>

    <div>Anno: <?php echo $Sonic->year; ?></div>

</body>
</html>