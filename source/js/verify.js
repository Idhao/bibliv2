"use strict";

function valider(){
    var title = document.forms["verify"]["title"].value;
    var isbn = document.forms["verify"]["isbn"].value;
    var year = document.forms["verify"]["year"].value;
    var nbPages = document.forms["verify"]["nbPages"].value;
    var $nbError;
    $nbError = 0;

    //verification du titre
    if(title != ""){
        document.getElementById("title").style.borderColor ="";
    }
    else{
        document.getElementById("title").style.borderColor = "red";
        document.getElementById("titleError").innerHTML="Veuillez saisir un titre";
        $nbError++;
    }
    //verification isbn
    if(isbn != ""){
        document.getElementById("isbn").style.borderColor ="";
    }
    else{
        document.getElementById("isbn").style.borderColor = "red";
        document.getElementById("isbnError").innerHTML="Veuillez saisir un isbn 10";
        $nbError++;
    }
    //verfication de l'année
    if(year != "" && year >= 1600 && year <=2020){
        document.getElementById("year").style.borderColor ="";
    }
    else{
        document.getElementById("year").style.borderColor = "red";
        document.getElementById("yearError").innerHTML="Veuillez saisir une année valide";
        $nbError++;
    }
    //verfication de la saisie de pages
    if((nbPages == "") || (nbPages >=4 && nbPages <= 4000)){
        document.getElementById("nbPages").style.borderColor ="";
    }
    else{
        document.getElementById("nbPages").style.borderColor = "red";
        document.getElementById("nbPagesError").innerHTML="Veuillez saisir un nombre de pages valide";
        $nbError++;
    }
    //verification si il y a des erreurs
    if($nbError == 0){
        return true
    }
    else{
        return false;
    }

}

function passwordVerif(){
    var password = document.forms["inscription"]["motDePasse"].value;
    var confirmation = document.forms["inscription"]["confirmer"].value;
    if(password == confirmation){
        return true;
    }
    else{
        return false
    }
}
