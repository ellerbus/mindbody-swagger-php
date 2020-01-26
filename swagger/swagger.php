<?php
require_once './Models.php';
require_once './Clients.php';

$json = file_get_contents('./swagger.json');

$swagger = json_decode($json);

$models = new Models($swagger->definitions);

$models->generate();

$clients = new Clients($swagger->paths);

$clients->generate();
