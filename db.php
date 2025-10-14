<?php

function conectar() {
    $host = 'localhost';
    $name = 'estoque';
    $user = 'root';
    $password = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$name;charset=$charset";

    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    try {
        $conexao = new PDO($dsn, $user, $password, $options);
        return $conexao;
    } catch(\PDOException $erro) {
        throw new \PDOException($erro->getMessage(), (int)$erro->getCode());
    }
}

function cadastrarProduto() {
    try {
        $conexao = conectar();
    
        $nome = $_POST['nome_produto'];
        $unidade = $_POST['unidade_produto'];
        $quantidade = $_POST['quantidade_produto'];
    
        $comandoSQL = "INSERT INTO produto (nome_produto, unidade_medida, quantidade_atual) VALUES (:nome, :unidade, :quantidade)";
        $stmt = $conexao->prepare($comandoSQL);
    
        $stmt->execute([':nome' => $nome, ':unidade' => $unidade, ':quantidade' => $quantidade]);
    
        header('Location: index.php?status=sucesso');
        exit();
    } catch(\PDOException $erro) {
        header('Location: index.php?status=sucesso');
        exit();
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $acao = $_REQUEST['acao'] ?? 'listar';
    
    switch ($acao) {
        case 'cadastrar':
            cadastrarProduto();
            break;
        default:
            echo "acao desconhecida!";
            break;
    }
}
