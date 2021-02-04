<header>
<div class="menu-top">
    
    <!-- LOGO HERE -->
    <div id="logo"><img src="./design/logo/logo.png" alt="logo"></div>
        <?php if(isset($_SESSION['nom']) && isset($_SESSION['prenom'])) : ?>
            <a href="#" class="welcome"><span >Welcome back, <?php echo $_SESSION['prenom']; ?></span></a>
        <?php endif; ?>
        <?php if(isset($_SESSION['firstname']) && isset($_SESSION['lastname'])) : ?>
            
            
            <a class="dropdown dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" id="dropdownMenuLink" href="#" role="button" >Mes infos</a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="index.php?page=profil">Mon Profil</a></li>
                    <li><a class="dropdown-item" href="index.php?page=showpublications">Mes Publications</a></li>
                    <li><a class="dropdown-item" href="index.php?page=marketnails">Market-Nails</a></li>
                    
            </ul>
            
            

            <?php echo '<a href="index.php?page=logout">Déconnexion/'.$_SESSION['firstname']. '</a>'; ?>
            
        <?php else : ?>
            
           <a  href="index.php?page=login">Connexion</a>
        <?php endif; ?>
        <nav>
           <ul>
              <li><input type="text-area" placeholder="search"></li>
              <li><a href="index.php?page=showpublications"><img src="https://img.icons8.com/pastel-glyph/64/000000/plus--v1.png" onclick= "./publications" /></a></li>
              <li><a href="index.php?page=contact"><img src="./design/image/user.png" onclick= "./contact"></a></li>
              <li> <a  class="cartLink" href="index.php?page=marketnails"><i class="fas fa-shopping-cart"></i></a></li>
            </ul>
        </nav>
    
    </div>
</header>