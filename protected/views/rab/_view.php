<?php
/* @var $this RabController */
/* @var $data Rab */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dokumen')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_dokumen), array('view', 'id'=>$data->id_dokumen)); ?>
	<br />


</div>