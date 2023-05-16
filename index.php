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
            $this->movDescription = $_movDescription;
            $this->movRating = $_movRating;
            $this->movLanguage = $_movLanguage;
        }

        public function printMov() {
            return "{$this->movTitle} {$this->movDescription} {$this->movRating} {$this->movLanguage}";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP EX</title>
</head>
<body>
    
</body>
</html>