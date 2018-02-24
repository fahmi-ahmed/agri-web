<?= br(6); ?>
<?php foreach ($abo as $row): ?>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h4><?= $row->about_title; ?></h4>
			<p class="text-muted"><?= $row->timeline; ?></p>
			<p><?= $row->about_dsc; ?></p>
			<?= anchor('Office/edita/'.$row->id,'Edit'); ?>
		</div>
	</div>
	<hr>
<?php endforeach ?>