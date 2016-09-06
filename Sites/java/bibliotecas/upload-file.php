<?php
session_start();
$uploaddir = '../demos/'.$_SESSION["demo_foco"].'/imagens/'; 
$file = $uploaddir . basename($_FILES['uploadfile']['name']); 
 
if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file)) { 
  echo "success"; 
} else {
	echo "error";
}
?>