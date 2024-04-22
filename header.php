<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>ThewayShop - Ecommerce Bootstrap 4 HTML Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>   
   
   
   <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Product</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Top</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li>
                                                    <?php

$sql_c = "select * from categorie where libelle_c='jackets'";

$exec_c = mysqli_query($conn,$sql_c);
$array_c      = mysqli_fetch_array($exec_c);
$libelle_c 	= $array_c['libelle_c'];
$id_c 	= $array_c['id_c'];


?><a href="produit_details.php?id=<?php echo $id_c; ?>"><?php echo $libelle_c?></li>
                                                    <li><?php

$sql_c = "select * from categorie where libelle_c='Shirts'";

$exec_c = mysqli_query($conn,$sql_c);
$array_c      = mysqli_fetch_array($exec_c);
$libelle_c 	= $array_c['libelle_c'];
$id_c 	= $array_c['id_c'];


?><a href="produit_details.php?id=<?php echo $id_c; ?>"><?php echo $libelle_c?></a></li>
                                                    <li><a href="shop.html">Sweaters & Cardigans</a></li>
                                                    <li><?php

$sql_c = "select * from categorie where libelle_c='T-shirts'";

$exec_c = mysqli_query($conn,$sql_c);
$array_c      = mysqli_fetch_array($exec_c);
$libelle_c 	= $array_c['libelle_c'];
$id_c 	= $array_c['id_c'];


?><a href="produit_details.php?id=<?php echo $id_c; ?>"><?php echo $libelle_c?></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Bottom</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><?php

$sql_c = "select * from categorie where libelle_c='swimwear'";

$exec_c = mysqli_query($conn,$sql_c);
$array_c      = mysqli_fetch_array($exec_c);
$libelle_c 	= $array_c['libelle_c'];
$id_c 	= $array_c['id_c'];


?><a href="produit_details.php?id=<?php echo $id_c; ?>"><?php echo $libelle_c?></a></li>
                                                    <li><?php

$sql_c = "select * from categorie where libelle_c='skirts'";

$exec_c = mysqli_query($conn,$sql_c);
$array_c      = mysqli_fetch_array($exec_c);
$libelle_c 	= $array_c['libelle_c'];
$id_c 	= $array_c['id_c'];


?><a href="produit_details.php?id=<?php echo $id_c; ?>"><?php echo $libelle_c?></a></li>
                                                    <li><?php

$sql_c = "select * from categorie where libelle_c='jeans'";

$exec_c = mysqli_query($conn,$sql_c);
$array_c      = mysqli_fetch_array($exec_c);
$libelle_c 	= $array_c['libelle_c'];
$id_c 	= $array_c['id_c'];


?><a href="produit_details.php?id=<?php echo $id_c; ?>"><?php echo $libelle_c?></a></li>
                                                    <li><?php

$sql_c = "select * from categorie where libelle_c='Trousers'";

$exec_c = mysqli_query($conn,$sql_c);
$array_c      = mysqli_fetch_array($exec_c);
$libelle_c 	= $array_c['libelle_c'];
$id_c 	= $array_c['id_c'];


?><a href="produit_details.php?id=<?php echo $id_c; ?>"><?php echo $libelle_c?></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Clothing</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><?php

$sql_c = "select * from categorie where libelle_c='top wear'";

$exec_c = mysqli_query($conn,$sql_c);
$array_c      = mysqli_fetch_array($exec_c);
$libelle_c 	= $array_c['libelle_c'];
$id_c 	= $array_c['id_c'];


?><a href="produit_details.php?id=<?php echo $id_c; ?>"><?php echo $libelle_c?></a></li>
                                                    <li><?php

$sql_c = "select * from categorie where libelle_c='party wear'";

$exec_c = mysqli_query($conn,$sql_c);
$array_c      = mysqli_fetch_array($exec_c);
$libelle_c 	= $array_c['libelle_c'];
$id_c 	= $array_c['id_c'];


?><a href="produit_details.php?id=<?php echo $id_c; ?>"><?php echo $libelle_c?></a></li>
                                                    <li><?php

$sql_c = "select * from categorie where libelle_c='bottom wear'";

$exec_c = mysqli_query($conn,$sql_c);
$array_c      = mysqli_fetch_array($exec_c);
$libelle_c 	= $array_c['libelle_c'];
$id_c 	= $array_c['id_c'];


