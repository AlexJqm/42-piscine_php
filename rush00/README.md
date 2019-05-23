<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?products">Nos produits</a>
      </li>
	  <?php if ($_SESSION['loggued_on_user'] == null) {?>
      <li class="nav-item">
        <a class="nav-link disabled" href="index.php?register" tabindex="-1" aria-disabled="true">S'inscrire</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="index.php?signin" tabindex="-1" aria-disabled="true">Se connecter</a>
      </li>
	  <? } else {>
		<li class="nav-item">
        	<a class="nav-link disabled" href="index.php?cart" tabindex="-1" aria-disabled="true">Panier</a>
      	</li>
		<li class="nav-item">
        	<a class="nav-link disabled" href="index.php?account" tabindex="-1" aria-disabled="true">Mon Compte</a>
      	</li>
		<li class="nav-item">
        	<a class="nav-link disabled" href="logout.php" tabindex="-1" aria-disabled="true">Se deconnecter</a>
      	</li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<?php
	if (isset($_GET['register']))
		include("register.php");
	if (isset($_GET['signin']))
		include("signin.php");
	if (isset($_GET['cart']))
		include("cart.php");
	if (isset($_GET['account']))
		include("account.php");
	} if (isset($_GET['products']))
		include("products.php");
	cart();
?>
