
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once './includes/head.php';?>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title> <?= ucFirst($page); ?> Publication</title>
</head>
<body>
    <?php include_once './includes/header.php'; ?>
    <main>
      <div class="card" style="width: 40rem;">
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="like"><button name="like" id="like" value="likeIt">&hearts;</button></div>
            <i><?php echo 'votre publication a été liké '. $like.' fois!'; ?> </i>
          </div>
        </div>

      <section>
       <article class="photo-card">
          <?php foreach($showAllPublications as $publi): ?>


            <figure class="photo"><a href="profil_view.php" title=""><img src="<?= $publi['img'];?>"></a></figure>
            <div class="avatar"><img src= "<?= $showProfil['avatar'];?>" alt="avatar"></div>
            <h3 class="author"><?= $showProfil['pseudo'] ;?></h3>
            <datetime class="date">Wed 9 May, 2018</datetime>
            <p class="description"><?= $publi['description'];?></a></p>
            <div class="like"><button name="like" id="like" value="likeIt">&hearts;</button></div>
            <i><?= $like ?> </i>
            
        <?php endforeach; ?> 
        </article>
        
      </section>


      </main>
      <?php include_once './includes/footer.php'; ?> 
      </body>
      </html>
        
