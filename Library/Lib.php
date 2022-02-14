<?php

function IsAuthenticated(){
    return isset($_SESSION['email']);
}

function ensureIsAuthenticated(){
    if (!IsAuthenticated()) {
       header("Location:index.php");
       die();
    }
}