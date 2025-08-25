<?php
// Conexão
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulario_inscricao";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Erro: " . $conn->connect_error); }

// Se o formulário foi enviado (UPDATE)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);
    $nome = $conn->real_escape_string($_POST['nome']);
    $cpf = $conn->real_escape_string($_POST['cpf']);
	$cargo_igreja = $conn->real_escape_string($_POST['cargo_igreja']);
    $cidade = $conn->real_escape_string($_POST['cidade']);
    $estado = $conn->real_escape_string($_POST['estado']);
    $igreja = $conn->real_escape_string($_POST['igreja']);
    $tipo_evento = $conn->real_escape_string($_POST['tipo_evento']);
	
	
	
	$status_pagamento = $conn->real_escape_string($_POST['status_pagamento']);


    $sql = "UPDATE inscricoes SET 
                nome='$nome', 
                cpf='$cpf', 
				cargo_igreja='$cargo_igreja',
                cidade='$cidade', 
                estado='$estado', 
                igreja='$igreja', 
                tipo_evento='$tipo_evento'
            WHERE id=$id";








    if ($conn->query($sql)) {
        header("Location: admin.php?msg=Registro atualizado com sucesso!");
        exit;
    } else {
        echo "Erro: " . $conn->error;
    }
}

// Carregar dados para edição
$id = intval($_GET['id']);
$sql = "SELECT * FROM inscricoes WHERE id=$id";
$result = $conn->query($sql);
$dados = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Editar Registro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
  <h2>Editar Registro</h2>
  <form method="POST">
    <input type="hidden" name="id" value="<?= $dados['id'] ?>">

    <div class="mb-3">
      <label>Nome</label>
      <input type="text" name="nome" class="form-control" value="<?= $dados['nome'] ?>" required>
    </div>

    <div class="mb-3">
      <label>CPF</label>
      <input type="text" name="cpf" class="form-control" value="<?= $dados['cpf'] ?>" required>
    </div>

	<div class="mb-3">
      <label>Cargo Eclesiástico</label>
      <input type="text" name="cargo_igreja" class="form-control" value="<?= $dados['cargo_igreja'] ?>" required>
    </div>

    <div class="mb-3">
      <label>Cidade</label>
      <input type="text" name="cidade" class="form-control" value="<?= $dados['cidade'] ?>">
    </div>

    <div class="mb-3">
      <label>Estado</label>
      <input type="text" name="estado" class="form-control" value="<?= $dados['estado'] ?>">
    </div>

    <div class="mb-3">
      <label>Igreja</label>
      <input type="text" name="igreja" class="form-control" value="<?= $dados['igreja'] ?>">
    </div>

    <div class="mb-3">
      <label>Tipo De Evento</label>
      <select name="tipo_evento" class="form-select">
        <option <?= ($dados['tipo_evento']=="Metanoia")?"selected":"" ?>>Metanoia</option>
        <option <?= ($dados['tipo_evento']=="Encontro com DEUS")?"selected":"" ?>>Encontro com DEUS</option>
        <option <?= ($dados['tipo_evento']=="Peniel")?"selected":"" ?>>Peniel</option>
        <option <?= ($dados['tipo_evento']=="Arcampamento")?"selected":"" ?>>Arcampamento</option>
        <option <?= ($dados['tipo_evento']=="Outros")?"selected":"" ?>>Outros</option>
      </select>
    </div>
	
	
	
	<input type="hidden" name="id" value="<?= $dados['id'] ?>">
    
  
    
    <!--<div class="mb-3">
        <label>Valor Pago</label>
        <input type="text" class="form-control" name="valor_pago" value="<?= $dados['valor_pago'] ?>" disabled>
    </div>-->

   <!-- <button type="submit" class="btn btn-primary">💾 Atualizar Pagamento</button>-->
	
	

    <button type="submit" class="btn btn-success">Salvar Alterações</button>
    <a href="admin.php" class="btn btn-secondary">Cancelar</a>
  </form>
</div>
</body>
</html>