?><a href="produit_details.php?id=<?php echo $id_c; ?>"><?php echo $libelle_c?></a></li>
                                                    <li><?php

$sql_c = "select * from categorie where libelle_c='indian wear'";

$exec_c = mysqli_query($conn,$sql_c);
$array_c      = mysqli_fetch_array($exec_c);
$libelle_c 	= $array_c['libelle_c'];
$id_c 	= $array_c['id_c'];


?><a href="produit_details.php?id=<?php echo $id_c; ?>"><?php echo $libelle_c?></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Accessories</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><?php

$sql_c = "select * from categorie where libelle_c='bags'";

$exec_c = mysqli_query($conn,$sql_c);
$array_c      = mysqli_fetch_array($exec_c);
$libelle_c 	= $array_c['libelle_c'];
$id_c 	= $array_c['id_c'];


?><a href="produit_details.php?id=<?php echo $id_c; ?>"><?php echo $libelle_c?></a></li>
                                                    <li><?php

$sql_c = "select * from categorie where libelle_c='sunglasses'";

$exec_c = mysqli_query($conn,$sql_c);
$array_c      = mysqli_fetch_array($exec_c);
$libelle_c 	= $array_c['libelle_c'];
$id_c 	= $array_c['id_c'];


?><a href="produit_details.php?id=<?php echo $id_c; ?>"><?php echo $libelle_c?></a></li>
                                                    <li><?php

$sql_c = "select * from categorie where libelle_c='fragrances'";

$exec_c = mysqli_query($conn,$sql_c);
$array_c      = mysqli_fetch_array($exec_c);
$libelle_c 	= $array_c['libelle_c'];
$id_c 	= $array_c['id_c'];


?><a href="produit_details.php?id=<?php echo $id_c; ?>"><?php echo $libelle_c?></a></li>
                                                    <li><?php

$sql_c = "select * from categorie where libelle_c='wallets'";

$exec_c = mysqli_query($conn,$sql_c);
$array_c      = mysqli_fetch_array($exec_c);
$libelle_c 	= $array_c['libelle_c'];
$id_c 	= $array_c['id_c'];


?><a href="produit_details.php?id=<?php echo $id_c; ?>"><?php echo $libelle_c?></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                    </div>
                                    <!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
                                <li><a href="cart.php">Cart</a></li>
                                <li><a href="checkout.php">Checkout</a></li>
                                <li><a href="shop-detail.html">Shop Detail</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="service.html">Our Service</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li ><a href="login.php"><i class="fas fa-user"></i></a></li>
                        <li class="side-menu"><a href="#">
						<i class="fa fa-shopping-bag"></i>
                        
                            <span class="badge">3</span>
					</a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    
                    <ul class="cart-list">
                    <?php
    if (creationPanier())
    {
		
        $nbArticles=count($_SESSION['panier']['id_p']);
        if ($nbArticles <= 0)
        echo "<tr><td>Votre panier est vide </ td></tr>";
        else
        {
            for ($i=0 ;$i < $nbArticles ; $i++)
            {
				 $id = $_SESSION['panier']['id_p'][$i];
				$sql= "Select * from produit where id_p=$id";
$query = mysqli_query($conn,$sql);
$num = mysqli_num_rows($query);

	while($array = mysqli_fetch_array($query)){
	$libelle 	    = $array['libelle_p'];
	$prix           = $array['prix'];
	$id_p 	    = $array['id_p'];
    $image_p 	    = $array['image_p'];
	}

				?>
                        <li>
                            <a href="#" class="photo"><img src="./Admin/uploads/<?php echo $image_p; ?>" class="cart-thumb" alt="" style="width:50px;height:60px;"/></a>
                            <h6><a href="#"><?php echo $libelle; ?> </a></h6>
                            <p><span class="price">$<?php echo $_SESSION['panier']['prixProduit'][$i];?></span></p>
                        </li>

                        <li class="total">
                            <a href="cart.php" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: $<?php echo MontantGlobal();?></span>
                        </li>
                    </ul>
                    <?php } } }?>
                </li>
                

            </div>

                 <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/8.webp">
                
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="logout.php">Log Out</a></li>
                    </ul>
                 </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->