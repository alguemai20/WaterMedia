<?php
if (isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];
    $destino = "downloads/" . basename($arquivo['name']);

    if (move_uploaded_file($arquivo['tmp_name'], $destino)) {
        echo "Arquivo enviado com sucesso! <a href='index.html'>Voltar</a>";
    } else {
        echo "Erro ao enviar o arquivo.";
    }
}
?>
