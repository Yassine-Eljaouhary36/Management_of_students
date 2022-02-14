<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etudiants</title>
    <style>
    .Cont-Table{
        max-height:400px;
        overflow-x: auto;
        overflow-y: auto; 

    }
    body{
        background: #1D976C;  
        background: linear-gradient(to left, #93F9B9,#B5AC49); 
    }
    #search{
        float:right;
    }
    #btnsearch{
        background: linear-gradient(to left, #93F9B9,#B5AC49); 
        animation: Animation .4s infinite;  
        border:none;
    }
    @media (max-width: 994px){
        #search{
        float:none;
        margin-bottom:5px;
        }
    }
    @keyframes Animation {
         from {
            box-shadow: 0px 1px 20px 7px #B5AC49, 0 4px 8px rgba(0,0,0,0.7);
        }to{
            box-shadow: 0px 1px 20px 7px #93F9B9, 0 4px 8px rgba(0,0,0,0.7);     
        }
    } 
   
    #btnFermer{
        position:absolute;
        top:0px;
        right:0px;
        color:green;
    }
    </style>
</head>
<?php 
    include("./Connection/connexion.php");
    session_start(); 
    include("./Library/Lib.php");
    ensureIsAuthenticated();
?>
<body>
<?php include("NavBars/Navbar.php")?>
<?php include("NavBars/NavAdmin.php")?>
        


    <div class="container mb-2 mt-3" >
        <?php
        if(IsAuthenticated()){
            echo '<div class="alert alert-success alert dimissible">';
            echo'<b>Login Passed With Success <i class="fa fa-smile-o" style="font-weight:bold;font-size:20px"></i> ! </b>';
            echo 'You Can Close this Window Of Notification .';
            echo '<button id="btnFermer" type="button" class="btn" data-bs-dismiss="alert" aria-label="Close">';
            echo'<i class="fa fa-times"></i> </button></div>';
        }
        ?>
    <div class="card shadow-lg" >
        
        <div class="card-body">
        <form class="form-inline my-2 my-lg-0 " id="search" action="" method="GET">
            <input class="form-control mr-sm-2" type="text" name="text" placeholder="Recherche Par Prénom">
            <button id="btnsearch" class="btn text-dark my-2 my-sm-0" type="submit">
                <i class="fa fa-search text-dark pr-2" ></i><b>Chercher</b>
            </button>
        </form>
        <?php
        include("./Connection/connexion.php");
        $text=isset($_GET['text'])?$_GET['text'] : "";   
        $sql="SELECT * FROM etudiant WHERE prenom LIKE '$text%' ";
        $result=mysqli_query($con,$sql); 
        ?>
            <h4 class="card-title"><i class="fa fa-users text-dark pr-2" style="font-size:34px"></i><b>Etudiants</b></h4>
            <div class="Cont-Table pt-2" >
                <table class="table table-hover table-striped ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Age</th>
                            <th>Editer</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    while($row=mysqli_fetch_array($result)){
                    ?>
                        <tr>
                            <td><b><?php echo$row['id'];?></b></td>
                            <td><b><?php echo strtoupper($row['nom']);?></b></td>
                            <td><b><?php echo strtoupper($row['prenom']);?></b></td>
                            <td><b><?php echo $row['age'];?> ans</b></td>
                            <td ><a href="./update.php/?id=<?php echo $row['id'];?>"><i class="fa fa-pencil-square text-warning" style="font-size:28px"></i></a></td>
                            <td><a href="./delete.php/?id=<?php echo $row['id'];?>"><i class="fa fa-minus-circle text-danger" style="font-size:28px"></i></a></td>
                        </tr>
                        <?php  }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>