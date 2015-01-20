<?php
/* @var $this ResultsController */
/* @var $model Results */

$this->breadcrumbs=array(
	'Results'=>array('index'),
	$model->ResultID,
);

$this->menu=array(
	array('label'=>'List Results', 'url'=>array('index')),
	array('label'=>'Create Results', 'url'=>array('create')),
	array('label'=>'Update Results', 'url'=>array('update', 'id'=>$model->ResultID)),
	array('label'=>'Delete Results', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ResultID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Results', 'url'=>array('admin')),
);
?>

<h1>View Results #<?php echo $model->ResultID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ResultID',
		'EventID',
		'AthleteID',
		'Gold',
		'Silver',
		'Bronze',
	),
)); ?>
