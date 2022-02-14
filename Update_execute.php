<?php
session_start();
include("./Library/Lib.php");
ensureIsAuthenticated();
include("./Connection/connexion.php");
$id= $_POST['Id'];
$nom= $_POST['Nom'];
$prenom= $_POST['Prenom'];
$age= $_POST['Age'];
$sql="UPDATE etudiant SET nom='$nom', prenom='$prenom',age=$age WHERE id =$id";
echo $result =mysqli_query($con,$sql);
header("Location:./index.php");
die();
