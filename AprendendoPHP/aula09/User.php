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
        
        echo "\n\tEmail ja cadastrado!\n";
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

    public function alt($n, $s, $e, $users): array {
        for ($i = 0; $i < count($users); $i++) {
            if ($e == $users[$i]->email) {
                $o = null;

                echo "\nDeseja alterar o nome do usuario?(S/N) ";
                $o = readline();
                strtolower($o);
                if ($o == "s") {
                    echo "\nDigite o novo nome: ";
                    $n = readline();
                    $users[$i]->nome = $n;
                    $o = null;
                }

                echo "\nDeseja alterar a senha do usuario?(S/N) ";
                $o = readline();
                strtolower($o);
                if ($o == "s") {
                    echo "\nDigite a nova senha: ";
                    $s = readline();
                    $users[$i]->senha = $s;
                    $o = null;
                }

                echo "\nDeseja alterar o email do usuario?(S/N) ";
                $o = readline();
                strtolower($o);
                if ($o == "s") {
                    echo "\nDigite o novo nome: ";
                    $e = readline();
                    $users[$i]->email = $e;
                    $o = null;
                }
                
                $i = count($users);
                echo "\n\tUsuario alterado!\n";
                return $users;
            }
        }

        echo "\n\tUsuario nao encontrado!!\n";
        return $users;
    }

    public function getByEmail($e, $users): array {
        for ($i = 0; $i < count($users); $i++) {
            // '$users[$i]' representa a posição no array e o '-> email' a posição dentro  do objeto
            if ($e == $users[$i]->email) {
                echo "\n--------------------------------- \n";
                echo "ID: " . $users[$i]->id . "\n";
                echo "Nome: " . $users[$i]->nome . "\n";
                echo "Email: " . $users[$i]->email . "\n";
                echo "Senha: " . $users[$i]->senha . "\n";
                echo "---------------------------------\n\n";
                return $users;
            }
        }

        echo "\n\tUsuario nao encontrado!\n";
        return $users;
    }

    public function getAll($users): void {
        foreach ($users as $u) {
            echo "\n--------------------------------- \n";
            echo "ID: " . $u->id . "\n";
            echo "Nome: " . $u->nome . "\n";
            echo "Email: " . $u->email . "\n";
            echo "Senha: " . $u->senha . "\n";
            echo "---------------------------------\n\n";
        }
    }
}

?>

$db = new PDO('sqlite:database.sqlite');

$query = $db->prepare("select * from usuario where id = :id");
$query->execute(['id' => 3]);
$usuario = $query->fetch();


echo "<pre>";
var_dump($usuario);
echo "</pre>";


$q = $db->prepare("insert into usuarios(nome, email, senha) values (:nome, :email, :senha)");

$users = $q->execute([
    'nome' => 'Leonardo',
    'email' => 'leonardo@leo.com.br',
    'senha' => '123456'
]);


$query = $db->query("select * from usuarios");
$usuarios = $query->fetchAll();

echo '<pre>';
var_dump($usuarios);
echo '</pre>';