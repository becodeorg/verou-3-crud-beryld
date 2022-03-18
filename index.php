<?php

declare (strict_types = 1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once 'config.php';
require_once 'classes/DatabaseManager.php';
require_once 'classes/CardRepository.php';

//Create connection with database
$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);
$databaseManager->connect();

//Go find the information
$cardRepository = new CardRepository($databaseManager);
$cards = $cardRepository->get();

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$action = $_GET['action'] ?? null;

switch ($action) {
    case 'create':
         create($cardRepository);
        break;

    case 'editing' :   //TODO: Need to change name !!!!
        update($cardRepository);
        break;

    case 'update' :    //TODO: Need to change name !!!!
        edited($cardRepository);
        break;

    case 'clickDelete' :
        clickDelete($cardRepository);
        break;

    case 'delete' :
        delete($cardRepository);
        break;

    case 'cancel':
        cancel($cardRepository);
        break;

    default:
        overview($cards);
        break;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function overview($cards)
    {
        require 'overview.php';
    }

    function create($cardRepository)
    {
       $cardRepository->create();
       header("Location: index.php");
       exit();
        // TODO: provide the create logic
    }

    function update($cardRepository)
    {
        $cardRepository->update();
    }

     function edited($cardRepository)
    {
        $cardRepository->edited();
        header("Location: index.php");
        exit();
    }

    function clickDelete($cardRepository)
    {
        $cardRepository->clickDelete();
    }

    function delete($cardRepository)
    {
        $cardRepository->delete();
        header("location: index.php");
        exit();

    }
    function cancel($cardRepository)
    {
        header("location: index.php");
        exit();
    }

