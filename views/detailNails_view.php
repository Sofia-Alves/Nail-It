<!DOCTYPE html>
<html lang="en">
<head>
     <?php include_once '_includes/head.php'; ?>  
	<title><?= ucFirst($page); ?> - ShopDotCom </title>
</head>
<body>
<?php include_once '_includes/header.php'; ?> 

<main>
        <?php foreach($prodId as $prod) : ?>
          <div class="row  containerSearchDetail" style="display:flex;justify-content:center;padding:0 30px;margin:50px 30px;">
                         <div class="col-sm">    
                               <img src="<?= $prod['img']; ?>" alt="..." height="400" width="400" >
                        </div>
                         <div class="col-sm formsearchText" style="margin-left:30px;">
                             <h3 ><?= ucFirst($prod['nom']); ?></h3>
                             <p ><?= $prod['description']; ?></p>
                             <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
                             <p> Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae</p>
                             <p> Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae</p>
                             <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                             <p ><?= $prod['description']; ?></p>
                             <a class="btn btn-primary" href="index.php?page=product">Retour</a>
                         </div>
                        
                         <div class="formSearchDetail col-sm" style="border:1px solid lightgrey;height=350px;">
                                <h1 style="text-align:center; color:red"><?php echo number_format($prod['prix'],2); ?>€</h1>
                                <h3 style="text-align:center;"><?=$prod['proprietaire'];?> est le propriétaire de ce Produit </h3>
                                 <label for="mail">Your Email:</label>
                                 <input type="email" name="mail" placeholder="put your email">
                                 <label for="message">ecrire votre message</label>
                                 <textarea name="message" id="message" cols="30" rows="10"></textarea>
                                 <button type="submit" name="validMail" value="send"><i class="far fa-enveloppe"></i></button>
                                <h3>
                                <
                              
                                         
                         </div>
                                    
                     </div>
        <?php endforeach; ?>
</main>
</body>
</html>