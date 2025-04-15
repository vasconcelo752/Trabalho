<?php
session_start();
include 'includes/dados.php';
include 'includes/funcoes.php';
include 'includes/cabecalho.php';

// Recebe o ID do item via GET
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$item = buscar_item_por_id($itens_base, $id);


if ($item === null) {
    echo "<p>Item não encontrado!</p>";
} else {
    echo '<div class="card mb-3">';
    echo '  <img src="' . $item['imagem'] . '" class="card-img-top" alt="' . $item['titulo'] . '">';
    echo '  <div class="card-body">';
    echo '    <h5 class="card-title text-success">' . $item['titulo'] . '</h5>';
    echo '    <p class="card-text">';
    echo '      <strong>Categoria:</strong> ' . $item['categoria'] . '<br>';
    echo '      <strong>Tipo:</strong> ' . $item['tipo'] . '<br>';
    echo '      <strong>Descrição:</strong> ' . $item['descricao'];
    echo '    </p>';
    echo '  </div>';
    echo '</div>';
}

include 'includes/rodape.php';
?>
