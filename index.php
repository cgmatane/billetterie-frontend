<?php

include('resource/include/head.php');
include('resource/include/nav.php');

if (isset($_GET['page']))
{
    switch($_GET['page'])
    {
        case "page1": include('page/page1.php'); break;
        case "page2": include('page/page2.php'); break;
        default: include('page/accueil.php');
    }
}
else
{
    include('page/accueil.php');
}

include('resource/include/footer.php');
include('resource/include/foot.php');