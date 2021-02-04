<<<<<<< HEAD

<header>
<div class="menu-top">
    
    <!-- LOGO HERE -->
    <div id="logo" style="height:20px;width:30px;"><img src="./design/logo/logo.png" alt="logo"></div>
        <?php if(isset($_SESSION['firstname']) && isset($_SESSION['lastname'])) : ?>
            <a href="#" class="welcome"><span >Welcome back, <?php echo $_SESSION['firstname']; ?></span></a>
        <?php endif; ?>
        <?php if(isset($_SESSION['firstname']) && isset($_SESSION['lastname'])) : ?>
            
            
            <a class="dropdown dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" id="dropdownMenuLink" href="#" role="button" >MENU</a>
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
=======
<header class= "menu_header">       
    <form class= "search" action="">
        <input  type="text-area" placeholder="search">
    </form>

    
    <nav>
    <div class="bottle-container">
    <div class = "click-to-top">
        <a  class="active tooltip-icon" href="./views/createPublication_view.php"><img src="https://img.icons8.com/pastel-glyph/64/000000/plus--v1.png" class = "icone"><span class="tooltiptext">Create</span></a></nav>
    <div class="click-to-top">  
        <a  class="active tooltip-icon" href="./profil"><img src="./design/image/user.png" class = "icone"><span class="tooltiptext" class="icone">Profil</span> </a> </div>  
        </div>
        </nav>
    
</header>


>>>>>>> c8570acf70e90d8625a1ad6145088976f577e5dc
