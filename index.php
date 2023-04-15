<?php
    include 'php/function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Accueil</title>
</head>
<body>
    <header>

    </header>
    <section class="page_reservation">
        <div class="titre_reservation"> 
            <h1>Prenez votre rendez-vous en ligne</h1>
            <p>Renseignez les informations suivantes</p>
        </div>
        <div class="box_reservation">
            <div class="box_date_reservation">
            <?php
                $a = 0;
                $b=2;
                if(isset($_GET['nbr'])){
                    $b = $_GET['nbr'] + $b;
                };
                while ($a < $b) {
                    $date = date_suivant($a);
                    echo '
                            <div class="info_date_reservation">
                              <label for="'.date_suivant_nbr($a).'">
                            <div class="date_reservation">
                                <p>'.$date.'</p>
                                    <img src="img/fleche.png" alt="" class="fleche_bas">
                                </label>
                            </div>
                            <input type="checkbox" id="'.date_suivant_nbr($a).'" class="affiche none">
                            <div class="heure_reservation">';
                                    foreach ($heure_dispo_pro as $key) {
                                        if ($key > $heure & jour_suivant($a) == jour_suivant(0)){
                                            if (verif_date_resevation($a, $jour_reserver_liste, $key) == 1) {
                                                echo '<p>'.$key.'</p>';
                                            }else{
                                                echo '<a href="">'.$key.'</a>';
                                            }
                                        }elseif(jour_suivant($a) != jour_suivant(0)){
                                            if (verif_date_resevation($a, $jour_reserver_liste, $key) == 1) {
                                                echo '<p>'.$key.'</p>';
                                            }else{
                                                echo '<a href="">'.$key.'</a>';
                                            }       
                                    };
                                }; 
                            echo '</div></div>';
                    $a = $a +1;
                };
                echo "<a href='?nbr=".$b."#btn_plus' id='btn_plus'>plus</a>";
            ?>
            </div>
            <div class="box_info_coiffeur_reservation">
                <div>
                
                </div>
            </div>
        </div>
    </section>
</body>
</html>