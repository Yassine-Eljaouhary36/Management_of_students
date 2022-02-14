var alert1=document.getElementById('alert1');
var alert2=document.getElementById('alert2');
var erreur_Email=document.getElementById('erreur_E');
var erreur_Password=document.getElementById('erreur_P');


const Valide=()=>{
    var email=document.getElementById('Email').value;
    var password=document.getElementById('Password').value;
    //validation de champs "Email" 
    if (email.trim()== ""){
        alert1.classList.add('text-danger'); 
        erreur_Email.innerHTML ='Invalide Email <i class="fa fa-exclamation-triangle"></i>';
        return false;
    }else{
        alert1.classList.remove('text-danger'); 
        alert1.classList.add('text-success'); 
        erreur_Email.innerHTML ='Valide Email <i class="fa fa-exclamation-triangle"></i>';
    }
    //validation de champs "mot de passe " 
    if(password.trim() == ""){
        alert2.classList.add('text-danger'); 
        erreur_Password.innerHTML ='Invalide Password  <i class="fa fa-exclamation-triangle"></i>';
        return false;
    }else{
        alert2.classList.remove('text-danger'); 
        alert2.classList.add('text-success'); 
        erreur_Password.innerHTML ='Valide Password  <i class="fa fa-exclamation-triangle"></i>';
    }
    
};