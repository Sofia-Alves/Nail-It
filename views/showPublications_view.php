
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'includes/head.php';?>
    <title> <?= ucFirst($page); ?> Publication</title>
</head>
<body>

      <section>
        <?php foreach($showBloggeuse as $bloggeuse ): ?>

        <article class="photo-card">
          <?php foreach($showAllPublications as $publication): ?>

            <figure class="photo"><a href="" title=""><img src="<?= $showAllPublications['img'];?>"></a></figure>
            <div class="avatar"><img src= "<?= $showProfil['avatar'];?>" alt="avatar"></div>
            <h3 class="author"><?= $showProfil['pseudo'] ;?></h3>
            <datetime class="date">Wed 9 May, 2018</datetime>
            <p class="description"><?= $showAllPublications['description'];?></a></p>
            <div class="like"><button name="like" id="like" value="likeIt">&hearts;</button></div>
            <i><?= $like ?> </i>
            <?php endforeach ; ?>
            </article>
        <?php endforeach; ?> 
        
      </section>
        
