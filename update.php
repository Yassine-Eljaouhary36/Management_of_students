<?php
session_start(); 
include("./Library/Lib.php");
ensureIsAuthenticated();
include("./Connection/connexion.php");
$id= $_GET['id'];
$sql="SELECT * FROM etudiant WHERE id =$id ";
$result=mysqli_query($con,$sql);
$row= mysqli_fetch_array($result);
$nom= $row[1];
$prenom= $row[2];
$age= $row[3];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: #1D976C;  /* fallback for old browsers */
            background: linear-gradient(to left, #93F9B9,#B5AC49); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        #content{
            background: #1D976C;  /* fallback for old browsers */
            background: linear-gradient(to left, #EDDE5D,#93F9B9);
            box-shadow: 0 14px 28px rgba(0,0,0,0.5), 0 10px 10px rgba(0,0,0,0.5);
            transition: all 0.5s cubic-bezier(.25,.8,.25,1);
            cursor:pointer;
            transform: rotate(4deg);
        }
        #content:hover {
        box-shadow: 0 14px 28px rgb(0 255 210), 0 10px 10px rgb(0 0 0);
        transform: rotate(0deg);
        }
    </style>
</head>
<body>
<?php include("NavBars/Navbar_update.php")?>
<?php include("NavBars/NavBarUpdate.php")?>
<div class="container">
   <div class="card m-5" id="content">
       <div class="card-body">
           <h4 class="card-title"><i class="fa fa-plus-circle text-warning" style="font-size:34px"></i> Modification</h4>
           <form action="../Update_execute.php" method="POST" onsubmit="return al()">
                <div class="form-group">
                <label for=""><b>Nom</b></label>
                <input type="hidden" name="Id" value="<?php echo $id;?>">
                <input type="text" name="Nom" id="nom" class="form-control" style="border-radius:43px" value="<?php echo $nom;?>">
                <div  role="alert" id="alert1">
                    <strong id="erreur_N"></strong>
                </div>
                </div>
                <div class="form-group">
                <label for=""><b>Prénom</b></label>
                <input type="text" name="Prenom" id="prenom" class="form-control" style="border-radius:43px" value="<?php echo $prenom;?>">
                <div  role="alert" id="alert2">
                    <strong id="erreur_P"></strong>
                </div>
                </div>
                <div class="form-group">
                <label for=""><b>Age</b></label>
                <input type="text" name="Age" id="age" class="form-control" style="border-radius:43px" value="<?php echo $age;?>">
                <div role="alert" id="alert3">
                    <strong id="erreur_A"></strong>
                </div>
                </div>
                <button type="submit" class="btn btn-warning btn-block mt-4" style="border-radius:43px"><b>Modifier</b>  <i class='fa fa-pencil'></i></button>
                
            </form>
       </div>
   </div>
</div>

<script src="JavaScript/ValidationFormAjout.js"></script>
</body>
</html>