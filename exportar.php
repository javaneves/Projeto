<?php
require 'vendor/autoload.php'; // PhpSpreadsheet (composer require phpoffice/phpspreadsheet)

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulario_inscricao";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}

// ----- FILTROS -----
$where = "1=1";

// Tipo de evento
if (!empty($_GET['tipo_evento'])) {
    $tipo = $conn->real_escape_string($_GET['tipo_evento']);
    $where .= " AND tipo_evento = '$tipo'";
}

// Nome
if (!empty($_GET['nome'])) {
    $nome = $conn->real_escape_string($_GET['nome']);
    $where .= " AND nome LIKE '%$nome%'";
}

// Endereço
if (!empty($_GET['endereco'])) {
    $endereco = $conn->real_escape_string($_GET['endereco']);
    $where .= " AND endereco LIKE '%$endereco%'";
}

// Idade
if (!empty($_GET['idade'])) {
    $idade = (int)$_GET['idade'];
    $where .= " AND idade = $idade";
}

// Data de inscrição (intervalo)
if (!empty($_GET['data_ini']) && !empty($_GET['data_fim'])) {
    $data_ini = $conn->real_escape_string($_GET['data_ini']);
    $data_fim = $conn->real_escape_string($_GET['data_fim']);
    $where .= " AND DATE(data_inscricao) BETWEEN '$data_ini' AND '$data_fim'";
}

// Data de nascimento (intervalo)
if (!empty($_GET['nasc_ini']) && !empty($_GET['nasc_fim'])) {
    $nasc_ini = $conn->real_escape_string($_GET['nasc_ini']);
    $nasc_fim = $conn->real_escape_string($_GET['nasc_fim']);
    $where .= " AND data_nascimento BETWEEN '$nasc_ini' AND '$nasc_fim'";
}

// Consulta
$sql = "SELECT * FROM inscricoes WHERE $where ORDER BY id DESC";
$result = $conn->query($sql);

// Criar planilha
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Cabeçalhos
$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'Tipo de Evento');
$sheet->setCellValue('C1', 'Nome');
$sheet->setCellValue('D1', 'CPF');
$sheet->setCellValue('E1', 'Idade');
$sheet->setCellValue('F1', 'Cidade');
$sheet->setCellValue('G1', 'Estado');
$sheet->setCellValue('H1', 'Endereço');
$sheet->setCellValue('I1', 'Data de Nascimento');
$sheet->setCellValue('J1', 'Data de Inscrição');

// Dados
$row = 2;
while($r = $result->fetch_assoc()) {
    $sheet->setCellValue("A$row", $r['id']);
    $sheet->setCellValue("B$row", $r['tipo_evento']);
    $sheet->setCellValue("C$row", $r['nome']);
    $sheet->setCellValue("D$row", $r['cpf']);
    $sheet->setCellValue("E$row", $r['idade']);
    $sheet->setCellValue("F$row", $r['cidade']);
    $sheet->setCellValue("G$row", $r['estado']);
    $sheet->setCellValue("H$row", $r['endereco']);
    $sheet->setCellValue("I$row", $r['data_nascimento']);
    $sheet->setCellValue("J$row", $r['data_inscricao']);
    $row++;
}

// Estilo (negrito nos títulos)
$sheet->getStyle('A1:J1')->getFont()->setBold(true);

// Gera arquivo
$writer = new Xlsx($spreadsheet);
$arquivo = "inscricoes_" . date("Y-m-d_H-i-s") . ".xlsx";

// Cabeçalhos HTTP
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header("Content-Disposition: attachment; filename=\"$arquivo\"");
header('Cache-Control: max-age=0');

$writer->save('php://output');
exit;
?>