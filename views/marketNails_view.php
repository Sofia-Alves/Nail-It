<!DOCTYPE html>
<html lang="en">
<head>
     <?php include_once './includes/head.php';?>
    <title><?= ucFirst($page)?> market-nails</title>
</head>
<body>
<?php include_once './includes/header.php';?>
<div class="row mt-5" style="border-bottom:1px solid lightgrey;display:flex;justify-content:center;padding-left:50px;">
     <h2>Vernis</h2>
               <?php foreach($vernis as $produit) : ?>
                    <div class="col-sm">
                    <div class="card mb-3" style="width: 18rem;">
                         <img src="<?= $produit['image']; ?>" class="card-img-top" alt="product" height="200">
                              <div class="card-body">
                                   <h5 class="card-title"><?= $produit['nom']; ?><span class="productPrice"> - <?php echo number_format($produit['prix'],2); ?>€</span></h5>
                                   
                                   <p class="card-text"><?= $produit['description']; ?></p>
                                   <a href="index.php?page=detailnails&voir=<?= $produit['id_produit']; ?>" class="btn btn-primary">voir le produit</a>
                                   
                              </div>
                         </div>
                    </div>
               <?php endforeach; ?>
     </div>
     <div class="row mt-5" style="border-bottom:1px solid lightgrey;display:flex;justify-content:center;padding-left:50px;">
     <h2>Design Tools</h2>
               <?php foreach($designNail as $produit) : ?>
                    <div class="col-sm">
                    <div class="card mb-3" style="width: 18rem;">
                         <img src="<?= $produit['image']; ?>" class="card-img-top" alt="product" height="200">
                              <div class="card-body">
                                   <h5 class="card-title"><?= $produit['nom']; ?><span class="productPrice"> - <?php echo number_format($produit['prix'],2); ?>€</span></h5>
                                   
                                   <p class="card-text"><?= $produit['description']; ?></p>
                                   <a href="index.php?page=detail&voir=<?= $produit['id_produit']; ?>" class="btn btn-primary">voir le produit</a>
                                   
                              </div>
                         </div>
                    </div>
               <?php endforeach; ?>
     </div>
     <div class="row mt-5" style="border-bottom:1px solid lightgrey;display:flex;justify-content:center;padding-left:50px;">
     <h2>Gadgets</h2>
               <?php foreach($gadgets as $produit) : ?>
                    <div class="col-sm">
                    <div class="card mb-3" style="width: 18rem;">
                         <img src="<?= $produit['image']; ?>" class="card-img-top" alt="product" height="200">
                              <div class="card-body">
                                   <h5 class="card-title"><?= $produit['nom']; ?><span class="productPrice"> - <?php echo number_format($produit['prix'],2); ?>€</span></h5>
                                   
                                   <p class="card-text"><?= $produit['description']; ?></p>
                                   <a href="index.php?page=detail&voir=<?= $produit['id_produit']; ?>" class="btn btn-primary">voir le produit</a>
                                   
                              </div>
                         </div>
                    </div>
               <?php endforeach; ?>
     </div>
     
    <?php include_once './includes/footer.php';?>
</body>
</html>