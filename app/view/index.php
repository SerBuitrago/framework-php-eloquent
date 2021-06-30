<?php require_once ROOT_APP_VIEW_PATH_TEMPLATE . '/header.php'; ?>

<h1>Usuarios</h1>
<h1>Listado de productos</h1>

<?php
if (isset($data['list'])) {
    foreach ($data['list'] as $product) {
        echo "<strong>{$product->token}</strong> - {$product->nombre} <br>";
        echo "<strong>{$product->fecha_creacion}</strong> - {$product->nombre} <br>";
    }
} ?>

<?php require_once ROOT_APP_VIEW_PATH_TEMPLATE . '/footer.php'; ?>