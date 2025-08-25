<?php
// Conexão
$conn = new mysqli("localhost", "root", "", "formulario_inscricao");
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Atualização de pagamento
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_pagamento'])) {
    $id = (int)$_POST['id'];
    $valor_total = $_POST['valor_total'];
    $valor_pago = $_POST['valor_pago'];
    $status_pagamento = $_POST['status_pagamento'];

    $sql_update = "UPDATE inscricoes 
                   SET valor_total='$valor_total',
                       valor_pago='$valor_pago',
                       status_pagamento='$status_pagamento'
                   WHERE id=$id";
    $conn->query($sql_update);
}

// Paginação
$limite = 100;
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$offset = ($pagina - 1) * $limite;

// Filtros
$where = "1=1";
if (!empty($_GET['tipo_evento'])) {
    $tipo = $conn->real_escape_string($_GET['tipo_evento']);
    $where .= " AND tipo_evento = '$tipo'";
}
if (!empty($_GET['nome'])) {
    $nome = $conn->real_escape_string($_GET['nome']);
    $where .= " AND nome LIKE '%$nome%'";
}
if (!empty($_GET['idade'])) {
    $idade = $conn->real_escape_string($_GET['idade']);
    $where .= " AND idade = $idade";
}
/*if (!empty($_GET['cargo_igreja'])) {
    $cargo_igreja = $conn->real_escape_string($_GET['cargo_igreja']);
    $where .= " AND cargo_igreja = $cargo_igreja";
}*/


if (!empty($_GET['cargo_igreja'])) {
    $cargo_igreja = $conn->real_escape_string($_GET['cargo_igreja']);
    $where .= " AND cargo_igreja = '$cargo_igreja'";
}

if (!empty($_GET['igreja'])) {
    $igreja = $conn->real_escape_string($_GET['igreja']);
    $where .= " AND igreja = '$igreja'";
}

if (!empty($_GET['endereco'])) {
    $endereco = $conn->real_escape_string($_GET['endereco']);
    $where .= " AND endereco LIKE '%$endereco%'";
}
if (!empty($_GET['data_inscricao'])) {
    $data_inscricao = $conn->real_escape_string($_GET['data_inscricao']);
    $where .= " AND DATE(data_hora_inscricao) = '$data_inscricao'";
}
if (!empty($_GET['data_nascimento'])) {
    $data_nascimento = $conn->real_escape_string($_GET['data_nascimento']);
    $where .= " AND data_nascimento = '$data_nascimento'";
}
if (!empty($_GET['status_pagamento'])) {
    $status = $conn->real_escape_string($_GET['status_pagamento']);
    $where .= " AND status_pagamento = '$status'";
}

// Consulta principal
$sql = "SELECT * FROM inscricoes WHERE $where ORDER BY id ASC LIMIT $limite OFFSET $offset";
$result = $conn->query($sql);

