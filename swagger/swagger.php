<?php
require_once __DIR__ . '/SqlTables.php';
require_once __DIR__ . '/Tables.php';
require_once __DIR__ . '/Models.php';
require_once __DIR__ . '/Clients.php';

$json = file_get_contents(__DIR__ . '/swagger.json');

$swagger = json_decode($json);

$options = getopt(null, ['sql:', 'models:', 'tables:', 'clients:']);

if (isset($options['sql']))
{
    $sql = new SqlTables($swagger->definitions);

    $sql->generate($options['sql']);
}

if (isset($options['tables']))
{
    $tables = new Tables($swagger->definitions);

    $tables->generate($options['tables']);
}

if (isset($options['models']))
{
    $models = new Models($swagger->definitions);

    $models->generate($options['models']);
}

if (isset($options['clients']))
{
    $clients = new Clients($swagger->paths);

    $clients->generate($options['clients']);
}
