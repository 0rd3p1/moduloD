<?php

class User
{

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

    public function add($n, $s, $e, $c, $users): array
    {
        if (!$this->authEmail($e, $users)) {
            echo "\tEmail ja cadastrado\t";
            return $users;
        }

        $u = new User(/*$n, $s, $e, $users, $c*/);

        $u->id = $c;
        $u->nome = $n;
        $u->senha = $s;
        $u->email = $e;
        $users[] = $u;

        echo "\n\tUsuario cadastrado!\n";
        return $users;
    }

    public function authEmail($e, $users)
    {
        foreach ($users as $u) {
            if ($u->email == $e) {
                return false;
            }
        }
        return true;
    }

    public function del($e, $users): array
    {
        for ($i = 0; $i < count($users); $i++) {
            if ($e == $users[$i]->email) {
                unset($users[$i]);

                echo "\nUsuario excluido!\n";
                return $users;
            }
        }

        echo "\n\tNão foi possivel excluir!\n";
        return $users;
    }

    public function alt($n, $s, $e, $users): array
    {
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

    public function getByEmail($e, $users): array
    {
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

    public function getAll($users): void
    {
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
