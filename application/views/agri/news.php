<!-- Header -->
<header  id="page-top">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in" style="color: black">News</div>
            <hr class="small">
            <b><h4 class="subheading" style="color: black; padding-top: 20px;">Agriculture Water Mines and Energy Bureau</h4></b>
        </div>
    </div>
</header>

<br>

<div class="row">
    <div class="col-md-8 col-md-offset-6">
    <?php 
    $attr = array("class" => "form-horizontal", "role" => "form", "id" => "form1", "name" => "form1");
    echo form_open("Agri/search", $attr);?>
        <div class="form-group">
            <div class="col-md-6">
                <input class="form-control" id="news_title" name="news_title" placeholder="Search for news..." type="text" value="<?= set_value('news_title'); ?>" />
            </div>
            <div class="col-md-6">
                <button id="btn_search" name="btn_search" type="submit" class="btn btn-default">search</button>
                <a href="<?= base_url('index.php/Agri/news'); ?>" class="btn btn-primary">Show All</a>
            </div>
        </div>
    <?php echo form_close(); ?>
    </div>
</div>

<br>

<div class="container">
	<?php if ($newslist): ?>
            <?php for ($i = 0; $i < count($newslist); ++$i) { ?>
            	<div class="row" style="margin: auto;">
        			<?php if ($newslist[$i]->img !== 'img'): ?>
        				<div class="col-xs-5">
        					<img style="width: 100%; height: 100%; border: 2px solid orange;" src="<?php echo base_url().'/img/news/'.$newslist[$i]->img ?>">
        				</div>
        				<div class="col-xs-7">
	            			<h1><?= $newslist[$i]->news_title; ?></h1>
	            			<p class="text-muted"><?= "Posted Date: ".$newslist[$i]->created_date; ?></p>
	            			<p><?= $newslist[$i]->news_dsc; ?></p>
	            		</div>
        			<?php else: ?>
        				<div class="col-xs-11">
	            			<h1><?= $newslist[$i]->news_title; ?></h1>
	            			<p class="text-muted"><?= "Posted Date: ".$newslist[$i]->created_date; ?></p>
	            			<p><?= $newslist[$i]->news_dsc; ?></p>
	            		</div>
        			<?php endif ?>
            	</div>
                <hr>
    		<?php } ?>
    <?php else: ?>
        <p style="color: red;">No news by that title name exists, Please try another!</p>
    <?php endif ?>
</div>

<div class="row">
    <div class="col-md-8">
        <center><?= $pagination; ?></center>
    </div>
</div>