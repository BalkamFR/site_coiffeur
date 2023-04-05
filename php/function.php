<?php
       function date_fr($date_jour){
        if($date_jour == 'Monday'){
            $new_jour = 'Lundi';
        };
        if($date_jour == 'Tuesday'){
            $new_jour = 'Mardi';
        };
        if($date_jour == 'Wednesday'){
            $new_jour = 'Mercredi';
        }
        if($date_jour == 'Thursday'){
            $new_jour = 'Jeudi';
        };
        if($date_jour == 'Friday'){
            $new_jour = 'Vendredi';
        };
        if($date_jour == 'Saturday'){
            $new_jour = 'Samedi';
        };
        if($date_jour == 'Sunday'){
            $new_jour = 'Dimanche';
        };
        return $new_jour;
   };
   function mois_fr($mois_en){
            if($mois_en == 'January' || $mois_en =='01'){
                $mois_fr = 'Janvier';
            };
            if($mois_en == 'February' || $mois_en =='02'){
                $mois_fr = 'Février';
            };
            if($mois_en == 'March' || $mois_en == '03'){
                $mois_fr = 'Mars';
            };
            if($mois_en == 'April' || $mois_en =='04'){
                $mois_fr = 'Avril';
            };
            if($mois_en == 'May' || $mois_en =='05'){
                $mois_fr = 'Mai';
            };
            if($mois_en == 'June' || $mois_en =='06'){
                $mois_fr = 'Juin';
            };
            if($mois_en == 'July' || $mois_en =='07'){
                $mois_fr = 'Juillet';
            };
            if($mois_en == 'August' || $mois_en == '08'){
                $mois_fr = 'Août';
            };
            if($mois_en == 'September' || $mois_en == '09'){
                $mois_fr = 'Septembre';
            };
            if($mois_en == 'October' || $mois_en == '10'){
                $mois_fr = 'Octobre';
            };
            if($mois_en == 'November' || $mois_en == '11'){
                $mois_fr = 'Novembre';
            };
            if($mois_en == 'December' || $mois_en == '12'){
                $mois_fr = 'Décembre';
            };
        return $mois_fr;
   };
   function date_suivant($nbr_jour){
            $jour_en = date('l', strtotime('+'.$nbr_jour.' days'));
            $mois_en = date('m', strtotime('+'.$nbr_jour.' days'));
            $jour_en_nbr = date('d', strtotime('+'.$nbr_jour.' days'));
            $new_jour = date_fr($jour_en);
            $new_mois = mois_fr($mois_en);
            $date_suivante = $new_jour . ' ' .$jour_en_nbr.' '.$new_mois;
        return $date_suivante;
   };
        function date_suivant_nbr($nbr_jour){
            $mois_en = date('m', strtotime('+'.$nbr_jour.' days'));
            $jour_en_nbr = date('d', strtotime('+'.$nbr_jour.' days'));
            $annee = annee_suivant($nbr_jour);
            $date_suivante = $jour_en_nbr.'/'.$mois_en.'/'.$annee;
        return $date_suivante;
        };
        function jour_suivant($nbr_jour){
            $jour_en = date('l', strtotime('+'.$nbr_jour.' days'));
            $jour_suivant = date_fr($jour_en);
        return $jour_suivant;
        };
        function annee_suivant($nbr_jour){
            $jour_en = date('Y', strtotime('+'.$nbr_jour.' days'));
            $annee_suivante = $jour_en;
        return $annee_suivante;
        }; 
        function conversion_date($date_nbr){
            
        }
?>