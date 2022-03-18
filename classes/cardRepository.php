<?php
class CardRepository
{
    private DatabaseManager $databaseManager;

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create(): void
    {
        $name = $_GET['donutName'];
        $flavour = $_GET['donutFlavour'];
        $vegan = $_GET['veganista'] ? 1 : 0;
        $sqlInsert = "insert into donuts(name, flavour, vegan) VALUES (:name, :flavour, :vegan)";
        $stmt = $this->databaseManager->connection->prepare($sqlInsert);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':flavour', $flavour);
        $stmt->bindParam(':vegan', $vegan);
        $stmt->execute();
    }

    // Get one
    public function find(): array
    {
//        $sqlvegan = "SELECT * FROM Donuts where Donuts.vegan = 1";
    }

    // Get all
    public function get(): bool|PDOStatement
    {
        $sql = "SELECT * FROM Donuts ";
         return $this->databaseManager->connection->query($sql);
    }

    public function update(): void
    {
        require 'edit.php';
    }

    public function clickDelete(): void
    {
        require 'delete.php';
    }

    public function delete(): void
    {
        var_dump($_GET);
        $theId=$_GET['id'];
        var_dump($theId);
        $sqlUpdate = "DELETE FROM donuts WHERE donuts.id='$theId'";
        $stmt = $this->databaseManager->connection->prepare($sqlUpdate);
        $stmt->execute();
    }

    public function edited() : void
    {
        $name=$_GET['donutNewName'];
        $flavour=$_GET['donutNewFlavour'];
        $vegan=!empty($_GET['veganista']) ? 1 : 0;
        $thename=$_GET['name'];
        $sqlUpdate = "UPDATE donuts set name= :name, flavour= :flavour,vegan= :vegan WHERE donuts.name='$thename'";
        $stmt = $this->databaseManager->connection->prepare($sqlUpdate);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':flavour', $flavour);
        $stmt->bindParam(':vegan', $vegan);
        $stmt->execute();
    }

}