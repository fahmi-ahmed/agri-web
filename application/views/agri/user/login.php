<div id="log" style="background-color: blue;">
	<div class="container-in">
		<center><h1>Login</h1></center>
		<?= form_open('User','class="form-signin"'); ?>
			<div class="row">
				<div class="col-xs-5">
					<label>User name:</label>
					<?= form_input('user_name', '', 'class="form-control" autofocus'); ?>
					<b style="color: red;"><?php echo form_error('user_name'); ?></b>
					<br>
					<label>Password:</label>
					<input class="form-control" type="password" name="password">
					<b style="color: red;"><?php echo form_error('password'); ?></b>
				</div>
				<div class="col-xs-7">
					<label>Office:</label>
					<select name="office" class="form-control">
			            <option value="" disabled selected>--Login As Employee of--</option>
			            <?php foreach ($office as $row): ?>
			            	<option value="<?= $row->office_id; ?>"><?= $row->office_name; ?></option>
			            <?php endforeach ?>
			        </select>
			        <b style="color: red;"><?php echo form_error('office'); ?></b>
			    </div>
	        </div>
	        <hr>
	        <center><button class="btn btn-primary" type="submit">LOGIN</button></center>
	        <br>
	        <?= anchor('Agri','« Back','class="btn btn-default" style="float: left;"'); ?>
		<?= form_close(); ?>
	</div>
</div>