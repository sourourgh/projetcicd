<?php
include "connexion.php";
function categoryTree($idp, $parent_id = 0, $sub_mark = ''){
    global $conn;
    $query = $conn->query("SELECT * FROM categorie WHERE id_parent = $parent_id ORDER BY libelle_c ASC");
   
    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
            $idm =$row['id_c'];
            if($idp == $idm){$selected="selected='selected'";}else{$selected="";}
            echo '<option '.$selected.' value="'.$row['id_c'].'">'.$sub_mark.$row['libelle_c'].'</option>';
            categoryTree($idp,$row['id_c'], $sub_mark.'-');
        }
    }
}
$id=$_GET['id'];
if(isset($_POST['envoyer'])){
    $id_parent      = $_POST['id_parent'];
    $libelle        = addslashes($_POST['libelle']);
    
    



    $sql = "UPDATE `categorie` SET `libelle_c`='$libelle',`id_parent`='$id_parent' WHERE  id_c=$id ";
   


    //3- préparation de la requête
    
   // echo $sql;

    //4- exécution de la requête
    $exec = mysqli_query($conn,$sql);

    header('location:categorie.php');
}
?>
<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
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

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Métiers/</span> Modifier</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Modifier Métiers</h5>
                    </div>
                    <div class="card-body">
<?php


//3- préparation de la requête
$sql = "select * from categorie  where id_c=$id ";
//echo $sql;

//4- exécution de la requête
$exec = mysqli_query($conn,$sql);

 
	 
$array      = mysqli_fetch_array($exec);
	$libelle_c	= $array['libelle_c'];

    $id_c       = $array['id_c'];
    $idp       = $array['id_parent'];
 

?>

                      <form action="" method="POST" enctype="multipart/form-data">
                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Catégories</label>
                          <div class="col-sm-10">
                            <select name="id_parent" class="form-control">
                                <option value="0">Catégorie Principale</option>



                                <?php  categoryTree($idp); ?>
                            </select>
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Libellé</label>
                          <div class="col-sm-10">
                            <input type="text" value="<?php echo $libelle_c; ?>" required class="form-control" id="basic-default-name" name="libelle" placeholder="Libellé" />
                          </div>
                        </div>
                       
                       
                       
                      
                       
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary" name="envoyer">Valider</button>
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
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                </div>
                <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
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
      <a
        href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
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
