<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php include_once 'include/header.php';?>
    <div class="container">
        <form method="post" action="" id="article">
            <label for="titre">Title</label><br/>
            <input type="text" name="titre" id="titre" placeholder="title" required/>
            <label for="description">Description</label><br/>
            <textarea name="description" id="description" cols="30" rows="30" placeholder="describe your article here !" required></textarea>
            
            <input type="submit" name="save" value="saved" id="publication"/>
        </form>
        <form action="" method="post" enctype="multipart/form-data">
             <p> 
                <label for="image">Choose a photo for your publication</label>
                <input type="file" name="image" id="image"></br>
                <button type="submit">Upload</button>

            </p>
         </form>
       
        
</body>
<?php include_once("../includes/footer.php") ?>
</html>

