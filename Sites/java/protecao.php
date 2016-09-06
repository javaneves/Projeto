<?php

 /* Esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço
  * do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer o login, com isso, se ele não estiver
  * feito o login não será criado a SESSION, então ao verificar que a SESSION não existe, a página redireciona o mesmo para a index.php
  */
 
 session_start();
 if(!isset($_SESSION["login"])){ // se não existir o $_SESSION["login"] ...

  /* Usuario nao esta logado, apaga toda a sessao e redireciona para a pagina de login */
   session_unset();
   session_destroy();
   header('Location:index.php');
   exit();
 }
 else{
    /* prenche e disponibiliza o usuario na variavel $logado, estando o usuario logado */
     $logado =  $_SESSION['login'];
 }

?>