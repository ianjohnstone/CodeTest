<?php
/* @var $this AthletesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Athletes',
);

$this->menu=array(
	array('label'=>'Create Athletes', 'url'=>array('create')),
	array('label'=>'Manage Athletes', 'url'=>array('admin')),
);
?>

<h1>Athletes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
