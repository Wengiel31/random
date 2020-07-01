<?php
    if (isset($_GET["min"]) && !empty($_GET["min"])) {
        $min = $_GET["min"];
        if (isset($_GET["max"]) && !empty($_GET["max"])) {
            $max = $_GET["max"];
        }
    }
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <meta name="author" content="Jakub Węglarek" />
        <meta name="description" content="Random - generator losowych liczb" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <title>Random</title>
    </head>
    <body>
        <header>
            <nav>
                <a href="../index.php" id="back">Wróć</a>
            </nav>
        </header>
        <main>
            <form action="index.php" method="get" id="mainForm">
                <input type="number" placeholder="<?php
                    if (isset($min)) {
                        echo $min;
                    } else {
                        echo "Minimum";
                    }
                ?>" name="min" />
                <input type="number" placeholder="<?php
                    if (isset($max)) {
                        echo $max;
                    } else {
                        echo "Maksimum";
                    }
                ?>" name="max" />
                <input type="submit" value="Generuj" />
            </form>
            <?php
                if (isset($min) && isset($max)) {
                    if ($max > $min) {
                        echo '<div id="number">Losowy numer: '.rand($min, $max).'</div>';
                    } else {
                        echo "Maksymalny numer musi być większy niż minimalny";
                    }
                }
            ?>
        </main>
    </body>
</html>