<?= br(6); ?>
<?= form_open('Office/twos'); ?>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			
				<div>
					<textarea class="form-control" name="ser_dsc" cols="92" rows="10" placeholder="Service"></textarea>
					<b style="color: red;"><?php echo form_error('ser_dsc'); ?></b>
				</div>
				<?= br(); ?>
				<div><button class="btn btn-primary" type="submit" >Submit</button></div>
		</div>
	</div>
<?= form_close(); ?>
<hr>
<div class="row">
	<center><p>To view all Known services click below</p>
	<?= anchor('Office/all_service','Previously Known services', 'class="btn btn-warning"'); ?></center>
</div>