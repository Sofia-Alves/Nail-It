
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

      <figure class="photo"><a href="" title=""><img src="<?= $publication['img'];?>"></a></figure>
      <div class="avatar"><img src= "<?= $bloggeuse['avatar'];?>" alt=""></div>
      <h3 class="author"><?= $bloggeuse['firstname'].' '.$bloggeuse['lastname'] ;?></h3>
      <datetime class="date">Wed 9 May, 2018</datetime>
      <p class="description"><?= $publication['description'];?></a></p>
      <div class="like"><button>&hearts;</button></div>
      <?php endforeach ; ?>
      </article>
  <?php endforeach; ?> 
  
</section>
  
