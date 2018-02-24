<!-- Header -->
<header  id="page-top">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in" style="color: black">Services Provided</div>
            <hr class="small">
        </div>
    </div>
</header>

<br>

<div class="row">
	<h3 class="text-center">Agriculture Water Mines and Energy Bureau <button style="border: 1px solid black;" id="ser1">Services»</button></h3>
	<div class="col-xs-7">
		<ul>
			<li>
				<h4>Agriculture Development Office <button style="border: 1px solid blue;" id="ser2">»</button></h4><br>
				<ul>
					<li><h5>Natural Resources Land Managment Directorate <button style="border: 1px solid red;" id="ser12">»</button></h5></li>
					<li><h5>Agricultural Extension <button style="border: 1px solid red;" id="ser22">»</button></h5></li>
					<li><h5>Animal Production and Health Managment <button style="border: 1px solid red;" id="ser32">»</button></h5></li>
				</ul>
			</li>
			<br>
			<li>
				<h4>Water Mines and Energy Office <button style="border: 1px solid blue;" id="ser3">»</button></h4><br>
				<ul>
					<li><h5>Water Resource Development <button style="border: 1px solid red;" id="ser13">»</button></h5></li>
					<li><h5>Mines and Energy Development <button style="border: 1px solid red;" id="ser23">»</button></h5></li>
					<li><h5>Water Drilling <button style="border: 1px solid red;" id="ser33">»</button></h5></li>
				</ul>
			</li>
			<br>
			<li>
				<h4>Bla Bla <button style="border: 1px solid blue;" id="ser4">»</button></h4><br>
				<ul>
					<li><h5>Bla1 <button style="border: 1px solid red;" id="ser14">»</button></h5></li>
					<li><h5>Bla2 <button style="border: 1px solid red;" id="ser24">»</button></h5></li>
					<li><h5>Bla3 <button style="border: 1px solid red;" id="ser34">»</button></h5></li>
				</ul>
			</li>
			<br>
			<li><h4>Food Security and Rural Employement Agency <button style="border: 1px solid blue;" id="ser5">»</button></h4></li>
		</ul>
	</div>
	<div class="col-xs-5">
		<div id="serl1">
			<?php foreach ($ser1 as $row1): ?>
				<h4 class="text-muted">Services</h4>
				<ul>
					<li><?= $row1->ser_dsc?></li>
				</ul>
			<?php endforeach ?>
		</div>
		<div id="serl2">
			<?php foreach ($ser2 as $row2): ?>
				<h4 class="text-muted">Services</h4>
				<ul>
					<li><?= $row2->ser_dsc?></li>
				</ul>
			<?php endforeach ?>
		</div>
		<div id="serl12">
			<?php foreach ($ser12 as $row12): ?>
				<h4 class="text-muted">Services</h4>
				<ul>
					<li><?= $row12->ser_dsc?></li>
				</ul>
			<?php endforeach ?>
		</div>
		<div id="serl22">
			<?php foreach ($ser22 as $row2): ?>
				<h4 class="text-muted">Services</h4>
				<ul>
					<li><?= $row22->ser_dsc?></li>
				</ul>
			<?php endforeach ?>
		</div>
		<div id="serl32">
			<?php foreach ($ser32 as $row32): ?>
				<h4 class="text-muted">Services</h4>
				<ul>
					<li><?= $row32->ser_dsc?></li>
				</ul>
			<?php endforeach ?>
		</div>
		<div id="serl3">
			<?php foreach ($ser3 as $row3): ?>
				<h4 class="text-muted">Services</h4>
				<ul>
					<li><?= $row3->ser_dsc?></li>
				</ul>
			<?php endforeach ?>
		</div>
		<div id="serl13">
			<?php foreach ($ser13 as $row13): ?>
				<h4 class="text-muted">Services</h4>
				<ul>
					<li><?= $row13->ser_dsc?></li>
				</ul>
			<?php endforeach ?>
		</div>
		<div id="serl23">
			<?php foreach ($ser23 as $row23): ?>
				<h4 class="text-muted">Services</h4>
				<ul>
					<li><?= $row23->ser_dsc?></li>
				</ul>
			<?php endforeach ?>
		</div>
		<div id="serl33">
			<?php foreach ($ser33 as $row33): ?>
				<h4 class="text-muted">Services</h4>
				<ul>
					<li><?= $row33->ser_dsc?></li>
				</ul>
			<?php endforeach ?>
		</div>
		<div id="serl4">
			<?php foreach ($ser4 as $row4): ?>
				<h4 class="text-muted">Services</h4>
				<ul>
					<li><?= $row4->ser_dsc?></li>
				</ul>
			<?php endforeach ?>
		</div>
		<div id="serl14">
			<?php foreach ($ser14 as $row14): ?>
				<h4 class="text-muted">Services</h4>
				<ul>
					<li><?= $row14->ser_dsc?></li>
				</ul>
			<?php endforeach ?>
		</div>
		<div id="serl24">
			<?php foreach ($ser24 as $row24): ?>
				<h4 class="text-muted">Services</h4>
				<ul>
					<li><?= $row24->ser_dsc?></li>
				</ul>
			<?php endforeach ?>
		</div>
		<div id="serl34">
			<?php foreach ($ser34 as $row34): ?>
				<h4 class="text-muted">Services</h4>
				<ul>
					<li><?= $row34->ser_dsc?></li>
				</ul>
			<?php endforeach ?>
		</div>
		<div id="serl5">
			<?php foreach ($ser5 as $row5): ?>
				<h4 class="text-muted">Services</h4>
				<ul>
					<li><?= $row5->ser_dsc?></li>
				</ul>
			<?php endforeach ?>
		</div>
	</div>
</div>