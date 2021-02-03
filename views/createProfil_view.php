<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= ucFirst($page);?>Créer-Profil</title>
</head>
<body>
    <?php include_once './includes/header.php'; ?>
    <main>
       
            <h1>Créer votre profil</h1>
        <div class="container">
            <form action="profil_view.php" method="post" enctype="multipart/form-data">
              <div class="pseudo">
                <label for="pseudo">Pseudo: </label>
                <input type="text" name="pseudo" id="pseudo" required>
             </div>
             <div class="date-naissance">
                <label for="dateNaissance">Date de Naissance : </label>
                <input type="date" name="dateNaissance" id="dateNaissance" required>
            </div>
            <div class="pays">
                <label for="pays">Pays :</label>
                <select name="pays" id="pays" required>
                <option value="pays">
                <script>
                fetch('../countries.json')
                    .then(function(data){
                        console.log(data);
            
                        data.forEach(element => {
                          
                            
                        });

                        }
                    })

                </script>
                </option>
                </select>
            </div>
            <div class="biographie">
                <label for="biographie">Biographie :</label>
                <textarea name="biographie" id="bio" cols="30" rows="30" required></textarea>
            </div>
            <div class="avatar">

                <label for="avatar">télécharger votre avatar:</label>
                <input type="file" name="avatar" id="avatar">
                </div>
                <div class="submit">
                    <button class="btn btn-primary" value="enregistrer" name="profil">Enregistrer</button>
                </div>

            </form>

        </div>
    </main>

    <?php include_once './includes/footer.php'; ?>
</body>
</html>