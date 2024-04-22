<?php
//1 récupération des variables
$nom 	= $_POST['nom'];
$prenom 	= $_POST['prenom'];
$tel 	= $_POST['tel'];
$email 	= $_POST['email'];
$pass 	= $_POST['password'];
$role 	= $_POST['role'];

//2- connexion au serveur + base de donné
$conn = mysqli_connect('localhost','root','','e-commerce');


$sql = "select * from users where ( email='$email'  or tel='$tel')  ";
//echo $sql;

//4- exécution de la requête
$exec = mysqli_query($conn,$sql);

//5- vérification
$num = mysqli_num_rows($exec);

if($num >= 1){
    header('location:register.php?check=1');
}else{
//3- préparation de la requête
$sql = "INSERT INTO `users`(`nom`, `prenom`, `email`, `motdepasse`, `tel`,`role`) VALUES ('$nom ','$prenom','$email','$pass','$tel','$role')";


//echo $sql;

//4- exécution de la requête
$exec = mysqli_query($conn,$sql);

session_start();
$_SESSION['auth2']=true;

$_SESSION['nom'] = $nom;
$_SESSION['prenom'] = $prenom;
$_SESSION['role'] = $role;

header('location:index.php');
}
?>

