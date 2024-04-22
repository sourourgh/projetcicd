<?php 
session_start();
 include_once("fonction-panier.php");
$conn = mysqli_connect('localhost','root','','e-commerce');
$id = $_GET["id"];
$sql= "Select * from produit where id_p=$id";
$query = mysqli_query($conn,$sql);
$num = mysqli_num_rows($query);

	while($array = mysqli_fetch_array($query)){
	$libelle 	    = $array['libelle_p'];
	$prix           = $array['prix'];
	$id_p 	    = $array['id_p'];
	$image_p 	    = $array['image_p'];
 
 


 

    }
 ajouterArticle($id_p,1,$prix);
 header("location:cart.php")
 //var_dump($_SESSION['panier']);
 ?>