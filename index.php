<?php

class User {
    public $name;

    public $lastname;

    public $age;

    private $adultContent = false;

    public $mail;

    function __construct($_name, $_lastname, $_age, $_mail) {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->age = $_age;
        $this->mail = $_mail;
        if($_age > 18) {
            $this->adultContent = true;
         }
    }

    public function writeAdultContent() {
        if($this->adultContent) {
            return 'Avendo ' . $this->age . ' anni puoi accedere al contenuto 18+.';
        } else {
            return 'Avendo ' . $this->age . ' anni non puoi accedere al contenuto 18+.';
        }
    }

}

$giacomino = new User('Giacomino', 'Pane e Vino', 37, 'giacominoPaneeVino@gmail.com');

var_dump($giacomino);


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
    
    <h3>Benvenuto <?php echo $giacomino->name ?> <?php echo $giacomino->lastname ?> </h3>

    <div> Ti sei inscritto con la mail: <?php echo $giacomino->mail ?> </div>

    <div> <?php echo $giacomino->writeAdultContent(); ?> </div>


</body>
</html>

<hr style="color:red">
<?php

class Movie {
    public $title;

    public $year;

    public function __construct($genre) {
        $this->genre = $genre;
    }

    
    public function sayTheMovie() {
        return $this->title . ' ' . $this->year . ' ' .$this->genre;
    }
}

$FantasticBeasts = new Movie('Fantasy');
    $FantasticBeasts->title = 'Fantastic Beasts: The Secrets of Dumbledore';
    $FantasticBeasts->year = 2022;

var_dump($FantasticBeasts);

$Sonic = new Movie('Cartoon');
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