<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php'); 
    exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $categoria = $_POST['categoria'];
    $tipo = $_POST['tipo'];
    $descricao = $_POST['descricao'];
    $imagem = $_POST['imagem'];


    $_SESSION['itens'][] = [
        'titulo' => $titulo,
        'categoria' => $categoria,
        'tipo' => $tipo,
        'descricao' => $descricao,
        'imagem' => $imagem
    ];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Item - Protegido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f4fdf4;">

<div class="container mt-5">
    <h2 class="text-center text-success">Adicionar Novo Item</h2>
    
    <form method="POST">
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="mb-3">
            <label for="categoria" class="form-label">Categoria</label>
            <input type="text" class="form-control" id="categoria" name="categoria" required>
        </div>
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="tipo" name="tipo" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="imagem" class="form-label">URL da Imagem</label>
            <input type="text" class="form-control" id="imagem" name="imagem" required>
        </div>
        <button type="submit" class="btn btn-success w-100">Adicionar Item</button>
    </form>

    <a href="logout.php" class="btn btn-danger w-100 mt-3">Sair</a>
</div>

</body>
</html>
