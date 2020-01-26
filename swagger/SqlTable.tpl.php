--
-- Generated <?=date('Y-m-d H:i')?>;
--
create table <?=$table_name?>

(
    <?php foreach ($definition->properties as $key => $property): ?>
    <?=str_pad($this->snakeCase($key), 30)?> <?=$this->getType($property)?> null,
    <?php endforeach?>

);

alter table <?=$table_name?>

    add constraint pk_<?=$table_name?>

    primary key (columns);