<?= br(5); ?>
<hr>
<?php for ($i = 0;  $i < count($news); ++$i) { ?>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h3><?= $news[$i]->news_title. '<small>'." Posted date: [".$news[$i]->created_date." ]".'</small>' ; ?></h3>
			<?php if ($this->session->userdata('s_logged_in') == TRUE || $this->session->userdata('office') == $news[$i]->office_id): ?>
				<?= anchor('Office/editn/'.$news[$i]->news_id,'Edit'); ?>
			<?php endif ?>
			<?php if ($this->session->userdata('s_logged_in') == TRUE) : ?>
				<?= anchor('Office/deleten/'.$news[$i]->news_id,'Delete'); ?>
			<?php endif ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<small class="text-muted"><?= "Posted by: ".$news[$i]->office_name; ?></small>
			<p><?= $news[$i]->news_dsc; ?></p>
		</div>
	</div>
	<hr>
	</div>
<?php } ?>
<div class="row">
    <div class="col-md-8">
        <center><?= $pagination; ?></center>
    </div>
</div>