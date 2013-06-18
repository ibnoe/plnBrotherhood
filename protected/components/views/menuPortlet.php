<?php 
/* @var $this SiteController */

	$id = Yii::app()->getRequest()->getQuery('id');
	$cpengadaan = Pengadaan::model()->find('id_pengadaan = "' . $id . '"');
?>
<ul>
		
	<?php if(Anggota::model()->exists('username = "' . Yii::app()->user->name . '"')){ ?>
		<?php if($cpengadaan->status == 'Penunjukan Panitia') { ?>
				<li class='onprogress' ><?php echo CHtml::link('Penunjukan Panitia',array("site/penunjukanpanitia","id"=>"$cpengadaan->id_pengadaan")); ?></li>
			<?php } else { ?>
				<li class='sudah' > <?php echo CHtml::link('Penunjukan Panitia',array("site/editpenunjukanpanitia","id"=>"$cpengadaan->id_pengadaan")); ?></li>
		<?php } ?>
		
		<?php if($cpengadaan->status == 'Penunjukan Panitia') { ?>
				<li class='belum'><?php echo 'Kualifikasi' ?></li>
			<?php } else if($cpengadaan->status == 'Kualifikasi') { ?>
				<li class='onprogress'><?php echo CHtml::link('Kualifikasi',array("site/checkpoint2","id"=>"$cpengadaan->id_pengadaan")); ?></li>
			<?php } else { ?>
				<li class='sudah'><?php echo CHtml::link('Kualifikasi',array("site/checkpoint2","id"=>"$cpengadaan->id_pengadaan")); ?></li>
		<?php } ?>
		
		<?php if(($cpengadaan->status == 'Penunjukan Panitia') || ($cpengadaan->status == 'Kualifikasi')) { ?>
				<li class='belum'><?php echo 'Pengambilan Dokumen Pengadaan' ?></li>
			<?php } else if($cpengadaan->status == 'Pengambilan Dokumen Pengadaan') { ?>
				<li class='onprogress'><?php echo CHtml::link('Pengambilan Dokumen Pengadaan',array("site/pengambilandokumenpengadaan","id"=>"$cpengadaan->id_pengadaan")); ?></li>
			<?php } else { ?>
				<li class='sudah'><?php echo CHtml::link('Pengambilan Dokumen Pengadaan',array("site/editpengambilandokumenpengadaan","id"=>"$cpengadaan->id_pengadaan")); ?></li>
		<?php } ?>
		
		<?php if(($cpengadaan->status == 'Penunjukan Panitia') || ($cpengadaan->status == 'Kualifikasi')) { ?>
				<li class='belum'><?php echo 'Annwijzing' ?></li>
			<?php } else if($cpengadaan->status == 'Aanwijzing') { ?>
				<li class='onprogress'><?php echo CHtml::link('Aanwijzing',array("site/aanwijzing","id"=>"$cpengadaan->id_pengadaan")); ?></li>
			<?php } else { ?>
				<li class='sudah'><?php echo CHtml::link('Aanwijzing',array("site/editaanwijzing","id"=>"$cpengadaan->id_pengadaan")); ?></li>
		<?php } ?>
		
		<?php if(($cpengadaan->status == 'Penunjukan Panitia') || ($cpengadaan->status == 'Kualifikasi') || ($cpengadaan->status == 'Aanwijzing')) { ?>
				<li class='belum'><?php echo 'Penawaran dan Evaluasi' ?></li>
			<?php } else if($cpengadaan->status == 'Penawaran dan Evaluasi') { ?>
				<li class='onprogress'><?php echo CHtml::link('Penawaran dan Evaluasi',array("site/checkpoint2","id"=>"$cpengadaan->id_pengadaan")); ?></li>
			<?php } else { ?>
				<li class='sudah'><?php echo CHtml::link('Penawaran dan Evaluasi',array("site/checkpoint2","id"=>"$cpengadaan->id_pengadaan")); ?></li>
		<?php } ?>
		
		<?php if(($cpengadaan->status == 'Penunjukan Panitia') || ($cpengadaan->status == 'Kualifikasi') || ($cpengadaan->status == 'Aanwijzing') || ($cpengadaan->status == 'Penawaran dan Evaluasi')) { ?>
				<li class='belum'><?php echo 'Negosiasi dan Klarifikasi' ?></li>
			<?php } else if($cpengadaan->status == 'Negosiasi dan Klarifikasi') { ?>
				<li class='onprogress'><?php echo CHtml::link('Negosiasi dan Klarifikasi',array("site/checkpoint2","id"=>"$cpengadaan->id_pengadaan")); ?></li>
			<?php } else { ?>
				<li class='sudah'><?php echo CHtml::link('Negosiasi dan Klarifikasi',array("site/checkpoint2","id"=>"$cpengadaan->id_pengadaan")); ?></li>
		<?php } ?>
		
		<?php if(($cpengadaan->status == 'Penunjukan Panitia') || ($cpengadaan->status == 'Kualifikasi') || ($cpengadaan->status == 'Aanwijzing') || ($cpengadaan->status == 'Penawaran dan Evaluasi') || ($cpengadaan->status == 'Negosiasi dan Klarifikasi')) { ?>
				<li class='belum'><?php echo 'Penentuan Pemenang' ?></li>
			<?php } else if($cpengadaan->status == 'Penentuan Pemenang') { ?>
				<li class='onprogress'><?php echo CHtml::link('Penentuan Pemenang',array("site/checkpoint2","id"=>"$cpengadaan->id_pengadaan")); ?></li>
			<?php } else { ?>
				<li class='sudah'><?php echo CHtml::link('Penentuan Pemenang',array("site/checkpoint2","id"=>"$cpengadaan->id_pengadaan")); ?></li>
		<?php } ?>
		
		<li class='sudah'><?php echo CHtml::link('Pengadaan Gagal',array("site/checkpoint2","id"=>"$cpengadaan->id_pengadaan")); ?></li>
		
		</br> </br>
		
		<li class='unggah'><?php echo CHtml::link('Unggah Dokumen',array("site/uploader","id"=>"$cpengadaan->id_pengadaan")); ?></li>
		<li class='lihat'><?php echo CHtml::link('Lihat Dokumen',array("site/dokumengenerator","id"=>"$cpengadaan->id_pengadaan")); ?></li>
		
	<?php } else if(Kdivmum::model()->exists('username = "' . Yii::app()->user->name . '"')){ ?>
		<li><?php echo CHtml::link('TOR dan RAB',array('site/tordanrab',"id"=>"$cpengadaan->id_pengadaan")); ?></li>   
		<li><?php echo CHtml::link('Nota Dinas Perintah Pengadaan',array('site/notadinasperintahpengadaan',"id"=>"$cpengadaan->id_pengadaan")); ?></li>
		<li><?php echo CHtml::link('Pakta Integritas Panitia',array('site/paktaintegritaspanitia',"id"=>"$cpengadaan->id_pengadaan")); ?></li>
	
	<?php } else{?>
	
	<?php } ?>
	
	
</ul>