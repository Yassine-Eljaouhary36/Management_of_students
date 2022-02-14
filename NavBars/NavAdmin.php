<style>
    #navadmin{
        background: #e1f5c4;  /* fallback for old browsers */
        background: linear-gradient(to left, #93F9B9,#B5AC49);
    }
</style>
<nav class="navbar navbar-expand-sm navbar-light " id="navadmin">
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 text-dark">
                    <li class="nav-item pr-3 pt-2">
                        <a class="btn btn-success" href="formAjoute.php" >
                            <b>Ajouter<i class="fa fa-plus pl-2" style="font-size:20px"></i></b>
                        </a>
                    </li>
                    <li class="nav-item pt-2">
                        <a class="btn btn-dark" href="Afficher.php">
                            <b>Etudiant</b> <i class="fa fa-users  pr-2" style="font-size:20px"></i>
                        </a>
                    </li>
                </ul> 
            </div>
            <div class="dropdown show pt-2">
                <a class="btn btn-danger dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user-circle pr-2" ></i><?php echo $_SESSION['email'];?>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="./Library/Logout.php">
                        LogOut<i class="fa fa-sign-out text-danger pl-4" ></i>
                    </a>
                </div>
            </div>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
            
        </nav>