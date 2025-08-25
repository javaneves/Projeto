<?php /*
$servername = "localhost";
$username = "root"; // ajuste se necessário
$password = "";     // ajuste se necessário
$dbname = "formulario_inscricao";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo_evento   = $_POST['tipo_evento'];
    $nome          = $_POST['nome'];
    $menor_idade   = $_POST['menor_idade'];
    $idade         = $_POST['idade'];
    $cpf           = $_POST['cpf'];
    $sexo          = $_POST['sexo'];
    $data_nascimento = DateTime::createFromFormat('d/m/Y', $_POST['data_nascimento'])->format('Y-m-d');
    $endereco      = $_POST['endereco'];
    $cidade        = $_POST['cidade'];
    $estado        = $_POST['estado'];
    $telefone      = $_POST['telefone'];
    $email         = $_POST['email'];
    $igreja        = $_POST['igreja'];
    $cargo_igreja  = $_POST['cargo_igreja'];
    $camiseta      = $_POST['camiseta'];
    $contato1      = $_POST['contato1'];
    $contato2      = $_POST['contato2'];
    $contato3      = $_POST['contato3'];
    $saude         = $_POST['saude'];
    $data_inscricao = date("Y-m-d");

    $sql = "INSERT INTO inscricoes 
    (tipo_evento, nome, menor_idade, idade, cpf, sexo, data_nascimento, endereco, cidade, estado, telefone, email, igreja, cargo_igreja, camiseta, contato1, contato2, contato3, saude, data_inscricao) 
    VALUES 
    ('$tipo_evento','$nome','$menor_idade','$idade','$cpf','$sexo','$data_nascimento','$endereco','$cidade','$estado','$telefone','$email','$igreja','$cargo_igreja','$camiseta','$contato1','$contato2','$contato3','$saude','$data_inscricao')";

	$valor_total = 100.00; 
	$valor_pago = 0.00; 
	$status_pagamento = "Não Pago";

	$sql = "INSERT INTO inscricoes (..., valor_total, valor_pago, status_pagamento) 
        VALUES (..., '$valor_total', '$valor_pago', '$status_pagamento')";


    if ($conn->query($sql) === TRUE) {
        header("Location: index.php?status=sucesso");
    } else {
        header("Location: index.php?status=erro&msg=" . urlencode($conn->error));
    }
	exit;
    $conn->close();
    
}*/
?>

<?php
$servername = "localhost";
$username = "root"; // ajuste se necessário
$password = "";     // ajuste se necessário
$dbname = "formulario_inscricao";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tipo_evento     = $_POST['tipo_evento'];
    $nome            = $_POST['nome'];
    $menor_idade     = $_POST['menor_idade'];
    $idade           = $_POST['idade'];
    $cpf             = $_POST['cpf'];
    $sexo            = $_POST['sexo'];
    $data_nascimento = $_POST['data_nascimento'];
    $endereco        = $_POST['endereco'];
    $cidade          = $_POST['cidade'];
    $estado          = $_POST['estado'];
    $telefone        = $_POST['telefone'];
    $email           = $_POST['email'];
    $igreja          = $_POST['igreja'];
    $cargo_igreja    = $_POST['cargo_igreja']; // aqui mantemos cargo_igreja
    $camiseta        = $_POST['camiseta'];
    $contato1        = $_POST['contato1'];
    $contato2        = $_POST['contato2'];
    $contato3        = $_POST['contato3'];
    $saude           = $_POST['saude'];

    // campos de pagamento (pode vir do formulário ou default)
    $valor_total     = $_POST['valor_total'] ?? 0.00;
    $valor_pago      = $_POST['valor_pago'] ?? 0.00;
    $status_pagamento= $_POST['status_pagamento'] ?? 'Não Pago';

    $sql = "INSERT INTO inscricoes 
    (tipo_evento, nome, menor_idade, idade, cpf, sexo, data_nascimento, endereco, cidade, estado, telefone, email, igreja, cargo_igreja, camiseta, contato1, contato2, contato3, saude, valor_total, valor_pago, status_pagamento, data_inscricao) 
    VALUES (
        '$tipo_evento',
        '$nome',
        '$menor_idade',
        '$idade',
        '$cpf',
        '$sexo',
        '$data_nascimento',
        '$endereco',
        '$cidade',
        '$estado',
        '$telefone',
        '$email',
        '$igreja',
        '$cargo_igreja',
        '$camiseta',
        '$contato1',
        '$contato2',
        '$contato3',
        '$saude',
        '$valor_total',
        '$valor_pago',
        '$status_pagamento',
        NOW()
    )";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Inscrição salva com sucesso!'); window.location='index.php';</script>";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>