<?php

class SqlTables
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
            $table_name = $this->getName($definition_key);

            if ($table_name != '')
            {
                ob_start();

                include 'SqlTable.tpl.php';

                $contents = ob_get_clean();

                $f = fopen("$output/MindBody/SqlTables/{$table_name}.sql", 'w');

                fwrite($f, $contents);

                fclose($f);

                echo $table_name . PHP_EOL;
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

        return 'mindbody_' . $this->snakeCase($nm);
    }

    public function getType($p)
    {
        $ref = '$ref';

        if (isset($p->type))
        {
            switch ($p->type)
            {
                case 'boolean':
                    return 'smallint';
                case 'integer':
                    return 'int';
                case 'number':
                    return 'float';
                case 'string':
                    return 'varchar(50)';
            }

            return $p->type;
        }

        return 'another-object';
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
