<?php
session_start();
include 'includes/dados.php';
include 'includes/funcoes.php';
include 'includes/cabecalho.php';



if (!isset($itens)) {
    $itens = [];  
}

$itens_sessao = $_SESSION['novos_itens'] ?? [];
$itens = array_merge($itens_base, $itens_sessao);

function exibir_item($item) {
    echo '
    <div class="col">
        <div class="card h-100">
            <img src="' . $item['imagem'] . '" class="card-img-top" alt="' . $item['titulo'] . '">
            <div class="card-body">
                <h5 class="card-title">' . $item['titulo'] . '</h5>
                <p class="card-text">
                    <strong>Categoria:</strong> ' . $item['categoria'] . '<br>
                    <strong>Tipo:</strong> ' . $item['tipo'] . '<br>
                    ' . $item['descricao'] . '
                </p>
            </div>
        </div>
    </div>';
}

$novos_itens = [];  
$itens = array_merge($itens, $novos_itens); 

?>

<?php

$novos_itens = $_SESSION['novos_itens'] ?? [];
$itens = array_merge($itens_base, $novos_itens);


$categoria_filtro = $_GET['categoria'] ?? '';
$tipo_filtro = $_GET['tipo'] ?? '';


if ($categoria_filtro !== '') {
    $itens = array_filter($itens, fn($i) => $i['categoria'] === $categoria_filtro);
}

if ($tipo_filtro !== '') {
    $itens = array_filter($itens, fn($i) => $i['tipo'] === $tipo_filtro);
}
?>


<div class="container">
    <h1 class="text-center text-success mb-4">🌱 Catálogo de Jardinagem</h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
        <?php foreach ($itens as $item): ?>
            <div class="col">
                <div class="card h-100">
                    <img src="<?php echo $item['imagem']; ?>" class="card-img-top" alt="<?php echo $item['titulo']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $item['titulo']; ?></h5>
                        <p class="card-text">
                            <strong>Categoria:</strong> <?php echo $item['categoria']; ?><br>
                            <strong>Tipo:</strong> <?php echo $item['tipo']; ?><br>
                            <strong>Descrição:</strong> <?php echo $item['descricao']; ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'includes/rodape.php'; ?>
