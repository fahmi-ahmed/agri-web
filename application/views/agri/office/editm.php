<?= br(6); ?>
<?php echo form_open('Office/editm'); ?>
<?php foreach ($query as $row) : ?>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div>
			<h3 class="text-muted">Edit message</h3>
		</div>
		<div>
			<?= form_textarea('msg_dsc', $row->msg_dsc, 'class="form-control"');?>
			<b style="color: red;"><?php echo form_error('msg_dsc'); ?></b>
		</div>
		<?= br(); ?>
		<?php echo form_submit('submit', 'update', 'class="btn btn-success"'); ?>
		or <?php echo anchor('Office/sixm','cancel');?>
		<?php echo form_hidden('id', $row->msg_id); ?>
		<?php echo form_hidden('user_id', $row->user_id); ?>
	</div>
</div>
<?php endforeach; ?>
<?php echo form_close() ; ?>