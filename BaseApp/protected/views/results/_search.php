<?php
/* @var $this ResultsController */
/* @var $model Results */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ResultID'); ?>
		<?php echo $form->textField($model,'ResultID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EventID'); ?>
		<?php echo $form->textField($model,'EventID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AthleteID'); ?>
		<?php echo $form->textField($model,'AthleteID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Gold'); ?>
		<?php echo $form->textField($model,'Gold'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Silver'); ?>
		<?php echo $form->textField($model,'Silver'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Bronze'); ?>
		<?php echo $form->textField($model,'Bronze'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->