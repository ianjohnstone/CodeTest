<?php
/* @var $this ResultsController */
/* @var $data Results */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ResultID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ResultID), array('view', 'id'=>$data->ResultID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EventID')); ?>:</b>
	<?php echo CHtml::encode($data->EventID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AthleteID')); ?>:</b>
	<?php echo CHtml::encode($data->AthleteID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Gold')); ?>:</b>
	<?php echo CHtml::encode($data->Gold); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Silver')); ?>:</b>
	<?php echo CHtml::encode($data->Silver); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Bronze')); ?>:</b>
	<?php echo CHtml::encode($data->Bronze); ?>
	<br />


</div>