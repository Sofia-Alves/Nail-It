<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once '../includes/head.php'; ?>
    <title><?= ucFirst($page);?>Créer-Profil</title>
</head>
<body>
    <?php include_once './includes/header.php'; ?>
    <main>
       
            <h1>Créer votre profil</h1>
        <div class="container">
            <form action="profil_view.php" method="post">
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
            </form>
            <div class="avatar">
            <form action="profil_view.php" method="post" enctype="multipart/form-data">
                <label for="avatar">télécharger votre avatar:</label>
                <input type="file" name="avatar" id="avatar">
            </form>
            </div>
                <div class="submit">
                    <button class="btn btn-primary" value="enregistrer" name="profil">Enregistrer</button>
                </div>

                <a href="index.php?page=home">Retour à l'acceuil</a>

            

        </div>
    </main>

<<<<<<< HEAD
    <?php include_once '../includes/footer.php'; ?>
=======
    <?php include_once './includes/footer.php'; ?>
>>>>>>> c8570acf70e90d8625a1ad6145088976f577e5dc
</body>
</html>