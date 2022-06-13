<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->


    <?php
    class movie
    {
        public $title;
        public $genre;
        public $author;
        public $year;
        public $vote;

        function __construct($_title, $_genre, $_author, $_year, $_vote = [])
        {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->author = $_author;
            $this->year = $_year;
            $this->vote = $_vote;
        }

        public function averagedVote()
        {
        }
    }


    $rambo = new movie("First blood", "Azione", "Ted Kotcheff", "1982");
    var_dump($rambo);

    $rambo_2 = new movie("Rambo: First Blood Part II", "Azione", "George Pan Cosmatos", "1985");
    var_dump($rambo_2);

    $rambo_3 = new movie("Rambo 3", "Azione", "Peter MacDonald", "1988");
    var_dump($rambo_3);

    ?>
</body>

</html>