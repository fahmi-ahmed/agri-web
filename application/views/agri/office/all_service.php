<?= br(5); ?>
<hr>
<?php for ($i = 0;  $i < count($ser); ++$i) { ?>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<ul>
				<li>
					<?= $ser[$i]->ser_dsc; ?>
					<?php if ($this->session->userdata('s_logged_in') == TRUE || $this->session->userdata('office') == $ser[$i]->office_id): ?>
						<?= anchor('Office/edits/'.$ser[$i]->ser_id,'Edit'); ?>
					<?php endif ?>
					<?php if ($this->session->userdata('s_logged_in') == TRUE) : ?>
						<?= anchor('Office/deletes/'.$ser[$i]->ser_id,'Delete'); ?>
					<?php endif ?>
					<br>
					<small class="text-muted"><?= "service of ".$ser[$i]->office_name; ?></small>
				</li>
			</ul>
		</div>
	</div>
<?php } ?>
<div class="row">
    <div class="col-md-8">
        <center><?= $pagination; ?></center>
    </div>
</div>