<?= br(6); ?>
<?php foreach ($msg as $row): ?>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h4><?= "Message From: ".$row->pos_name." of ".$row->office_name; ?></h4>
			<p><?= $row->msg_dsc; ?></p>
			<?= anchor('Office/editm/'.$row->msg_id,'Edit'); ?>
		</div>
	</div>
	<hr>
<?php endforeach ?>