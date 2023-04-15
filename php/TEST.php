<?php
include 'function.php';
$tab_heure_dispo_pro = array("0800", "0915", "1030", "1200", "1300", "1415", "0900", "1645", "2230", "2300", "1400", "0000");
$jour_reserver_tab = '13/04/2023:0915';

$jour_heure_ajd = 0;


echo verif_date_resevation(0 ,$tab_heure_dispo_pro, $jour_reserver_tab);


?>