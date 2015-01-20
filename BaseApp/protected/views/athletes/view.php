<?php
/* @var $this AthletesController */
/* @var $model Athletes */

$this->breadcrumbs=array(
	'Athletes'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Athletes', 'url'=>array('index')),
	array('label'=>'Create Athletes', 'url'=>array('create')),
	array('label'=>'Update Athletes', 'url'=>array('update', 'id'=>$model->AthleteID)),
	array('label'=>'Delete Athletes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->AthleteID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Athletes', 'url'=>array('admin')),
);
?>

<h1>View Athletes #<?php echo $model->AthleteID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'AthleteID',
		'Name',
		'Age',
		'CountryID',
	),
)); ?>
