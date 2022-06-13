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
        public $grades;
        public $language;

        function __construct($_title, $_genre, $_author, $_year, $_grades = [])
        {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->author = $_author;
            $this->year = $_year;
            $this->grades = $_grades;
        }

        public function generateLanguage($_language)
        {
            $this->language[] = $_language;
        }

        public function insertLanguage()
        {
            return "Lingua:" . $this->language;
        }
        public function insertVote($_grade)
        {
            $this->grades[] = $_grade;
        }
        public function averageVote()
        {
            $gradesSum = 0;
            foreach ($this->grades as $grade) {
                $gradesSum += $grade;
            }
            $avgGrade = $gradesSum / count($this->grades);
            return $avgGrade;
        }
    }


    $rambo = new movie("Rambo: First blood", "Azione", "Ted Kotcheff", "1982");
    $rambo->insertVote(8);
    $rambo->insertVote(6);
    $rambo->insertVote(9);
    $rambo->insertLanguage("english");
    $rambo->insertLanguage("italian");

    var_dump($rambo);

    $rambo_2 = new movie("Rambo: First Blood Part II", "Azione", "George Pan Cosmatos", "1985");
    $rambo_2->insertVote(7);
    $rambo_2->insertVote(10);
    $rambo_2->insertVote(8);
    $rambo_2->insertLanguage("english");
    $rambo_2->insertLanguage("dutch");
    var_dump($rambo_2);

    $rambo_3 = new movie("Rambo 3", "Azione", "Peter MacDonald", "1988");
    $rambo_3->insertVote(7);
    $rambo_3->insertVote(9);
    $rambo_3->insertVote(8);
    $rambo_3->insertLanguage("english");
    $rambo_3->insertLanguage("espanol");
    var_dump($rambo_3);


    $movies = [];
    $movies[] = $rambo;
    $movies[] = $rambo_2;
    $movies[] = $rambo_3;
    ?>


    <ul>
        <?php foreach ($movies as $movie) { ?>
            <li>
                <h4>
                    Titolo:<?php echo $movie->title; ?>
                </h4>
                <p> Genere: <?php echo $movie->genre; ?></p>
                <p> Regista: <?php echo $movie->author; ?></p>
                <p> Anno: <?php echo $movie->year; ?></p>
                <p>Voto: <?php echo $movie->averageVote() ?></p>
            </li>
        <?php  }  ?>
    </ul>
</body>

</html>