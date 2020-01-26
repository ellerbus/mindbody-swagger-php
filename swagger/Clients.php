<?php
require_once './Client.php';
require_once './ClientMethod.php';

class Clients
{
    public $paths;

    public $clients = [];

    public function __construct($paths)
    {
        $this->paths = $paths;
    }

    public function generate()
    {
        $this->generateClients();
        $this->generateClasses();
    }

    private function generateClients()
    {
        foreach ($this->paths as $path_key => $path)
        {
            $client = null;

            foreach ($path as $http_method => $operation)
            {
                list($client, $method) = explode('_', $operation->operationId);

                if (!isset($this->clients[$client]))
                {
                    $this->clients[$client] = new Client($client);
                }

                $client_method = new ClientMethod();

                $client_method->http_method = $http_method;
                $client_method->url = $path_key;
                $client_method->name = $method;
                $client_method->operation = $operation;

                $this->clients[$client]->methods[] = $client_method;
            }
        }
    }

    private function generateClasses()
    {
        foreach ($this->clients as $client_key => $client)
        {
            ob_start();

            include 'swagger-client.tpl.php';

            $contents = ob_get_clean();

            $f = fopen("../MindBody/Clients/{$client_key}Client.php", 'w');

            fwrite($f, '<?php' . PHP_EOL);
            fwrite($f, $contents);

            fclose($f);

            echo $client_key . PHP_EOL;
        }
    }

    // public function getName($nm)
    // {
    //     if (substr($nm, -strlen('Request')) === 'Request')
    //     {
    //         return $nm;
    //     }
    //     if (substr($nm, -strlen('Response')) === 'Response')
    //     {
    //         return $nm;
    //     }

    //     return $nm . 'Model';
    // }

    public function getDescription($p)
    {
        $c = $p->description ?? 'none';

        $c = str_replace(["\r\n", "\r", "<br/>", "<br />"], '', $c);

        return wordwrap($c, 75, "\n     * ");
    }

    // public function getType($p)
    // {
    //     $ref = '$ref';

    //     if (isset($p->type))
    //     {
    //         if ($p->type == 'array' && isset($p->items->type))
    //         {
    //             return 'arrayof[' . $p->items->type . ']';
    //         }
    //         if ($p->type == 'array' && isset($p->items->$ref))
    //         {
    //             return 'arrayof[' . $p->items->$ref . ']';
    //         }
    //         return $p->type;
    //     }

    //     if (isset($p->$ref))
    //     {
    //         return $p->$ref;
    //     }

    //     return 'none';
    // }

    // public function getFormat($p)
    // {
    //     if (isset($p->type))
    //     {
    //         if ($p->type == 'array' && isset($p->items))
    //         {
    //             return $p->items->format ?? 'none';
    //         }
    //         return $p->format ?? 'none';
    //     }

    //     return 'none';
    // }

    // public function getEnum($p)
    // {
    //     if (isset($p->enum))
    //     {
    //         return join(', ', $p->enum);
    //     }

    //     return 'none';
    // }
}
