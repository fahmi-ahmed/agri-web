<?= br(6); ?>
<?php echo form_open_multipart('Office/edita'); ?>
<?php foreach ($query as $row) : ?>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div>
			<?= form_input('about_title', $row->about_title, 'class="form-control"'); ?>
			<b style="color: red;"><?php echo form_error('about_title'); ?></b>
		</div>
		<?= br(); ?>
		<div>
			<?= form_input('timeline', $row->timeline, 'class="form-control"'); ?>
			<b style="color: red;"><?php echo form_error('timeline'); ?></b>
		</div>
		<?= br(); ?>
		<div>
			<?= form_textarea('about_dsc', $row->about_dsc, 'class="form-control"');?>
			<b style="color: red;"><?php echo form_error('about_dsc'); ?></b>
		</div>
		<?= br(); ?>
		<?php echo form_submit('submit', 'update', 'class="btn btn-success"'); ?>
		or <?php echo anchor('Office/sixa','cancel');?>
		<?php echo form_hidden('id', $row->id); ?>
	</div>
</div>
<?php endforeach; ?>
<?php echo form_close() ; ?>