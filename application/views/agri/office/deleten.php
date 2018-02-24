<?= br(6); ?>
<?php echo form_open('Office/deleten'); ?>
<?php foreach ($query as $row) : ?>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<img style="height: 100px; width: 200px;" src="<?php echo base_url().'/img/news/' . $row->img ?>">
		<div class="row">
			<h1><?= $row->news_title; ?></h1>
		</div>
		<div class="row"> 
			<?= $row->news_dsc; ?>
		</div>
		<br /><br />
		<?php echo form_submit('submit', 'delete', 'class="btn btn-danger"'); ?>
		or <?php echo anchor('Office/all_news','cancel');?>
		<?php echo form_hidden('id', $row->news_id); ?>
	</div>
</div>
<?php endforeach; ?>
<?php echo form_close() ; ?>