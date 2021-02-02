<!DOCTYPE html>
<html lang="en">
<head>
  <?php include_once './includes/head.php';?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title><?= ucFirst($page);?> Market-Nails</title>
</head>
<body>
 <?php include_once './includes/header.php'; ?>
    <div class="row mt-5" style="border-bottom:1px solid lightgrey;display:flex;justify-content:center;padding-left:50px;">
        <h2>MES VERNIS</h2>
          <?php foreach($vernis as $produit): ?>
            <div class="col-sm">
            <div class="card mb-3" style="width:18rem;">
                <img src="<?=$produit['image'];?>"class="card-img-top" alt="nails" height="200">
                    <div class="card-body">
                             <h5 class="card-title" ><?= $produit['nom']; ?><span class="prix"> - <?php echo number_format($produit['prix'],2); ?>€</span></h5>
                                   
                                   <p class="card-text"><?= $produit['description']; ?></p>
                                   <a href="index.php?page=detailNails&voir=<?= $produit['id_produit']; ?>" class="btn btn-primary">voir le produit</a>
                                   
                              </div>
                         </div>
                    </div>
               <?php endforeach; ?>
     </div>
          
          <div class="row mt-5" style="border-bottom:1px solid lightgrey;display:flex;justify-content:center;padding-left:50px;">
          <h2>DESIGN-TOOLS</h2>
               <?php foreach($designTools as $produit) : ?>
                    <div class="col-sm">
                    <div class="card mb-3" style="width: 18rem;">
                         <img src="<?= $produit['image']; ?>" class="card-img-top" alt="product" height="200">
                              <div class="card-body">
                                   <h5 class="card-title"><?= $produit['nom']; ?><span class="prix"> - <?php echo number_format($produit['price'],2); ?>€</span></h5>
                                   
                                   <p class="card-text"><?= $produit['description']; ?></p>
                                   <a href="index.php?page=detailNails&voir=<?= $produit['id_produit']; ?>" class="btn btn-primary">voir le produit</a>
                                   
                              </div>
                         </div>
                    </div>
               <?php endforeach; ?>
            
          </div>
          <div>
          <div class="row mt-5" style="border-bottom:1px solid lightgrey;display:flex;justify-content:center;padding-left:50px;">
          <h2>GADGETS</h2>
               <?php foreach($gadgets as $produit) : ?>
                    <div class="col-sm">
                    <div class="card mb-3" style="width: 18rem;">
                         <img src="<?= $produit['image']; ?>" class="card-img-top" alt="product" height="200">
                              <div class="card-body">
                                   <h5 class="card-title"><?= $produit['nom']; ?><span class="prix"> - <?php echo number_format($produit['prix'],2); ?>€</span></h5>
                                   
                                   <p class="card-text"><?= $produit['description']; ?></p>
                                   <a href="index.php?page=detailNails&voir=<?= $produit['id_produit']; ?>" class="btn btn-primary">voir le produit</a>
                                   
                              </div>
                         </div>
                    </div>
               <?php endforeach; ?>
          </div>

    </div>

    
</body>
</html>