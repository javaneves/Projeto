<?php
require 'vendor/autoload.php'; // Dompdf

use Dompdf\Dompdf;
use Dompdf\Options;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulario_inscricao";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}

// ----- FILTROS (mesmos do admin.php) -----
$where = "1=1";

if (!empty($_GET['tipo_evento'])) {
    $tipo = $conn->real_escape_string($_GET['tipo_evento']);
    $where .= " AND tipo_evento = '$tipo'";
}
if (!empty($_GET['nome'])) {
    $nome = $conn->real_escape_string($_GET['nome']);
    $where .= " AND nome LIKE '%$nome%'";
}
if (!empty($_GET['endereco'])) {
    $endereco = $conn->real_escape_string($_GET['endereco']);
    $where .= " AND endereco LIKE '%$endereco%'";
}
if (!empty($_GET['idade'])) {
    $idade = (int)$_GET['idade'];
    $where .= " AND idade = $idade";
}
if (!empty($_GET['data_ini']) && !empty($_GET['data_fim'])) {
    $where .= " AND DATE(data_inscricao) BETWEEN '{$_GET['data_ini']}' AND '{$_GET['data_fim']}'";
}
if (!empty($_GET['nasc_ini']) && !empty($_GET['nasc_fim'])) {
    $where .= " AND data_nascimento BETWEEN '{$_GET['nasc_ini']}' AND '{$_GET['nasc_fim']}'";
}

$sql = "SELECT * FROM inscricoes WHERE $where ORDER BY id DESC";
$result = $conn->query($sql);

// Montar HTML
$html = "
<h2 style='text-align:center;'>Relatório de Inscrições</h2>
<table border='1' cellspacing='0' cellpadding='5' width='100%'>
<thead>
<tr style='background:#f0f0f0;'>
<th>ID</th>
<th>Evento</th>
<th>Nome</th>
<th>CPF</th>
<th>Idade</th>
<th>Cidade</th>
<th>Estado</th>
<th>Data Nasc.</th>
<th>Data Inscrição</th>
</tr>
</thead>
<tbody>";
while($r = $result->fetch_assoc()) {
    $html .= "<tr>
        <td>{$r['id']}</td>
        <td>{$r['tipo_evento']}</td>
        <td>{$r['nome']}</td>
        <td>{$r['cpf']}</td>
        <td>{$r['idade']}</td>
        <td>{$r['cidade']}</td>
        <td>{$r['estado']}</td>
        <td>{$r['data_nascimento']}</td>
        <td>{$r['data_inscricao']}</td>
    </tr>";
}
$html .= "</tbody></table>";

// Gerar PDF
$options = new Options();
$options->set('isRemoteEnabled', true);
$dompdf = new Dompdf($options);
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape'); // horizontal
$dompdf->render();
$dompdf->stream("inscricoes_" . date("Y-m-d_H-i-s") . ".pdf", ["Attachment" => true]);
exit;