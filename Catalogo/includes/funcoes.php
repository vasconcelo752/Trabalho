<?php
function buscar_item_por_id($itens, $id) {
    return isset($itens[$id]) ? $itens[$id] : null;
}
function filtrar_itens($itens, $categoria) {
    $resultados = [];
    foreach ($itens as $item) {
        if ($item['categoria'] === $categoria) {
            $resultados[] = $item;
        }
    }
    return $resultados;
}
?>
