<?php
include("./Connection/connexion.php");
if ($_SERVER['REQUEST_METHOD']=="POST") {
echo $Nom = $_POST["Nom"];
echo $Prenom = $_POST["Prenom"];
echo $Age = $_POST["Age"];
$sql = "INSERT INTO etudiant  VALUES (NULL,'".$Nom."','".$Prenom."','".$Age."')";
echo $result = mysqli_query($con, $sql);
}
mysqli_close($con);
header("Location:Afficher.php");
exit();

