<?php
    class Movie {
        public $movTitle;
        public $movDescription;
        public $movRating;
        public $movLanguage;

        function __construct($_movTitle) {
            $this->movTitle = $_movTitle;
        }

        public function setMovData($_movRating, $_movLanguage, $_movDescription) {
            $this->movRating = $_movRating;
            $this->movLanguage = $_movLanguage;
            $this->movDescription = $_movDescription;
        }

        public function printMovTitle() {
            return "{$this->movTitle}";
        }

        public function printMovDesc() {
            return "{$this->movDescription}";
        }

        public function printMovRating() {
            return "{$this->movRating}";
        }

        public function printMovLang() {
            return "{$this->movLanguage}";
        }
    }

    $firstMov = new Movie("PHP in 60 secondi");
    $firstMov->setMovData("5", "it-IT", "Nicholas Cage, in questo frenetico corso di 60 secondi, dovrà acquisire una padronanza assoluta di PHP");

    $secondMov = new Movie("La notte dei morti viventi II, the SQL!");
    $secondMov->setMovData("4.5", "it-IT", "Zombie a orde e solo queries di mySQL per difendersi... serve altro?");

    $thirdMov = new Movie("JAVA = JAVASCRIPT");
    $thirdMov->setMovData("0.5", "it-IT", "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHHH!");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>OOP EX</title>
</head>
<body>
    <h1 id="title">MOVIES</h1>
    <div class="container flex">
        <div class="card flex f-col">
            <h2 class="card-title"><?php echo "{$firstMov->printMovTitle()}"; ?></h2>
            <h4><?php echo "{$firstMov->printMovLang()}"; ?></h4>
            <h4><?php echo "{$firstMov->printMovRating()}⭐"; ?></h4>
            <h6><?php echo "{$firstMov->printMovDesc()}"; ?></h6>
        </div>

        <div class="card flex f-col">
            <h2 class="card-title"><?php echo "{$secondMov->printMovTitle()}"; ?></h2>
            <h4><?php echo "{$secondMov->printMovLang()}"; ?></h4>
            <h4><?php echo "{$secondMov->printMovRating()}⭐"; ?></h4>
            <h6><?php echo "{$secondMov->printMovDesc()}"; ?></h6>
        </div>

        <div class="card flex f-col">
            <h2 class="card-title"><?php echo "{$thirdMov->printMovTitle()}"; ?></h2>
            <h4><?php echo "{$thirdMov->printMovLang()}"; ?></h4>
            <h4><?php echo "{$thirdMov->printMovRating()}⭐"; ?></h4>
            <h6><?php echo "{$thirdMov->printMovDesc()}"; ?></h6>
        </div>
    </div>
</body>
</html>