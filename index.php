<?php

include('resource/include/head.php');
include('resource/include/nav.php');

if (isset($_GET['page']))
{
    switch($_GET['page'])
    {
        case "reservation_choix_horaire_depart": include('page/reservation_choix_horaire_depart.php'); break;
        case "reservation_animaux": include('page/reservation_animaux.php'); break;
        case "information_animaux": include('page/information_animaux.php'); break;
        case "reservation_choix_vehicule": include('page/reservation_choix_vehicule.php'); break;
        default: include('page/accueil.php');
    }
}
else
{
    include('page/accueil.php');
}

include('resource/include/footer.php');
include('resource/include/foot.php');