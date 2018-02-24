<?= br(6);?>
<?php foreach ($news->result() as $row): ?>
	<?php if ($row->img !== 'img'): ?>
		<div class="row">
			<div class="col-xs-3 col-xs-offset-2">
				<h1><?= $row->news_title; ?></h1>
				<p class="text-muted"><?= "Posted By: ".$row->office_name; ?></p>
				<p class="text-muted"><?= "Posted Date: ".$row->created_date; ?></p>
			</div>
			<img style="border: 2px solid orange; border-radius: 50%;" src="<?php echo base_url().'/img/news/'.$row->img ?>" width="150px" height="150px">
		</div>
		<br>
		<div class="row">
			<div class="col-xs-8 col-xs-offset-1">
				<p><?= $row->news_dsc; ?></p>
			</div>
		</div>
	<?php else: ?>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
			<h1><?= $row->news_title; ?></h1>
			<p class="text-muted"><?= "Posted By: ".$row->office_name; ?></p>
			<p class="text-muted"><?= "Posted Date: ".$row->created_date; ?></p>
			<p><?= $row->news_dsc; ?></p>
		</div>
	<?php endif ?>	
<?php endforeach ?>