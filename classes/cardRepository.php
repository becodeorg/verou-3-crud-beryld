<?php

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

    }

    // Get one
    public function find(): array
    {

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

        $sql = "SELECT * FROM Donuts";

        // We get the database connection first, so we can apply our queries with it
        //TODO: sql queries
         return $this->databaseManager->connection->query($sql);
    }

    public function update(): void
    {

    }

    public function delete(): void
    {

    }

}