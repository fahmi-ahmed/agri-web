<?= br(6); ?>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<?= form_open_multipart('Office/sixn')?>
			<div class="col-md-6">
				<label>Office:</label>
				<?php $attributes = 'class="form-control"';
		    	echo form_dropdown('office', $office, set_value('office'), $attributes); ?>
		        <b style="color: red;"><?php echo form_error('office'); ?></b>
			</div>
			<?= br(); ?>
			<div>
				<label>News image <small class="text-muted">(Note tht news image is optional)</small></label>
				<input type="file" name="userfile" size="20">
			</div>
			<?= br(); ?>
			<div>
				<input class="form-control" type="text" name="title" placeholder="News Headline" autofocus>
				<b style="color: red;"><?php echo form_error('title'); ?></b>
			</div>
			<?= br(); ?>
			<div>
				<?= $this->ckeditor->editor('dsc',''); ?>
				<b style="color: red;"><?php echo form_error('dsc'); ?></b>
			</div>
			<?= br(); ?>
			<div><button class="btn btn-primary" type="submit" >POST</button></div>
		<?= form_close(); ?>
	</div>
</div>
<hr>
<div class="row">
	<center><p>To view all posted news click below</p>
	<?= anchor('Office/all_news','Previously Posted News', 'class="btn btn-warning"'); ?></center>
</div>
