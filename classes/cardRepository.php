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
        $vegan = $_GET['veganista'] ? 1 : 0; // If true give the value and blabla
        $sqlInsert = "insert into donuts(name, flavour, vegan) VALUES (:name, :flavour, :vegan)";
        $stmt = $this->databaseManager->connection->prepare($sqlInsert);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':flavour', $flavour);
        $stmt->bindParam(':vegan', $vegan);
        $stmt->execute();
    }

    // Get one Not in use yet, will if create a search option
    public function find(): array
    {
    }

    // Get all
    public function get(): bool|PDOStatement
    {
        $sql = "SELECT * FROM donuts ";
        return $this->databaseManager->connection->query($sql);
    }

    public function update(): void
    {
        require 'edit.php';
    }

    public function edited() : void
    {

        $name=$_GET['donutNewName'];
        $flavour=$_GET['donutNewFlavour'];
        $vegan=!empty($_GET['veganista']) ? 1 : 0;
        $theid=$_GET['id'];
        $sqlUpdate = "UPDATE donuts set name= :name, flavour= :flavour,vegan= :vegan WHERE donuts.id='$theid'";
        $stmt = $this->databaseManager->connection->prepare($sqlUpdate);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':flavour', $flavour);
        $stmt->bindParam(':vegan', $vegan);
        $stmt->execute();
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


}