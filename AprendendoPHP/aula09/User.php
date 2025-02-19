<?php

class User {
    public int $id;
    public $nome;
    public $senha;
    public $email;

    /*
    public function __construct ($i, $n, $s, $e) {
        $this -> id = $i;
        $this -> nome = $n;
        $this -> senha = $s;
        $this -> email = $e;
    }
    */

    private function db () {
        return $db = new PDO('sqlite:database.sqlite');
    }

    public function add($n, $s, $e) {
        if ($this -> authEmail($e)) {
            echo "\n\tEmail ja cadastrado!\n";
            return null;
        }

        $query = $this -> db() -> prepare("INSERT INTO user (nome, senha, email) VALUES (:n, :s, :e)");
        $query -> execute(['n' => $n, 's' => $s, 'e' => $e]);

        echo "\n\tUsuario cadastrado!\n";
    }

    public function authEmail($e) {
        $query = $this -> db() -> query("SELECT * FROM user WHERE email = :e");
        $query -> execute(['e' => $e]);
        
        if (!$query->fetch()) {
            return false;
        }
        
        return true;
    }

    public function del($e) {
        $query = $this -> db() -> prepare("DELETE FROM user WHERE email = :e");
        $query -> execute(['e' => $e]);

        if (!$this -> authEmail($e)) {
            echo "\n\tEmail nao encontrado!\n";
            return null;
        }

        echo "\n\tUsuario Excluido!\n";
    }

    public function alt($e) {
        if ($this -> authEmail($e)) {
            $o = null;
            $email = $e;

            echo "\nDeseja alterar o nome do usuario?(S/N): ";
            $o = readline();
            strtolower($o);
            if ($o == "s") {
                echo "\nDigite o novo nome: ";
                $n = readline();
                $query = $this -> db() -> prepare("UPDATE user SET nome = :n WHERE email = :e");
                $query -> execute(['e' => $e, 'n' => $n]);
                $o = null;
            }

            echo "\nDeseja alterar a senha do usuario?(S/N): ";
            $o = readline();
            strtolower($o);
            if ($o == "s") {
                echo "\nDigite a nova senha: ";
                $s = readline();
                $query = $this -> db() -> prepare("UPDATE user SET senha = :s WHERE email = :e");
                $query -> execute(['e' => $e, 's' => $s]);
                $o = null;
            }

            echo "\nDeseja alterar o email do usuario?(S/N): ";
            $o = readline();
            strtolower($o);
            if ($o == "s") {
                echo "\nDigite o novo nome: ";
                $e = readline();
                $query = $this -> db() -> prepare("UPDATE user SET email = :e WHERE email = :email");
                $query -> execute(['e' => $e, 'email' => $email]);
                $o = null;
            }
            
            echo "\n\tUsuario alterado!\n";
            return null;
        }

        echo "\n\tUsuario nao encontrado!!\n";
    }

    public function getByEmail($e) {
        $query = $this -> db() -> prepare("SELECT * FROM user WHERE email = :e");
        $query -> execute(['e' => $e]);
        
        if ($u = $query -> fetch()) {
            echo "\n---------------------------------\n";
            echo "ID: " . $u['id'] . "\n";
            echo "Nome: " . $u['nome'] . "\n";
            echo "Email: " . $u['email'] . "\n";
            echo "Senha: " . $u['senha'] . "\n";
            echo "---------------------------------\n\n";
            return null;
        }

        echo "\n\tUsuario nao encontrado!\n";
    }

    public function getAll() {
        $query = $this -> db() -> prepare("SELECT * FROM user");
        $query -> execute();


        foreach ($query -> fetchAll() as $u) {
            echo "\n---------------------------------\n";
            echo "ID: " . $u['id'] . "\n";
            echo "Nome: " . $u['nome'] . "\n";
            echo "Email: " . $u['email'] . "\n";
            echo "Senha: " . $u['senha'] . "\n";
            echo "---------------------------------\n";
        }
    }
}

?>