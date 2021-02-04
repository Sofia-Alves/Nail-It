<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="design/styleGeneral.css?<?php echo time(); ?>" />
    <title><?= ucFirst($page);?>Nail-It | Sign Up</title>
</head>
<body>
    <section class="content">
    <h5 class="mb-5" > NEW ACCOUNT</h5>
    <?php if (isset($alertSign)){echo $alertSign;} ?>
    <form action="" class="" method="POST">
        <h2 class="mt-5">Nail-It</h2>
        <h3> Sign Up </h3>
        <div id="firstname">
            <input type = "text" placeholder="First-Name"  name="firstname"/>
        <div id="lastname">
            <input type = "text" placeholder="Last-Name"  name="lastname"/>
        </div>
        <div id="email">
            <input type="email" placeholder="Email" name="email"  />
        </div>
        <div id="password">
            <input type="password" placeholder="Password" name="password"/>
        </div>
        <div id="submit">
            <button type="submit" class="btn btn-primary" name="signup" value="done">Register</button>
        </div>
        <?php echo $accesHome; ?>

    </form>
    </section>
</body>
</html>