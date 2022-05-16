<?php
session_start();
if (isset($_SESSION['login'])&& isset($_SESSION['pass'])) {
    //On autorise l'accès à cette page membre
    
  }else{
    //On redirige le visiteur vers la page d'accueil
    header("refresh:0;url=index.php");
  }


require('tpl/header.html'); 
?>
        <div>
            <h1>Hello </h1>
        </div>


<?php require('tpl/footer.html'); ?>