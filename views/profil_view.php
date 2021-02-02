<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div class="profil">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Pseudo: <?=.$pseudo;?></h5>
                <h5>Date de Naissance :<?=.$dateNaiss;?></h5>
                <h5>Pays :<?= .$pays;?></h5>
                <h5></h5>
                <p class="card-text">BIOGRAPHIE <br/> <?=.$biographie; ?></p>
                <a href="#" class="btn btn-primary">Home</a>
            </div>
            </div>

        </div>
</body>
</html>