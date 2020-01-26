<?php

class Tables
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

            if ($class_name != '')
            {
                $table_name = $this->snakeCase($class_name);

                ob_start();

                include 'Table.tpl.php';

                $contents = ob_get_clean();

                $f = fopen("$output/{$class_name}.php", 'w');

                fwrite($f, '<?php' . PHP_EOL);
                fwrite($f, $contents);

                fclose($f);

                echo $class_name . PHP_EOL;
            }
        }
    }

    public function getName($nm)
    {
        if (substr($nm, -strlen('Request')) === 'Request')
        {
            return null;
        }
        if (substr($nm, -strlen('Response')) === 'Response')
        {
            return null;
        }

        return $nm;
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

    /**
     *
     */
    public function snakeCase($text)
    {
        $expression = '/(?<=\d)(?=[A-Za-z])|(?<=[A-Za-z])(?=\d)|(?<=[a-z])(?=[A-Z])/';

        return strtolower(preg_replace($expression, '_', $text));
    }
}
