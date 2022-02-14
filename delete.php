<?php

include('./Connection/connexion.php');
$sql="DELETE FROM etudiant WHERE id ={$_GET['id']}";
mysqli_query($con,$sql);
header("Location:../Afficher.php");
mysqli_close($con);
exit();