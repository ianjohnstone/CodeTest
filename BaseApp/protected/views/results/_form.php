<?php
/* @var $this ResultsController */
/* @var $model Results */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'results-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'EventID'); ?>
		<?php echo $form->textField($model,'EventID'); ?>
		<?php echo $form->error($model,'EventID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AthleteID'); ?>
		<?php echo $form->textField($model,'AthleteID'); ?>
		<?php echo $form->error($model,'AthleteID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Gold'); ?>
		<?php echo $form->textField($model,'Gold'); ?>
		<?php echo $form->error($model,'Gold'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Silver'); ?>
		<?php echo $form->textField($model,'Silver'); ?>
		<?php echo $form->error($model,'Silver'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Bronze'); ?>
		<?php echo $form->textField($model,'Bronze'); ?>
		<?php echo $form->error($model,'Bronze'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->