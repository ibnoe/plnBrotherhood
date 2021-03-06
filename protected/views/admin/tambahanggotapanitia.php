<?php
	$this->pageTitle=Yii::app()->name . ' | Tambah Anggota ' . $panitia->nama_panitia;
?>

<?php if(Yii::app()->user->hasFlash('gagal')): ?>
	<div class="flash-error">
		<?php echo Yii::app()->user->getFlash('gagal'); ?>
		<script type="text/javascript">
			setTimeout(function() {
				$('.flash-error').animate({
					height: '0px',
					marginBottom: '0em',
					padding: '0em',
					opacity: '0.0'
				}, 1000, function() {
					$('.flash-error').hide();
				});
			}, 2000);
		</script>
	</div>
<?php endif; ?>

<h2><?php echo $panitia->nama_panitia; ?></h2>

<div class="kelompokform">
	<div class="form">
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'divisi-form',
			'enableAjaxValidation'=>false,
		)); ?>

		<div class="row">
			<?php echo $form->labelEx($anggota,'Nama pengguna'); ?>
			<?php $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
				'name'=>'Anggota[username]',
				'value'=>$anggota->username,
				'sourceUrl'=>array('admin/autocomplete'),
				'options'=>array(
					'minLength'=>'2',
					'select'=>'js:function(event, ui) {
						$.ajax({
							type: "post",
							dataType: "json",
							url: "' . Yii::app()->createUrl('admin/userdetail') . '",
							data: {username: ui.item.label},
							success: function(data) {
								$("#Anggota_nama").val(data.nama);
								$("#Anggota_email").val(data.email);
							},
						});
					}',
				),
				'htmlOptions'=>array(
					'size'=>56,
					'maxlength'=>256,
				),
			));
			?>
			<?php echo $form->error($anggota,'username'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($anggota,'Nama'); ?> 
			<?php echo $form->textField($anggota,'nama',array('size'=>56,'maxlength'=>256)); ?>
			<?php echo $form->error($anggota,'nama'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($anggota,'E-mail'); ?> 
			<?php echo $form->textField($anggota,'email',array('size'=>56,'maxlength'=>256)); ?>
			<?php echo $form->error($anggota,'email'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($anggota,'Jabatan'); ?> 
			<?php echo $form->dropDownList($anggota,'jabatan', array('Ketua'=>'Ketua', 'Sekretaris'=>'Sekretaris', 'Anggota'=>'Anggota'), array('empty'=>'-----Pilih Jabatan------')); ?>
			<?php echo $form->error($anggota,'jabatan'); ?>
		</div>

		<div class="row buttons">
			<?php echo CHtml::submitButton('Simpan',array('class'=>'sidafbutton')); ?>
		</div>

		<?php $this->endWidget(); ?>
	</div>
</div>
<br />

<div><?php echo CHtml::button('Kembali', array('submit'=>array('admin/detailpanitia', 'id'=>$panitia->id_panitia), 'class'=>'sidafbutton'));  ?></div>