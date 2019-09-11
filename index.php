<?php

include('resource/include/head.php');
include('resource/include/nav.php');

if (isset($_GET['page']))
{
    switch($_GET['page'])
    {
        case "reservation_choix_horaire_depart": include('page/reservation_choix_horaire_depart.php'); break;
        case "reservation_animaux": include('page/reservation_animaux.php'); break;
        case "informations_animaux": include('page/informations_animaux.php'); break;
        case "reservation_choix_vehicule": include('page/reservation_choix_vehicule.php'); break;
        case "reservation_choix_voiture": include('page/reservation_choix_voiture.php'); break;
        case "reservation_choix_remorque": include('page/reservation_choix_remorque.php'); break;
        case "reservation_poids": include('page/reservation_poids.php'); break;
        case "reservation_passagers": include('page/reservation_passagers.php'); break;
        case "reservation_choix_autre_vehicule": include('page/reservation_choix_autre_vehicule.php'); break;
        case "reservation_matieres": include('page/reservation_matieres.php'); break;
        case "reservation_paiement": include('page/reservation_paiement.php'); break;
        case "reservation_confirmation": include('page/reservation_confirmation.php'); break;
        case "informations_matieres": include('page/informations_matieres.php'); break;
        case "informations": include('page/informations.php'); break;
        case "choix_date": include('page/choix_date.php'); break;
        case "choix_depart": include('page/choix_depart.php'); break;
        default: include('page/accueil.php');
    }
}
else
{
    include('page/accueil.php');
}

include('resource/include/footer.php');
include('resource/include/foot.php');