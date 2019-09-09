<body id="top" style="background-color: #004882">
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center text-warning font-weight-bold">Départ Matane <?php if (isset($_GET['jour'])) {echo $_GET['jour'] ; } else { echo '4' ; } ?> septembre</h1>
        </div>
    </div>
    <div class="text-center row justify-content-center">
        <div class="img-thumbnail col-sm-6 col-xs-8 bg-light pb-5">
        <h4 class="text-center mt-3">Choisissez votre destination</h4>
        <a href="index.php?page=reservation_animaux"><button type="button" class="btn btn-success mt-5 col-6 p-3" >Godbout</button></a><br>
            <a href="index.php?page=reservation_animaux"><button type="button" class="btn btn-success col-6 mt-5 p-3" >Baie-Comeau</button></a>
        </div>
    </div>
    <div class="row text-center justify-content-center">
        <a href="index.php?page=choix_date"><button type="button" class="btn btn-danger m-5 p-3" >Choisir une autre date</button></a>
    </div>
</div>