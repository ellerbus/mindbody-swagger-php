<?php

class ClientMethod
{
    public $url;

    public $name;

    public $http_method;

    public $operation;

    /**
     * gets allsales from the following path
     * api/public/v6/sale/allsales
     *
     */
    public function getPath()
    {
        $paths = explode('/', rtrim($this->url, '/'));

        $length = count($paths);

        return $paths[$length - 2] . '/' . $paths[$length - 1];
    }

    public function getResponse()
    {
        $ok = '200';
        $ref = '$ref';

        $class = $this->operation->responses->$ok->schema->$ref ?? '';

        if ($class == '')
        {
            return '';
        }

        $items = explode('/', $class);

        $class = array_pop($items);

        return " : \\MindBody\\Models\\" . $class;
    }

    public function getRequest()
    {
        global $swagger;

        if ($this->http_method == 'post')
        {
            foreach ($this->operation->parameters as $parm)
            {
                if ($parm->in == 'body')
                {
                    $ref = '$ref';

                    $items = explode('/', $parm->schema->$ref);

                    $class = array_pop($items);

                    return "\\MindBody\\Models\\" . $class . ' $request';
                }
            }
        }
        elseif ($this->http_method == 'get')
        {
            $nm = $this->name . 'Request';

            if (property_exists($swagger->definitions, $nm))
            {
                return "\\MindBody\\Models\\" . $nm . ' $request';
            }
        }

        return '';
    }
}
