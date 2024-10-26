<?php
include "banco.php";

if (isset($_POST['nome']) && $_POST['nome'] != '') {
    $tarefa = array();
    $tarefa['nome'] = $_POST['nome'];
    $tarefa['descricao'] = $_POST['descricao'] ?? '';
    $tarefa['prazo'] = isset($_POST['prazo']) ? traduz_data_banco($_POST['prazo']) : '';
    $tarefa['prioridade'] = $_POST['prioridade'] ?? 'Baixa';
    $tarefa['concluida'] = isset($_POST['concluida']) ? 1 : 0;

    gravar_tarefa($conexao, $tarefa);
    header("Location: tarefas.php");
}

$lista_tarefas = buscar_tarefas($conexao);
include "template.php";
