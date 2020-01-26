<?php

class Models
{
    protected $definitions;

    public function __construct($definitions)
    {
        $this->definitions = $definitions;
    }

    public function generate($output)
    {
        foreach ($this->definitions as $definition_key => $definition)
        {
            $class_name = $this->getName($definition_key);

            ob_start();

            include 'Model.tpl.php';

            $contents = ob_get_clean();

            $f = fopen("$output/{$class_name}.php", 'w');

            fwrite($f, '<?php' . PHP_EOL);
            fwrite($f, $contents);

            fclose($f);

            echo $class_name . PHP_EOL;

            die();
        }
    }

    public function getName($nm)
    {
        if (substr($nm, -strlen('Request')) === 'Request')
        {
            return $nm;
        }
        if (substr($nm, -strlen('Response')) === 'Response')
        {
            return $nm;
        }

        return $nm . 'Model';
    }

    public function getDescription($p)
    {
        $c = $p->description ?? 'none';

        $c = str_replace(["\r\n", "\r", "<br/>", "<br />"], '', $c);

        return wordwrap($c, 75, "\n     * ");
    }

    public function getType($p)
    {
        $ref = '$ref';

        if (isset($p->type))
        {
            if ($p->type == 'array' && isset($p->items->type))
            {
                return 'arrayof[' . $p->items->type . ']';
            }
            if ($p->type == 'array' && isset($p->items->$ref))
            {
                return 'arrayof[' . $p->items->$ref . ']';
            }
            return $p->type;
        }

        if (isset($p->$ref))
        {
            return $p->$ref;
        }

        return 'none';
    }

    public function getFormat($p)
    {
        if (isset($p->type))
        {
            if ($p->type == 'array' && isset($p->items))
            {
                return $p->items->format ?? 'none';
            }
            return $p->format ?? 'none';
        }

        return 'none';
    }

    public function getEnum($p)
    {
        if (isset($p->enum))
        {
            return join(', ', $p->enum);
        }

        return 'none';
    }
}
