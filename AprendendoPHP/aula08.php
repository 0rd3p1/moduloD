<?php

class User {

    public int $id;
    public $nome;
    public $senha;
    public $email;

    public function add ($nome, $senha, $email, $users, $cont) {

        $u = new User();
        
        $u -> id = $cont;
        $u -> nome = $nome;
        $u -> senha = $senha;
        $u -> email = $email;

    }
}


?>