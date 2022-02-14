var alert1=document.getElementById('alert1');
var alert2=document.getElementById('alert2');
var alert3=document.getElementById('alert3');
var erreur_Nom=document.getElementById('erreur_N');
var erreur_Prenom=document.getElementById('erreur_P');
var erreur_Age=document.getElementById('erreur_A');

const al=()=>{
    var nom=document.getElementById('nom').value;
    var prenom=document.getElementById('prenom').value;
    var age=document.getElementById('age').value;
    
    if (nom.trim()== ""){
        alert1.classList.add('text-danger'); 
        erreur_Nom.innerHTML ='Invalide Nom <i class="fa fa-exclamation-triangle"></i>';
        return false;
    }else{
        erreur_Nom.innerHTML ="";
    }
    if(prenom.trim() == ""){
        alert2.classList.add('text-danger'); 
        erreur_Prenom.innerHTML ='Invalide prenom  <i class="fa fa-exclamation-triangle"></i>';
        return false;
    }else{
        erreur_Prenom.innerHTML ="";
    }
    if (age.trim()== ""){
        alert3.classList.add('text-danger');
        erreur_Age.innerHTML ='Invalide age <i class="fa fa-exclamation-triangle"></i>'; 
        return false;
    }else{
        erreur_Age.innerHTML ="";
    }
    

   
};