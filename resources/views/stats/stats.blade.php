<!DOCTYPE html>

@extends('layouts.app')

@section('content')
<html>
  <head>
    <title>Formulaire d'inscription au forum ASI</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="style.css" rel="stylesheet" type="text/css"  />
  </head>
  <body>
    <header id="top">
      <img id="logo" src="Images/logo-asi.png" alt="ASI" width="125" height="58" />
      <h1>Forum ASI</h1>
    </header>
    <form action="GET" id="formulaire">
      <fieldset>
        <legend>Formulaire d'nscription</legend>
        <label for="name">Nom : </label><input placeholder="Saisissez votre nom"  id="name" name="name" type="text" size="30" />
        <label for="name">Prénom : </label><input placeholder="Saisissez votre prénom"  id="surname" name="surname" type="text" size="30" />
        <label for="email">E-mail : </label><input placeholder="Saisissez votre email" id="email" name="email" type="text" size="30" />
        <hr/>

        <label>Statut : </label>
          <input type="radio" id="enseignant" name="statut" value="enseignant" /><label class="labelradio" for="enseignant"> Enseignant</label>
          <input type="radio"  id="etudiant" name="statut" value="etudiant" /> <label  class="labelradio" for="etudiant"> Étudiant</label><br />
        <label for="annee">Si étudiant, année : </label>
          <select name="annee" id="annee">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select><br />
        <label for="photo">Photo :</label> <input type="file" name="maPhoto" id="photo" />
      </fieldset>
      <input type="submit" />
      <input type="reset" value="Effacer"/>
    </form>
    <footer>
      <script src="scripts/jquery-2.1.4.min.js"></script>
      <script>
        $(document).ready( function(){
          $("#formulaire").prepend('<div id="infobulle"></div>');
          $("#infobulle").prepend('<img id="image" src = "Images/neutre.png" alt="petit perso"/>');
          $("#infobulle").append("<p id='message'></p>")
          $("#infobulle").css('position','absolute');
          $("#infobulle").css('top',250) ;
          $("#infobulle").css('left',400) ;

          $("#message").css('position','relative') ;
          $("#message").css('bottom',100);
          $("#message").css('left',100);

          // $("#formulaire").after('<a href=# id="Neutre"> Neutre </a>');
          // $("#formulaire").after('<a href=# id="Heureux"> Heureux </a>');
          // $("#formulaire").after('<a href=# id= "Triste"> Triste</a>');

          $("#name").focusin(function() {valider(this);});
          //agent('neutre',$("#name").position().top,$("#name").position().left+325,'Je surveille votre entrée');
          $("#surname").focusin(function() {valider(this);});
          //agent('neutre',$("#surname").position().top,$("#surname").position().left+325,'Je surveille votre entrée');
          $("#email").focusin(function() {valider(this);});
          //agent('neutre',$("#email").position().top,$("#email").position().left+325,'Je surveille votre entrée');
          $("#name").keyup(function() {valider(this);});
          $("#surname").keyup(function() {valider(this);});
          $("#email").keyup(function() {valider(this);});

          function valider(champs){

            var x = $(champs).position().top;
            var y = $(champs).position().left+325;
            var val;
            var mess;


            switch( champs.id ){
              case ("name"):
                if($(champs).val()==""){
                    mess='je surveille';
                    val='neutre';
                } else{
                  mess="c'est valide";
                  val='happy';
                }
                break;
              case("surname"):
                if($(champs).val()==""){
                    mess='je surveille';
                    val='neutre';
                } else{
                  mess="c'est valide";
                  val='happy';
                }
                break;
              case("email"):
              if($(champs).val()==""){
                    mess='je surveille';
                    val='neutre';
                }else if (mailvailde($(champs).val())){
                  mess="c'est valide";
                  val='happy';
                } else {
                  mess="mets une vraie adresse";
                  val='sad';
                }
                break;
              }

            agent(val,x,y,mess);
          }

          function mailvailde(email) {
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,6})?$/;
            return emailReg.test(email);
          }


          function agent(valeur,x,y,message){

            var lachaine ="Images/"+valeur+".png";
            $("#image").attr('src',lachaine)

            switch (valeur){
              case("neutre"):
                $('#message').css('background-color','LightGrey');
                break;
              case("happy"):
                $('#message').css('background-color','Green');
                break;
              case("sad"):
                $('#message').css('background-color','Red');
                break;
            }


            $("#infobulle").animate({
              top:x,
              left:y
            })

            $('#message').text(message);

          }


        })
      </script>
    </footer>
  </body>
</html>
