<?php
//require 'index.php';
// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{
    private DatabaseManager $databaseManager;

    // This class needs a database connection to function
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
//        $sqlInsert= "insert"
        $stmt = $this->databaseManager->connection->prepare($sqlInsert);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':flavour', $flavour);
        $stmt->bindParam(':vegan', $vegan);
        $stmt->execute();


//         $this->databaseManager->connection->query("insert into donuts(name) VALUES ('$name')");

    }

    // Get one
    public function find(): array
    {

//        $sqlvegan = "SELECT * FROM Donuts where Donuts.vegan = 1";

    }

    // Get all
    public function get(): bool|PDOStatement
    {
        // TODO: replace dummy data by real one
//        $names = "select donuts.names from Donuts";
//        foreach ($cards as card){
//        echo $cards
//    }
//        return [
//            ['name' => 'dummy one'],
//            ['name' => 'dummy two'],
//        ];

        $sql = "SELECT * FROM Donuts ";


         return $this->databaseManager->connection->query($sql);
    }

    public function update(): void
    {
        require 'edit.php';
        echo 'hey'   ;

        if (isset($_GET['update'])){
            $name=$_GET['donutNewName'];
            $flavour=$_GET['donutNewFlavour'];
            $vegan=$_GET['veganista'] ? 1 : 0;
            $sqlUpdate = "UPDATE donuts set name= :name, flavour= :flavour,vegan= :flavour WHERE donuts.name=$_GET";
            var_dump($sqlUpdate);


        $stmt = $this->databaseManager->connection->prepare($sqlUpdate);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':flavour', $flavour);
            $stmt->bindParam(':vegan', $vegan);
            $stmt->execute();
        //TODO: the binparams
        }
    }

    public function delete(): void
    {

    }

}