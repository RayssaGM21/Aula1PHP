<?php
if (isset($_POST['add'])){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];
    $status = $_POST['status'];

    $tarefas = file_exists("tarefas.json") ? 
    json_decode(file_get_contents("tarefas.json"), true) : [];

    $tarefas[] = ['nome' => $nome, 'descricao' => 
    $descricao, 'data' => $data, 'status' => $status];

    file_put_contents("tarefas.json", 
    json_encode($tarefas, JSON_PRETTY_PRINT));

    header("Location: index.php");
    exit();


}

?>