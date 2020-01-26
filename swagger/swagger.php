<?php
require_once './SqlTables.php';
require_once './Models.php';
require_once './Clients.php';

$output = $_GET['output'] ?? './';

if (!file_exists("$output/MindBody"))
{
    echo 'Creating Folders' . PHP_EOL;
    mkdir("$output/MindBody");
    mkdir("$output/MindBody/Clients");
    mkdir("$output/MindBody/Models");
    mkdir("$output/MindBody/Tables");
    mkdir("$output/MindBody/SqlTables");
}

$json = file_get_contents('./swagger.json');

$swagger = json_decode($json);

$models = new SqlTables($swagger->definitions);

$models->generate($output);

die();

$models = new Models($swagger->definitions);

$models->generate($output);

$clients = new Clients($swagger->paths);

$clients->generate($output);
