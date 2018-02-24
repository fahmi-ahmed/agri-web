<?= br(6); ?>
<?php echo form_open_multipart('Office/editn'); ?>
<?php foreach ($query as $row) : ?>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div>
			<?php if ($row->img !== 'img'): ?>
				<img style="height: 100px; width: 200px;" src="<?php echo base_url().'/img/news/' . $row->img ?>">
				<p style="color: Red;">If you want to change the news image shown above laod new one! If you don't the old one will be used.</p>
			<?php endif ?>
		</div>
		<div>
			<p>New news image: </p>
			<input type="file" name="userfile" size="20">
		</div>
		<?= br(); ?>
		<div>
			<?= form_input('title', $row->news_title, 'class="form-control"'); ?>
			<b style="color: red;"><?php echo form_error('title'); ?></b>
		</div>
		<?= br(); ?>
		<div>
			<?= form_textarea('dsc', $row->news_dsc, 'class="form-control"');?>
			<b style="color: red;"><?php echo form_error('dsc'); ?></b>
		</div>
		<?= br(); ?>
		<?php echo form_submit('submit', 'update', 'class="btn btn-success"'); ?>
		or <?php echo anchor('Office/all_news','cancel');?>
		<?php echo form_hidden('id', $row->news_id); ?>
		<?php echo form_hidden('office_id', $row->office_id); ?>
	</div>
</div>
<?php endforeach; ?>
<?php echo form_close() ; ?>