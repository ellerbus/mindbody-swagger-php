<?php
namespace Utilities;

/**
 * Database Utility Class for PostgreSQL
 */
class Database
{
    private static $db;
    private $conn;

    /**
     *
     */
    public static function &Instance()
    {
        if (Database::$db == null)
        {
            Database::$db = new Database();
        }
        return Database::$db;
    }

    /**
     *
     */
    public function __construct()
    {
        $cfg = Configuration::Instance()->database;

        $host = $cfg->host;
        $port = $cfg->port;
        $name = $cfg->name;
        $user = $cfg->user;
        $pass = $cfg->pass;

        $this->conn = pg_connect("host=$host port=$port dbname=$name user=$user password=$pass");
    }

    /**
     *
     */
    public function __destruct()
    {
        pg_close($this->conn);
    }

    /**
     *
     */
    public function begin()
    {
        $this->execute('BEGIN');
    }

    /**
     *
     */
    public function commit()
    {
        $this->execute('COMMIT');
    }

    /**
     *
     */
    public function insertOnConflict($table, $data)
    {
        list($insert_columns, $insert_values, $update_values) = $this->createOnConflict($data);

        $sql = "insert into {$table}" .
            " ({$insert_columns})" .
            " values" .
            " ({$insert_values})" .
            " on conflict on constraint pk_{$table}" .
            " do update set {$update_values}";

        return $this->execute($sql);
    }

    private function createOnConflict($data)
    {
        $insert_columns = [];
        $insert_values = [];
        $update_values = [];

        foreach ($data as $key => $value)
        {
            $val = $this->escape($value);

            if ($key[0] == '^')
            {
                $insert_columns[] = substr($key, 1);
                $insert_values[] = $val;}
            else
            {
                $insert_columns[] = $key;
                $insert_values[] = $val;
                $update_values[] = "$key=$val";
            }
        }

        $ic = implode(', ', $insert_columns);
        $iv = implode(', ', $insert_values);
        $uv = implode(', ', $update_values);

        return [$ic, $iv, $uv];
    }

    /**
     * Insert
     */
    public function insert($table, $values)
    {
        pg_insert($this->conn, $table, $values);
    }

    /**
     * Insert
     */
    public function update($table, $data)
    {
        $set = [];
        $where = [];

        foreach ($data as $key => $value)
        {
            if ($key[0] == '^')
            {
                $where[substr($key, 1)] = $value;
            }
            else
            {
                $set[$key] = $value;
            }
        }

        pg_update($this->conn, $table, $set, $where);

    }

    /**
     * Execute a query
     */
    public function execute()
    {
        $resource = $this->query(func_get_args());

        $rows = pg_affected_rows($resource);

        pg_free_result($resource);

        return $rows;
    }

    /**
     * Select first row, first column
     */
    public function scalar()
    {
        $resource = $this->query(func_get_args());

        $row = pg_fetch_array($resource);

        pg_free_result($resource);

        if (isset($row))
        {
            return $row[0];
        }

        return null;
    }

    /**
     * Select all using a query
     */
    public function queryOne()
    {
        $resource = $this->query(func_get_args());

        $row = pg_fetch_object($resource);

        pg_free_result($resource);

        return $row;
    }

    /**
     * Select all using a query
     */
    public function queryAll()
    {
        $resource = $this->query(func_get_args());

        $results = [];

        while ($row = pg_fetch_object($resource))
        {
            $results[] = $row;
        }

        pg_free_result($resource);

        return $results;
    }

    /**
     * Select using a query
     */
    private function query($args)
    {
        $sql = $args[0];

        if (count($args) == 1)
        {
            return pg_query($this->conn, $sql);
        }

        $params = array_splice($args, 1);

        $resource = pg_query_params($this->conn, $sql, $params);

        return $resource;
    }

    /**
     *
     */
    private function escape($value)
    {
        if (is_null($value))
        {
            return "null";
        }

        if (is_string($value))
        {
            return "'" . pg_escape_string($value) . "'";
        }

        return strval($value);
    }
}
