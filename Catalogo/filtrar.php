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
                        <strong>Descrição:</strong> ' . $item['descricao'] . '
                    </p>
                    <a href="detalhes.php?id=' . $item['id'] . '" class="btn btn-success">Ver mais</a>
                </div>
            </div>
        </div>
    ';
}
