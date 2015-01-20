<?php
/* @var $this AthletesController */
/* @var $data Athletes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('AthleteID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->AthleteID), array('view', 'id'=>$data->AthleteID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Age')); ?>:</b>
	<?php echo CHtml::encode($data->Age); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CountryID')); ?>:</b>
	<?php echo CHtml::encode($data->CountryID); ?>
	<br />


</div>