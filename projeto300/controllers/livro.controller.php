<?php

$livro = $database->query(
    'SELECT * FROM livros WHERE id = :id',
    Livro::class,
    ['id' => $_REQUEST['id']]
)->fetch();

view('livro', ['livro' => $livro]);

?>