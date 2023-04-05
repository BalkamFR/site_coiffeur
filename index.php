<?php
    include 'php/function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <?php
        $a = 0;
        while ($a < 10) {
            $a = $a +1;
            $date = date_suivant_nbr($a);
            echo $date;
            echo '</br>';
        };
        echo date('m/d/Y')
    ?>
</body>
</html>