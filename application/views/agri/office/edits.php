<?= br(6); ?>
<?php echo form_open('Office/edits'); ?>
<?php foreach ($query as $row) : ?>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div>
			<h3 class="text-muted">Edit your services</h3>
		</div>
		<div>
			<?= form_textarea('ser_dsc', $row->ser_dsc, 'class="form-control"');?>
			<b style="color: red;"><?php echo form_error('ser_dsc'); ?></b>
		</div>
		<?= br(); ?>
		<?php echo form_submit('submit', 'update', 'class="btn btn-success"'); ?>
		or <?php echo anchor('Office/all_service','cancel');?>
		<?php echo form_hidden('id', $row->ser_id); ?>
		<?php echo form_hidden('office_id', $row->office_id); ?>
	</div>
</div>
<?php endforeach; ?>
<?php echo form_close() ; ?>