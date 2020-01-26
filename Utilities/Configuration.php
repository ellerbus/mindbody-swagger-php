<?php
namespace Utilities;

/**
 *
 */
class Configuration
{
    private static $cfg;

    /**
     *
     */
    public static function &Instance()
    {
        if (Configuration::$cfg == null)
        {
            Configuration::$cfg = new Configuration();
        }
        return Configuration::$cfg;
    }

    private function __construct()
    {
        $ini = realpath(__DIR__ . '/../../../configuration.ini');

        if (!file_exists($ini))
        {
            die('Could not find Configuration File');
        }

        $data = parse_ini_file($ini, true);

        foreach ($data as $section => $values)
        {
            $this->$section = new \stdClass();

            foreach ($values as $key => $value)
            {
                $this->$section->$key = $value;
            }
        }
    }
}
