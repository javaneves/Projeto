<?php 
// session_start inicia a sessão
session_start();

// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
//$con = mysql_connect("127.0.0.1", "root", "digite a senha do banco aqui") or die ("Sem conexão com o servidor");
//$select = mysql_select_db("server") or die("Sem acesso ao DB, Entre em contato com o Administrador, gilson_sales@bytecode.com.br");

// A vriavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
//$result = mysql_query("SELECT * FROM `USUARIO` WHERE `NOME` = '$login' AND `SENHA`= '$senha'");

/* Verifica o usuario e senha informado */
if(( $_POST['login'] <> "1") || ($_POST['senha']<> "1") ){
     /*  Usuario e senha invalido, redireciona para a pagina de login  */
      $_SESSION["erro"] = 'Usuário e/ou senha inválidos';
      header('Location:index.php');
}
else{
     // Usuario e senha corretos, armazena na sessao o usuario e redireciona para a pagina principal
   $_SESSION['login'] = $_POST['login'];
	header('Location:logado.php');
}
?>