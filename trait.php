<?php
// 1- Récupération des variables
$login 	= $_POST['email'];
$pass 	= $_POST['password'];
// 2- connexion au serveur + base de donné
$conn = mysqli_connect('localhost','root','','e-commerce');

// 3- Prépararyion de la requete
$sql = "Select * from users where email='$login' and motdepasse='$pass' ";

//echo $sql;
// 4- exécution de la requete
$query = mysqli_query($conn,$sql);

// 5-Vérification
$num = mysqli_num_rows($query);
if($num == 1){
	session_start();
	$_SESSION['auth'] = true;

	$array = mysqli_fetch_array($query);
	$nom 	= $array['nom'];
	$prenom = $array['prenom'];

	$_SESSION['nom'] 	= $nom;
	$_SESSION['prenom'] = $prenom;

	header("location:index.php");
	echo "bienvenu sur votre espace admin";
}else{
	header("location:index.php?error=1");
	echo "merci de vérifier vos accès";
}

?>