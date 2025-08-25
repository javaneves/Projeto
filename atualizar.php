<?php
$conn = new mysqli("localhost","root","","formulario_inscricao");

$id = $_POST['id'];
$valor_total = (float)$_POST['valor_total'];
$valor_pago = (float)$_POST['valor_pago'];

// Definir status
if ($valor_pago >= $valor_total) {
    $status = "Pago";
} elseif ($valor_pago > 0 && $valor_pago < $valor_total) {
    $status = "Parcial";
} else {
    $status = "Não Pago";
}

$sql = "UPDATE inscricoes 
        SET valor_total='$valor_total', valor_pago='$valor_pago', status_pagamento='$status'
        WHERE id='$id'";

if ($conn->query($sql)) {
    header("Location: admin.php?msg=Pagamento atualizado com sucesso");
} else {
    echo "Erro: " . $conn->error;
}
?>