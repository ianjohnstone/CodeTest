<?php
/* @var $this AthletesController */
/* @var $model Athletes */

$this->breadcrumbs=array(
	'Athletes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Athletes', 'url'=>array('index')),
	array('label'=>'Manage Athletes', 'url'=>array('admin')),
);
?>

<h1>Create Athletes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>