// Contagem total para paginação
$sql_total = "SELECT COUNT(*) as total FROM inscricoes WHERE $where";
$total_result = $conn->query($sql_total);
$total_registros = $total_result->fetch_assoc()['total'];
$total_paginas = ceil($total_registros / $limite);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Painel do Administrador</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
<div class="container mt-4">
  <h2 class="mb-4 text-center">Painel do Administrador</h2>

  <!-- Filtros -->
  <form method="get" class="row g-3 mb-4">
    <div class="col-md-2"><label>Nome</label><input type="text" name="nome" class="form-control" value="<?= $_GET['nome'] ?? '' ?>"></div>
	<div class="col-md-2"><label>Cargo Eclesiástico</label><input type="text" name="cargo_igreja" class="form-control" value="<?= $_GET['cargo_igreja'] ?? '' ?>"></div>
	<div class="col-md-2"><label>Igreja</label><input type="text" name="igreja" class="form-control" value="<?= $_GET['igreja'] ?? '' ?>"></div>
    <div class="col-md-2"><label>Idade</label><input type="number" name="idade" class="form-control" value="<?= $_GET['idade'] ?? '' ?>"></div>
	<div class="col-md-2"><label>Endereço</label><input type="text" name="endereco" class="form-control" value="<?= $_GET['endereco'] ?? '' ?>"></div>
    <div class="col-md-2"><label>Data Inscrição</label><input type="date" name="data_inscricao" class="form-control" value="<?= $_GET['data_inscricao'] ?? '' ?>"></div>
    <div class="col-md-2"><label>Data Nascimento</label><input type="date" name="data_nascimento" class="form-control" value="<?= $_GET['data_nascimento'] ?? '' ?>"></div>
    <div class="col-md-2"><label>Tipo de Evento</label>
      <select name="tipo_evento" class="form-control">
        <option value="">Todos</option>
        <option value="Metanoia">Metanoia</option>
        <option value="Encontro com DEUS">Encontro com DEUS</option>
        <option value="Peniel">Peniel</option>
        <option value="Arcampamento">Arcampamento</option>
        <option value="Outros">Outros</option>
      </select>
    </div>
    <div class="col-md-2"><label>Status Pagamento</label>
      <select name="status_pagamento" class="form-control">
        <option value="">Todos</option>
        <option value="Não Pago">Não Pago</option>
        <option value="Parcial">Parcial</option>
        <option value="Pago">Pago</option>
      </select>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">🔍 Pesquisar</button>
      <a href="admin.php" class="btn btn-secondary">Limpar</a>
    </div>
  </form>

  <!-- Tabela -->
  <div class="table-responsive">
    <table class="table table-striped table-hover">
      <thead class="table-dark">
        <tr>
          <th>ID</th><th>Nome</th><th>Cargo Eclesiástico</th><th>Igreja</th><th>Tipo Evento</th><th>Idade</th><th>Data Nasc.</th>
          <th>Telefone</th><th>Pagamento</th><th>Valor Pago</th><th>Valor Total</th><th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?= $row['id'] ?></td>
          <td><?= $row['nome'] ?></td>
		  <td><?= $row['cargo_igreja'] ?></td>
		  <td><?= $row['igreja'] ?></td>
          <td><?= $row['tipo_evento'] ?></td>
          <td><?= $row['idade'] ?></td>
          <td><?= $row['data_nascimento'] ?></td>
          <td><?= $row['telefone'] ?></td>
          <td>
            <?php
              if ($row['status_pagamento'] == 'Pago') {
                  echo "<span class='badge bg-success'>Pago</span>";
              } elseif ($row['status_pagamento'] == 'Parcial') {
                  echo "<span class='badge bg-warning text-dark'>Parcial</span>";
              } else {
                  echo "<span class='badge bg-danger'>Não Pago</span>";
              }
            ?>
          </td>
          <td>R$ <?= number_format($row['valor_pago'], 2, ',', '.') ?></td>
          <td>R$ <?= number_format($row['valor_total'], 2, ',', '.') ?></td>
          <td>
            <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#pagamentoModal<?= $row['id'] ?>">💰 Pagamento</button>
			
		  
		  <!-- Botão editar informações completas -->
		 <td> <a href="editar.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">✏ Editar</a></td>

		  <!-- Botão excluir -->
		  <td><a href="excluir.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Excluir registro?')">🗑 Excluir</a></td>
		
            
          </td>
        </tr>

        <!-- Modal Pagamento -->
        <div class="modal fade" id="pagamentoModal<?= $row['id'] ?>" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <form method="post">
                <div class="modal-header">
                  <h5 class="modal-title">Atualizar Pagamento - <?= htmlspecialchars($row['nome']) ?></h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                  <input type="hidden" name="id" value="<?= $row['id'] ?>">
                  <div class="mb-3">
                    <label>Valor Total</label>
                    <input type="number" step="0.01" name="valor_total" class="form-control" value="<?= $row['valor_total'] ?>">
                  </div>
                  <div class="mb-3">
                    <label>Valor Pago</label>
                    <input type="number" step="0.01" name="valor_pago" class="form-control" value="<?= $row['valor_pago'] ?>">
                  </div>
                  <div class="mb-3">
                    <label>Status</label>
                    <select name="status_pagamento" class="form-control">
                      <option <?= $row['status_pagamento']=='Não Pago'?'selected':'' ?>>Não Pago</option>
                      <option <?= $row['status_pagamento']=='Parcial'?'selected':'' ?>>Parcial</option>
                      <option <?= $row['status_pagamento']=='Pago'?'selected':'' ?>>Pago</option>
                    </select>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" name="update_pagamento" class="btn btn-primary">💾 Salvar</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>

  <!-- Paginação -->
  <nav>
    <ul class="pagination">
      <?php for ($i = 1; $i <= $total_paginas; $i++): ?>
        <li class="page-item <?= $i == $pagina ? 'active' : '' ?>">
          <a class="page-link" href="?pagina=<?= $i ?>"><?= $i ?></a>
        </li>
      <?php endfor; ?>
    </ul>
  </nav>
</div>
</body>
</html>