<?php
// Conexão
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulario_inscricao";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Erro: " . $conn->connect_error); }

$id = intval($_GET['id']);
$sql = "DELETE FROM inscricoes WHERE id=$id";

if ($conn->query($sql)) {
    header("Location: admin.php?msg=Registro excluído com sucesso!");
    exit;
} else {
    echo "Erro: " . $conn->error;
}
$conn->close();
?>