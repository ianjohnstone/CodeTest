<?php
/* @var $this CountriesController */
/* @var $model Countries */

$this->breadcrumbs=array(
	'Countries'=>array('index'),
	$model->Name=>array('view','id'=>$model->CountryID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Countries', 'url'=>array('index')),
	array('label'=>'Create Countries', 'url'=>array('create')),
	array('label'=>'View Countries', 'url'=>array('view', 'id'=>$model->CountryID)),
	array('label'=>'Manage Countries', 'url'=>array('admin')),
);
?>

<h1>Update Countries <?php echo $model->CountryID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>