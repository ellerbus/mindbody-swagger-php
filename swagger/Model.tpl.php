namespace MindBody\Models;

/**
 * Generated <?=date('Y-m-d H:i')?>;
 */
class <?=$class_name?>

{
    <?php foreach ($definition->properties as $key => $property): ?>

    /**
     * <?=$this->getDescription($property)?>;
     *
     * type   <?=$this->getType($property)?>;
     * format <?=$this->getFormat($property)?>;
     * enum   <?=$this->getEnum($property)?>;
     *
     */
    public $<?=$key?>;
    <?php endforeach?>

    <?php if (isset($definition->required) && count($definition->required) > 0): ?>

    /**
     *
     */
    public function __construct($<?=join(', $', $definition->required)?>)
    {
        parent::__construct();
        <?php foreach ($definition->required as $r): ?>

        $this-><?=$r?> = $<?=$r?>;
        <?php endforeach?>

    }
    <?php endif?>

}
