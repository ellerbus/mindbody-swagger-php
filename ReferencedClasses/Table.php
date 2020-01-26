<?php
namespace Tables;

class Table
{
    protected $db;

    /**
     *
     */
    final public function __construct()
    {
        if (!isset($this->table))
        {
            throw new \LogicException(get_class($this) . ' must have a $table');
        }

        $this->db = \Utilities\Database::Instance();
    }

    /**
     *  InsertOnConflict a single record for this table
     */
    public function insertOnConflict($values)
    {
        $this->db->insertOnConflict($this->table, $values);
    }

    /**
     *  Insert a single record for this table
     */
    public function insert($values)
    {
        $this->db->insert($this->table, $values);
    }

    /**
     *  InsertOnConflict a single record for this table
     */
    public function update($values)
    {
        $this->db->update($this->table, $values);
    }

    /**
     *
     */
    public function count()
    {
        $sql =
            "
                select  count(1)
                from    {$this->table}
            ";

        return $this->db->scalar($sql);
    }
}
