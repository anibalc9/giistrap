<?php
/**
 * _view.php
 * @Author original Nicola Asun, sirin k -> http://www.yiiframework.com/extension/giiStrap/
 * @Tested on YiiStrap. Version 1.2.0
 * @Reworked by Anibal Centurion -> https://github.com/Ekaptenn
 * @package giiStrap.
 */


?>
<div class="view">

<?php
echo "\t<b><?php echo CHtml::encode(\$data->getAttributeLabel('{$this->tableSchema->primaryKey}')); ?>:</b>\n";
echo "\t<?php echo CHtml::link(CHtml::encode(\$data->{$this->tableSchema->primaryKey}),array('view','id'=>\$data->{$this->tableSchema->primaryKey})); ?>\n\t<br />\n\n";
$count=0;
foreach ($this->tableSchema->columns as $column) {
	if ($column->isPrimaryKey)
		continue;
	if (++$count==7)
		echo "\t<?php /*\n";
	echo "\t<b><?php echo CHtml::encode(\$data->getAttributeLabel('{$column->name}')); ?>:</b>\n";
	echo "\t<?php echo CHtml::encode(\$data->{$column->name}); ?>\n\t<br />\n\n";
}
if ($count>=7)
	echo "\t*/ ?>\n";
?>

</div>