<?php

class User {

    public int $id;
    public $nome;
    public $senha;
    public $email;

    public function __construct ($id, $nome, $senha, $email) {
        $this -> id = $id;
        $this -> nome = $nome;
        $this -> senha = $senha;
        $this -> email = $email;
    }

    public function add ($nome, $senha, $email, $users, $cont) {

        $u = new User();
        
        $u -> id = $cont;
        $u -> nome = $nome;
        $u -> senha = $senha;
        $u -> email = $email;

    }
}


?>