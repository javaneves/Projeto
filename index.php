<?php
// index.php
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Formulário De Inscrição</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

  <!-- Fonte Poppins -->
  <link href="../imagens/logo.png" rel="stylesheet">

  <style>
    body {
      background: #f5f7fa;
      font-family: 'Poppins', sans-serif;
    }
    .banner {
      background: url(../imagens/logo.png) no-repeat center center;
      background-size: cover;
      height: 280px;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      text-shadow: 2px 2px 5px rgba(0,0,0,0.6);
    }
    .banner h1 {
      font-size: 3rem;
      font-weight: 700;
      letter-spacing: 1px;
    }
    .form-container {
      background: white;
      border-radius: 20px;
      padding: 35px;
      margin-top: -80px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    h3 {
  font-weight: 600;
  color: #444; /* títulos */
}
    label {
  font-weight: 500;
  color: #555; /* cor clara e elegante para labels */
}
    .btn-success {
      background: linear-gradient(135deg, #198754, #28a745);
      border: none;
      padding: 12px 40px;
      font-size: 1.1rem;
      border-radius: 50px;
      transition: 0.3s ease;
      font-weight: 500;
    }
    .btn-success:hover {
      background: linear-gradient(135deg, #157347, #218838);
      transform: translateY(-2px);
      box-shadow: 0 6px 16px rgba(0,0,0,0.15);
    }
  </style>
</head>
<body>

<!-- Banner -->
<div class="banner">
  <h1></h1>
</div>

<!-- Formulário -->
<div class="container">
  <div class="form-container">
    <h1 class="text-center mb-4">Formulário De Inscrição</h1>

    <form method="POST" action="salvar.php" class="row g-3 needs-validation" novalidate>

      <!-- Tipo de Evento -->
      <div class="col-md-6">
        <label class="form-label">Tipo De Evento *</label>
        <select name="tipo_evento" class="form-select" required>
          <option value="">Selecione...</option>
          <option>Metanoia</option>
          <option>Encontro com DEUS</option>
          <option>Peniel</option>
          <option>Arcampamento</option>
          <option>Outros</option>
        </select>
      </div>

      <!-- Nome -->
      <div class="col-md-6">
        <label class="form-label">Nome *</label>
        <input type="text" name="nome" class="form-control" required>
      </div>

      <!-- Menor de Idade -->
      <div class="col-md-6">
        <label class="form-label">Menor De Idade? *</label>
        <select name="menor_idade" class="form-select" required>
          <option value="">Selecione...</option>
          <option>SIM</option>
          <option>NÃO</option>
        </select>
      </div>

      <!-- Idade -->
      <div class="col-md-6">
        <label class="form-label">Idade *</label>
        <input type="number" name="idade" class="form-control" required>
      </div>

      <!-- CPF -->
      <div class="col-md-6">
        <label class="form-label">CPF *</label>
        <input type="text" name="cpf" id="cpf" class="form-control" required>
      </div>

      <!-- Sexo -->
      <div class="col-md-6">
        <label class="form-label">Sexo Biológico *</label>
        <select name="sexo" class="form-select" required>
          <option value="">Selecione...</option>
          <option>Masculino</option>
          <option>Feminino</option>
        </select>
      </div>

      <!-- Data Nascimento -->
      <div class="col-md-6">
        <label class="form-label">Data De Nascimento *</label>
        <input type="text" name="data_nascimento" id="data_nascimento" class="form-control" required>
      </div>

      <!-- Endereço -->
      <div class="col-md-6">
        <label class="form-label">Endereço Completo *</label>
        <input type="text" name="endereco" class="form-control" required>
      </div>

      <!-- Cidade -->
      <div class="col-md-6">
        <label class="form-label">Cidade *</label>
        <input type="text" name="cidade" class="form-control" required>
      </div>

      <!-- Estado -->
      <div class="col-md-6">
        <label class="form-label">Estado *</label>
        <select name="estado" class="form-select" required>
          <option value="">Selecione...</option>
          <option>AC</option><option>AL</option><option>AP</option><option>AM</option>
          <option>BA</option><option>CE</option><option>DF</option><option>ES</option>
          <option>GO</option><option>MA</option><option>MT</option><option>MS</option>
          <option>MG</option><option>PA</option><option>PB</option><option>PR</option>
          <option>PE</option><option>PI</option><option>RJ</option><option>RN</option>
          <option>RS</option><option>RO</option><option>RR</option><option>SC</option>
          <option>SP</option><option>SE</option><option>TO</option>
        </select>
      </div>

      <!-- Telefone -->
      <div class="col-md-6">
        <label class="form-label">Telefone / WhatsApp *</label>
        <input type="text" name="telefone" id="telefone" class="form-control" required>
      </div>

      <!-- Email -->
      <div class="col-md-6">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control">
      </div>

      <!-- Igreja -->
      <div class="col-md-6">
        <label class="form-label">Pertence A Qual Igreja? *</label>
        <input type="text" name="igreja" class="form-control" required>
      </div>

      <!-- Cargo -->
      <div class="col-md-6">
        <label class="form-label">Cargo Na Igreja *</label>
        <input type="text" name="cargo_igreja" class="form-control" required>
      </div>

      <!-- Camiseta -->
      <div class="col-md-6">
        <label class="form-label">Tamanho Da Camiseta *</label>
        <select name="camiseta" class="form-select" required>
          <option value="">Selecione...</option>
          <option>PP</option><option>P</option><option>M</option>
          <option>G</option><option>GG</option><option>EXG</option><option>G1</option>
        </select>
      </div>

      <!-- Contatos -->
      <div class="col-md-4">
        <label class="form-label">Insira Nome e Telefone em Caso de Emergencia - 1</label>
        <input type="text" name="contato1" class="form-control" required>
      </div>
      <div class="col-md-4">
        <label class="form-label">Insira Nome e Telefone em Caso de Emergencia - 2</label>
        <input type="text" name="contato2" class="form-control" required>
      </div>
      <div class="col-md-4">
        <label class="form-label">Insira Nome e Telefone em Caso de Emergencia - 3</label>
        <input type="text" name="contato3" class="form-control" required>
      </div>

      <!-- Saúde -->
      <div class="col-md-12">
        <label class="form-label">Problema De Saúde E Restrições *</label>
        <textarea name="saude" class="form-control" rows="3" required></textarea>
      </div>

      <!-- PIX -->
      <div class="col-md-12">
        <label class="form-label">PIX Para Pagamento:</label>
        <input type="text" class="form-control text-center fw-bold" value="rebecaviananeves@gmail.com" readonly>
      </div>

      <div class="col-12 text-center mt-4">
        <button type="submit" class="btn btn-success">Enviar Inscrição</button>
      </div>
    </form>
  </div>
</div>

<!-- Modal Bootstrap -->
<div class="modal fade" id="feedbackModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="feedbackModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body" id="feedbackMessage"></div>
      <div class="modal-footer">
        <a href="index.php" class="btn btn-primary">OK</a>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Máscaras
  $(document).ready(function(){
    $('#cpf').mask('000.000.000-00');
    $('#telefone').mask('(00) 00000-0000');
    $('#data_nascimento').mask('00/00/0000');
  });

  // Modal feedback
  document.addEventListener("DOMContentLoaded", function() {
    const params = new URLSearchParams(window.location.search);
    if (params.has("status")) {
      const status = params.get("status");
      const modalTitle = document.getElementById("feedbackModalLabel");
      const modalBody = document.getElementById("feedbackMessage");

      if (status === "sucesso") {
        modalTitle.innerHTML = "✅ Inscrição Realizada Com Sucesso!";
        modalBody.innerHTML = "Sua inscrição foi registrada no sistema.";
      } else {
        modalTitle.innerHTML = "❌ Erro Ao Processar Inscrição!";
        modalBody.innerHTML = "Detalhes: " + decodeURIComponent(params.get("msg") || "");
      }

      const feedbackModal = new bootstrap.Modal(document.getElementById('feedbackModal'));
      feedbackModal.show();
    }
  });
</script>

</body>
</html>