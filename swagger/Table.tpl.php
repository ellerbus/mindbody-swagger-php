namespace MindBody\Tables;

/**
 *
 */
class <?=$class_name?> extends \Tables\Table
{
    protected $table = 'mindbody_<?=$table_name?>';

    /**
     *
     */
    public function queryAll()
    {
        $sql =
            "
                select  *
                from    {$this->table}
                order by name-column
            ";

        return $this->db->queryAll($sql);
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

    /**
     *  Import from a MindBody <?=$class_name?> response
     */
    public function importMindBody($data)
    {
        $this->db->begin();

        foreach ($data as $item)
        {
            $values = $this->convertMindBody($item);

            $this->db->insertOnConflict($this->table, $values);
        }

        $this->db->commit();

        return count($data);
    }

    /**
     * Convert a MindBody <?=$class_name?> to the table
     * array of values
     */
    private function convertMindBody($item)
    {
        $values = [
            <?php foreach ($definition->properties as $key => $property): ?>
            '<?=$this->snakeCase($key)?>' => $item-><?=$key?>, // <?=$this->getType($property)?>;
            <?php endforeach?>
        ];

        return $values;
    }
}
