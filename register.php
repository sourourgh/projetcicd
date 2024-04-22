

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
<?php include "header.php" ?>



<section class="vh-100 bg-image mt-4"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>
              <?php if(isset($_GET['check'])){ ?>
                <p class="mb-4" style="color:red;">Votre compte existe déjà !!!</p>
            <?php }else{ ?>
              <p class="mb-4">Make your app management easy and fun!</p>
                <?php } ?>

              <form form id="formAuthentication" action="ins.php" method="POST">

                <div class="form-outline mb-4">
                Nom:<input type="text" id="form3Example1cg" class="form-control " name="nom"/>
                  <label class="form-label" for="form3Example1cg"  ></label>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1cg"  ></label>
                Prenom:<input type="text" id="form3Example1cg" class="form-control form-control-lg" name="prenom" />
                  
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3cg"></label>
                Email:<input type="email" id="form3Example3cg"  class="form-control form-control-lg" name="email" />
                  
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cg"></label>
                Mot de passe:<input type="password" id="form3Example4cg"  class="form-control form-control-lg" name="pass"/>
                  
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cdg"></label>
                Mobile:<input id="form3Example4cdg"   class="form-control form-control-lg" name="tel" />
                </div>
                <div class="form-outline mb-4">
                <select class="form-control" name="role">
                            <option value="user">user</option>
                        </select>
                </div>

               
                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-danger gradient-custom-4 text-body">Register</button>
                </div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>