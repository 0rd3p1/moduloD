<?php

class DB {
    private $db;

    public function __construct() {   
        $this->db = new PDO('sqlite:db.sqlite');
    }

    public function query($query, $class = null, $params = []){
        $prepare = $this->db->prepare($query);

        if($class){
            $prepare->setFetchMode(PDO::FETCH_CLASS, $class);
        }
        
        $prepare->execute($params);
        return $prepare;
    }

    /*
    public function livros(){
        $query = $this->db->query("SELECT * FROM livros");
        $items = $query->fetchAll();
        return array_map(fn($item) => Livro::make($item), $items);
    }

    public function livro($id){
        $query = $this->db->prepare("SELECT * FROM livros WHERE id = :id");
        $query->execute(['id' => $id]);
        $items = $query->fetchAll();
        return array_map(fn($item) => Livro::make($item), $items)[0];
    }

    public function filmes(){
        $query = $this->db->query("SELECT * FROM filmes");
        $items = $query->fetchAll();
        return array_map(fn($item) => Filme::make($item), $items);
    }

    public function filme($id){
        $query = $this->db->prepare("SELECT * FROM filmes WHERE id = :id");
        $query->execute(['id' => $id]);
        $items = $query->fetchAll();
        return array_map(fn($item) => Filme::make($item), $items)[0];
    }
    */
}

?>