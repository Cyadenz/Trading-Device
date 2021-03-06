<nav class="navbar navbar-expand-md bg-white navbar-white">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
      <a class="navbar-nav mr-auto nav-link" href="http://localhost/Location/Accueil.php">D&T</a>
    </div>
    <div class="ml-auto order-0">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/Location/objetfile/views/shopList.php">Boutique</a>
            </li>
            <li class="nav-item">
               <?php 
                  if(isset($_SESSION['userCo'])) {
                    echo "<a href='http://localhost/Location/objetfile/views/create_object_form.php' id='object' class='nav-link'>Prêter</a>";
                  }
                ?>
            </li>
        </ul>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                  <?php
                  if(!isset($_SESSION['userCo']))
                    {?><button class="BtnToA nav-link" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><i class="fas fa-user"></i> Se connecter</button> <?php }
                  elseif(isset($_SESSION['userCo'])) 
                  {
                    ?>
                    <div class="dropdown">
                      <button class="BtnToA dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <?php echo $_SESSION['userCo']->nom." ".$_SESSION['userCo']->prenom." (".$_SESSION['userCo']->pseudo.") "; ?>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="http://localhost/Location/userfile/views/ModifUser.php"><i class="fas fa-user-cog fa-fw"></i> Modifier mon profil</a>

                      <?php
                      if($_SESSION['userCo']->admin)
                        echo "<a href='http://localhost/Location/userfile/views/admin.php' class='dropdown-item'><i class='fas fa-unlock-alt fa-fw'></i> Administration</a>";
                      ?>
                        <a href='http://localhost/Location/locationfile/views/show_location_list.php' id='show_location_list' class='dropdown-item'><i class="fas fa-exchange-alt fa-fw"></i></i> Mes locations</a>
                        <a href='http://localhost/Location/objetfile/views/show_object_list.php' id='show_object_list' class='dropdown-item'><i class="fas fa-laptop fa-fw"></i></i> Mes objets</a>
                        <a href='http://localhost/Location/userfile/auth/logout.php' id='Deconnexion' class='dropdown-item'><i class='fas fa-sign-out-alt fa-fw'></i> Se déconnecter</a>
                      </div>
                    </div>
                    <?php
                  }
                  ?>

            </li>
        </ul>
    </div>
</nav>