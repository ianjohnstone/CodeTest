<?php
/* @var $this AthletesController */
/* @var $model Athletes */

$this->breadcrumbs=array(
	'Athletes'=>array('index'),
	$model->Name=>array('view','id'=>$model->AthleteID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Athletes', 'url'=>array('index')),
	array('label'=>'Create Athletes', 'url'=>array('create')),
	array('label'=>'View Athletes', 'url'=>array('view', 'id'=>$model->AthleteID)),
	array('label'=>'Manage Athletes', 'url'=>array('admin')),
);
?>

<h1>Update Athletes <?php echo $model->AthleteID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>