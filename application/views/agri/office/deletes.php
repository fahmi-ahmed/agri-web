<?= br(6); ?>
<?php echo form_open('Office/deletes'); ?>
<?php foreach ($query as $row) : ?>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="row"> 
			<?= $row->ser_dsc; ?>
		</div>
		<br /><br />
		<?php echo form_submit('submit', 'delete', 'class="btn btn-danger"'); ?>
		or <?php echo anchor('Office/all_service','cancel');?>
		<?php echo form_hidden('id', $row->ser_id); ?>
	</div>
</div>
<?php endforeach; ?>
<?php echo form_close() ; ?>