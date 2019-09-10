<body id="top" style="background-color: #d3d3d3">
<div class="row">
    <div class="col-sm-12 col-xs-0">
        <img src="resource/image/avancement1.PNG" width="100%">
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h4 class="text-center text-info font-weight-bold mt-4">Renseignez vos informations de paiement</h4>
        </div>
    </div>
    <div class="row text-center justify-content-center">
        <form>
            <div class="row">
                <div class="col">
                    <label for="nom">Nom et prénom:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="nom">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="numeroDeCarte">Numéro de carte :</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="numeroDeCarte" placeholder="1234 1234 1234 5678">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="securite">Code de sécurité :</label>
                </div>
                <div class="col-sm-7">
                    <input type="tel" class="form-control" id="securite" placeholder="123">
                </div>
            </div>
        </form>
    </div>

    <div class="row text-center justify-content-center">
        <a href="index.php?page=reservation_passagers"><button type="button" class="btn btn-danger m-5 px-5 py-lg-5 py-xs-2">
                Retour</button></a>
        <a href="index.php?page=reservation_confirmation"><button type="button" class="btn btn-success m-5 px-5 py-lg-5 py-xs-2">
                Payer</button></a>
    </div>
</div>
