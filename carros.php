<?php
require_once "connection.php";
class Carros
{
    public $id_carro;
    public $marca;
    public $modelo;
    public $ano;
    public $imagem;
    public $info;

    public function __construct($id_carro = false)
    {
        if ($id_carro) {
            $this->id_carro = $id_carro;
            $this->loading();
        }
    }

    public function loading()
    {
        $sql = "SELECT marca, modelo, ano, imagem, info FROM carros WHERE id_carro = :id_carro";
        $connection = Connection::connect();
        $stmt = $connection->prepare($sql);
        $stmt->bindValue(":id_carro", $this->id_carro);
        $stmt->execute();
        $list = $stmt->fetch();
        $this->marca = $list['marca'];
        $this->modelo = $list['modelo'];
        $this->ano = $list['ano'];
        $this->imagem = $list['imagem'];
        $this->info = $list['info'];
    }

    public function insert()
    {
        $sql = "INSERT INTO carros (marca, modelo, ano, imagem, info) VALUES (:marca, :modelo, :ano, :imagem, :info)";
        $connection = Connection::connect();
        $stmt = $connection->prepare($sql);
        $stmt->bindValue(":marca", $this->marca);
        $stmt->bindValue(":modelo", $this->modelo);
        $stmt->bindValue(":ano", $this->ano);
        $stmt->bindValue(":imagem", $this->imagem);
        $stmt->bindValue(":info", $this->info);
        $stmt->execute();
    }

    public static function list()
    {
        $sql = "SELECT * FROM carros";
        $connection = Connection::connect();
        $resultado = $connection->query($sql);
        $list = $resultado->fetchAll();
        return $list;
    }

    public function editarComImagem()
    {
        $sql = "UPDATE carros SET marca = :marca, modelo = :modelo, ano = :ano, imagem = :imagem, info = :info WHERE id_carro = :id_carro";
        $connection = Connection::connect();
        $stmt = $connection->prepare($sql);
        $stmt->bindValue(":marca", $this->marca);
        $stmt->bindValue(":modelo", $this->modelo);
        $stmt->bindValue(":ano", $this->ano);
        $stmt->bindValue(":imagem", $this->imagem);
        $stmt->bindValue(":info", $this->info);
        $stmt->bindValue(":id_carro", $this->id_carro);
        $stmt->execute();
    }

    public function editarSemImagem()
    {
        $sql = "UPDATE carros SET marca = :marca, modelo = :modelo, ano = :ano, info = :info WHERE id_carro = :id_carro";
        $connection = Connection::connect();
        $stmt = $connection->prepare($sql);
        $stmt->bindValue(":marca", $this->marca);
        $stmt->bindValue(":modelo", $this->modelo);
        $stmt->bindValue(":ano", $this->ano);
        $stmt->bindValue(":info", $this->info);
        $stmt->bindValue(":id_carro", $this->id_carro);
        $stmt->execute();
    }

    public function delete()
    {
        $sql = "DELETE FROM carros WHERE id_carro = :id_carro";
        $connection = Connection::connect();
        $stmt = $connection->prepare($sql);
        $stmt->bindValue(":id_carro", $this->id_carro);
        $stmt->execute();
    }
}
