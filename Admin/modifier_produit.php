<?php
include "connexion.php";

$id=$_GET['id'];
//4- exécution de la requête



if(isset($_POST['envoyer'])){
    $libelle        = addslashes($_POST['libelle']);
    $description    = addslashes($_POST['description']);
    $prix       = $_POST['prix'];
    $id_c	= $_POST['id_c'];

    if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
  {
    // get details of the uploaded file 
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    // sanitize file-name 
    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
    // check if file has one of the following extensions 
    $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc');
    if (in_array($fileExtension, $allowedfileExtensions))
    {
      // directory in which the uploaded file will be moved 
      $uploadFileDir = './uploads/';
      $dest_path = $uploadFileDir . $newFileName;
      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $message ='File is successfully uploaded.';
      }
      else 
      {
        $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
      }
    }
    else
    {
      $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
    }

    $sql = "UPDATE `produit` SET `libelle_p`='$libelle',`desc_p`='$description',`image_p`='$newFileName',`prix`='$prix',`id_c`='$id_c' WHERE  id_p=$id ";
  }
  else
  {
    $sql = "UPDATE `produit` SET `libelle_p`='$libelle',`desc_p`='$description',`prix`='$prix',`id_c`='$id_c' WHERE  id_p=$id ";
    $message = 'There is some error in the file upload. Please check the following error.<br>';
    $message .= 'Error:' . $_FILES['uploadedFile']['error'];
  }

   // echo $sql;

    //4- exécution de la requête
    $exec = mysqli_query($conn,$sql);

    header('location:produit.php');
}
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
    data-template="vertical-menu-template-free">

<head>
    <?php include "head.php"; ?>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <?php include "sidebar.php"; ?>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <?php include "navbar.php"; ?>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
<?php


//3- préparation de la requête
$sql = "SELECT * FROM `produit` WHERE id_p =$id ";


//4- exécution de la requête
$exec = mysqli_query($conn,$sql);

 
	 
$array      = mysqli_fetch_array($exec);
  $libelle 	= $array['libelle_p'];
  $desc  = $array['desc_p'];
  $prix    = $array['prix'];
  $image   = $array['image_p'];
  $id_cat   = $array['id_c'];

 

?>
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Métiers/</span> Ajouter</h4>

                        <!-- Basic Layout & Basic with Icons -->
                        <div class="row">
                            <!-- Basic Layout -->
                            <div class="col-xxl">
                                <div class="card mb-4">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h5 class="mb-0">Modifier Produit</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="POST" enctype="multipart/form-data">

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label"
                                                    for="basic-default-name">Libellé</label>
                                                <div class="col-sm-10">
                                                    <input type="text" required class="form-control"
                                                        id="basic-default-name" name="libelle" placeholder="Libellé" value="<?php echo $libelle; ?>" />
                                                </div>
                                            </div>



                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label"
                                                    for="basic-default-message">Description</label>
                                                <div class="col-sm-10">
                                                    <textarea name="description" required id="basic-default-message"
                                                        class="form-control" placeholder="Description"
                                                        aria-label="Description"
                                                        aria-describedby="basic-icon-default-message2"><?php echo $desc; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label"
                                                    for="basic-default-name">Prix</label>
                                                <div class="col-sm-10">
                                                    <input type="text" required class="form-control"
                                                        id="basic-default-name" name="prix" placeholder="Prix" value="<?php echo $prix; ?>"/>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label"
                                                    for="basic-default-name">Categorie</label>
                                                <div class="col-sm-10">
                                                <select class="form-control input-lg" name="id_c">
                                    <option>Choisir une catégorie</option>
                                    <?php

//3- préparation de la requête
$sql_m = "select * from  categorie where id_parent != 0";
//echo $sql;

//4- exécution de la requête
$exec_m = mysqli_query($conn,$sql_m);

 
	 
	while($array_m      = mysqli_fetch_array($exec_m)){
	$libelle_c 	= $array_m['libelle_c'];
    $id_cat      	= $array_m['id_c'];
    if($id_c=$id_cat){$selected="selected='selected'";}else{$selected="";}
 
 

?>
                                    <option value="<?php echo $id_c ; ?>"<?php echo $selected; ?>><?php echo $libelle_c; ?></option>
                                    <?php } ?>
                                </select>

                                                </div>
                                            </div>

                                          


                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label"
                                                    for="basic-default-name">Image</label>
                                                <div class="col-sm-10">
                                                    <input type="file" required class="form-control"
                                                        id="basic-default-name" placeholder="Image"
                                                        name="uploadedFile"/>
                                                </div>
                                            </div>
                                            
                                            <div class="row justify-content-end">
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary"
                                                        name="envoyer">Valider</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                document.write(new Date().getFullYear());
                                </script>
                                , made with ❤️ by
                                <a href="https://themeselection.com" target="_blank"
                                    class="footer-link fw-bolder">ThemeSelection</a>
                            </div>
                            <div>
                                <a href="https://themeselection.com/license/" class="footer-link me-4"
                                    target="_blank">License</a>
                                <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More
                                    Themes</a>

                                <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                                    target="_blank" class="footer-link me-4">Documentation</a>

                                <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                                    target="_blank" class="footer-link me-4">Support</a>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <div class="buy-now">
        <a href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" target="_blank"
            class="btn btn-danger btn-buy-now">Upgrade to Pro</a>
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>