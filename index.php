<?php

// Require the correct variable type to be used (no auto-converting)
declare (strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load you classes
require_once 'config.php';
require_once 'classes/DatabaseManager.php';
require_once 'classes/CardRepository.php';


$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);
$databaseManager->connect();


$cardRepository = new CardRepository($databaseManager);
$cards = $cardRepository->get();

// Get the current action to execute
// If nothing is specified, it will remain empty (home should be loaded)
//var_dump($_GET['donuts']);

$action = $_GET['action'] ?? null;
//$action->create();

// Load the relevant action
// This system will help you to only execute the code you want, instead of all of it (or complex if statements)

switch ($action) {
    case 'create':
         create($cardRepository);
        break;
    case 'editing' :
        update($cardRepository);
        break;
    case 'update' :
        edited($cardRepository);
        break;
    default:
        overview($cards);
        break;
}

function overview($cards)
{
    // Load your view
    // Tip: you can load this dynamically and based on a variable, if you want to load another view
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

