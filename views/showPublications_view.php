<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'includes/head.php';?>
    <title>Publication</title>
</head>
<body>
<?php include_once './classes/Bloggeuse.php'; ?>
<?php include_once './classes/Publication.php'; ?>




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
=======

<section>
<h2>Responsive card sections</h2>
<p>Resize below 640px to see content ordering change.</p>

  <article class="photo-card">
    <figure class="photo"><a href="" title=""><img src="https://placehold.it/800x400/ff66d6/ff66d6" alt=""></a></figure>
    <div class="avatar"><img src="https://placehold.it/64x64/ff66d6/ff66d6" alt=""></div>
    <h3 class="author">Author Name</h3>
    <datetime class="date">Wed 9 May, 2018</datetime>
    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
      <a href="" title="" class="fade-text">minim veniam.</a></p>
    <div class="like"><button>&hearts;</button></div>
>>>>>>> 31e4e6c3db8b4a3cf50bb0983acd95cb0c58349f
  </article>
  <?php endforeach; ?> 
  
</section>
  
