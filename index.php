<?php include("./Connection/connexion.php"); ?>
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
            box-shadow: 0px 1px 21px 20px rgba(0,0,0,0.5), 0 10px 10px rgba(0,0,0,0.5);
            animation: mymove 1s cubic-bezier(.25,.3,.7,1);  
            height: 400px;
        }
        #btn{
            animation: Animation 4s infinite; 
        }
        @keyframes mymove {
            from {transform: translateX(300px);}
            to {transform: translateX(0px);}
        }
        @keyframes Animation {
         from {
            box-shadow: 0px 1px 20px 20px #B5AC49, 0 10px 10px rgba(0,0,0,0.7);
        }to{
            box-shadow: 0px 1px 20px 20px #93F9B9, 0 10px 10px rgba(0,0,0,0.7);     
        }
        }  
        #btnFermer{
            position:absolute;
            top:0px;
            right:0px;
            color:red;
        }
    </style>
</head>
<body>
<?php include("NavBars/Navbar.php")?>
<?php
include('./Connection/connexion.php');
session_start();
include("./Library/Lib.php");
if(IsAuthenticated()){
    header("Location:Afficher.php");
    die();
}
if ($_SERVER['REQUEST_METHOD']=="POST") {
$email=$_POST['Email'];
$password=$_POST['Password'];
$sql = "SELECT COUNT(*) FROM `login` WHERE email='$email' AND password ='$password'";
$Result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($Result);
$total = $row[0];
}
?>

            <div class="container"style="Max-width: 750px">
                <div class=" card m-5 mw-50" id="content" >
                    <div class="card-body" >
                        <h4 class="text-center "> <i class="fa fa-lock" style="font-size:24px"></i> Login</h4>
                        <hr style="width: 75%; color: black; height: 1px; background-color:black;" />
                        <?php
                        if ($_SERVER['REQUEST_METHOD']=="POST") {    
                                    if($total!="1"){
                                        echo '<div class="alert alert-danger alert dimissible">';
                                        echo'<b>Login Failed <i class="fa fa-frown-o" style="font-weight:bold;font-size:20px"></i> ! </b>';
                                        echo 'Invalid Email or Password .';
                                        echo '<button id="btnFermer" type="button" class="btn" data-bs-dismiss="alert" aria-label="Close">';
                                        echo'<i class="fa fa-times"></i> </button></div>';
                                    }
                                    if($total =="1"){
                                        $_SESSION['email']=$email;
                                        header("Location:Afficher.php");
                                        die();
                                    }
                            }
                        ?>
                    
                        <form action="" method="POST" onsubmit="return Valide()">
                            <div class="form-group">
                            <label for="Email"><i class="fa fa-envelope mr-1"></i><b> Email</b></label>
                            <input type="Email" name="Email" id="Email" class="form-control" style="border-radius:43px">
                            <div class="mt-1 ml-2" role="alert" id="alert1">
                                <strong id="erreur_E"></strong>
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="Password"><b><i class="fa fa-key mr-1"></i> Password</b></label>
                            <input type="password" name="Password" id="Password" class="form-control" style="border-radius:43px">
                            <div class="mb-3 mt-1 ml-2" role="alert" id="alert2">
                                <strong id="erreur_P"></strong>
                            </div>
                            </div>
                            <button type="submit"class="btn btn-dark btn-block mt-4" style="border-radius:43px" id="btn"><b>Login</b></button>
                            <div class="text-center mt-4">
                                <a href="#" class="Link " style="text-decoration:none;color:black">create account now ?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="JavaScript/ValidationFormLogin.js"></script>

</body>
</html>