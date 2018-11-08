<?php 
  $email = $_POST['email'];
  $entrar = $_POST['entrar'];
  $senha = md5($_POST['senha']);
  $connect = mysql_connect('nome_do_servidor','nome_de_usuario','senha');
  $db = mysql_select_db('nome_do_banco_de_dados');
    if (isset($entrar)) {
             
      $verifica = mysql_query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'") or die("Erro ao selecionar");
        if (mysql_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('E-mail e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("login",$email);
          header("Location:home-log.php");
        }
    }
?>
