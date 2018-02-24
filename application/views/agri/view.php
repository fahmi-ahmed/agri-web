<!-- Header -->
<header  id="page-top">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Welcome To Agriculture Water Mines and Energy Bureau</div>
            <?= anchor('Agri/service','Services','class="btn btn-warning"'); ?>
        </div>
    </div>
</header>

<br>

<!-- service section -->
<section id="services" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Services</h2>
                <h3 class="section-subheading text-muted">Agriculture Water Mines and Energy Bureau Sevices</h3>
            </div>
        </div>
        <div class="row text-center">
            <?php foreach ($service2 as $row2): ?>
                <div class="col-md-4">
                    <img style="height: 100px; width: 100px; border-radius: 100%;" src="<?php echo base_url().'/images/agri.jpg' ?>">
                    <b><h4 class="service-heading">Agriculture Development Office Services</h4></b>
                    <b><p><?= $row2->ser_dsc; ?></p></b>
                </div>
            <?php endforeach ?>
            <?php foreach ($service3 as $row3): ?>
                <div class="col-md-4">
                    <img style="height: 100px; width: 100px; border-radius: 100%;" src="<?php echo base_url().'/images/water.jpg' ?>">
                    <b><h4 class="service-heading">Water Mines and Energy Office Services</h4></b>
                    <b><p><?= $row3->ser_dsc; ?></p></b>
                </div>
            <?php endforeach ?>
            <?php foreach ($service4 as $row4): ?>
                <div class="col-md-4">
                    <img style="height: 100px; width: 100px; border-radius: 100%;" src="<?php echo base_url().'/images/mineral.jpg' ?>">
                    <b><h4 class="service-heading">Food Security and Rural Employement Agency Services</h4></b>
                    <b><p><?= $row4->ser_dsc; ?></p></b>
                </div>
            <?php endforeach ?>
        </div>
        <?php foreach ($service5 as $row5): ?>
            <div class="row text-center">
                <div class="col-md-4 col-md-offset-4">
                    <img style="height: 100px; width: 100px; border-radius: 100%;" src="<?php echo base_url().'/images/agri.jpg' ?>">
                    <b><h4 class="service-heading">Bla Bla Office Services</h4></b>
                    <b><p><?= $row5->ser_dsc; ?></p></b>
                </div>
            </div>
        <?php endforeach ?>
        <hr>
        <?= anchor('Agri/service','More Services','class="btn btn-primary"'); ?>
    </div>
</section>

<br>

<!--News Section-->
<section id="news" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">NEWS</h2>
                <h3 class="section-subheading text-muted">Current News Headlines</h3>
            </div>
        </div>
        <div class="row">
            <?php foreach ($news as $row): ?>
                <div class="col-xs-6 col-lg-4">
                    <h2><?= $row->news_title; ?></h2>
                    <p><?= word_limiter($row->news_dsc,'40'); ?></p>
                    <p><?= anchor('Agri/selected_news/'.$row->news_id,'View Details &raquo;','class="btn btn-default"'); ?></p>
                </div><!--/.col-xs-6.col-lg-4-->
            <?php endforeach ?>
        </div>
        <hr>
        <?= anchor('Agri/news','More News','class="btn btn-primary"'); ?>
    </div>
</section>

<br>

<!--Message Section-->
<section class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Messages</h2>
                <h3 class="section-subheading text-muted">From Head and Vice Head of The Bureau</h3>
            </div>
        </div>
        <div class="row">
            <?php foreach ($msg1->result() as $msg1): ?>
                <div class="col-sm-4 text-center">
                    <p class="text-muted">Head</p>
                    <?php if ($msg1->img == 'img'): ?>
                        <img style="height: 70px; width: 70px; border-radius: 100%;" src="<?php echo base_url().'/img/user/default.jpg' ?>">
                    <?php else: ?>
                        <img style="height: 70px; width: 70px; border-radius: 100%;" src="<?php echo base_url().'/img/user/'.$msg1->img ?>">  
                    <?php endif ?>
                    <h4><?= $msg1->full_name; ?></h4>
                    <h4 class="service-heading"><?= $msg1->msg_title; ?></h4>
                    <p class="text-muted"><?= $msg1->msg_dsc; ?></p>
                </div>
            <?php endforeach ?>
            <?php foreach ($msg2->result() as $msg2): ?>
                <div class="col-sm-4 col-sm-offset-4 text-center">
                    <p class="text-muted">Vice Head</p>
                    <?php if ($msg2->img == 'img'): ?>
                        <img style="height: 70px; width: 70px; border-radius: 100%;" src="<?php echo base_url().'/img/user/default.jpg' ?>">
                    <?php else: ?>
                        <img style="height: 70px; width: 70px; border-radius: 100%;" src="<?php echo base_url().'/img/user/'.$msg2->img ?>">  
                    <?php endif ?>
                    <h4><?= $msg2->full_name; ?></h4>
                    <h4 class="service-heading"><?= $msg2->msg_title; ?></h4>
                    <p class="text-muted"><?= $msg2->msg_dsc; ?></p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<br>

<!--About Section-->
<section id="about" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">About</h2>
                <h3 class="section-subheading text-muted">Agriculture Water Mines and Energy Bureau</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-3">
                <?php foreach ($about1 as $abt1): ?>
                    <p class="text-muted"><?= $abt1->about_dsc; ?></p>
                    <h4 class="subheading"><?= $abt1->about_title; ?></h4>
                    <h4><?= $abt1->timeline; ?></h4>
                    <small style="color: blue">|</small>
                <?php endforeach ?>
            </div>
            <div class="col-xs-3 col-xs-offset-3">
                <?php foreach ($about3 as $abt3): ?>
                    <p class="text-muted"><?= $abt3->about_dsc; ?></p>
                    <h4 class="subheading"><?= $abt3->about_title; ?></h4>
                    <h4><?= $abt3->timeline; ?></h4>
                    <small style="color: blue">|</small>
                <?php endforeach ?>
            </div>
        </div>
        <div id="timeline" class="row"></div>
        <div class="row">
            <div class="col-xs-3 col-xs-offset-3">
                <?php foreach ($about2 as $abt2): ?>
                    <small style="color: blue">|</small>
                    <h4><?= $abt2->timeline; ?></h4>
                    <h4 class="subheading"><?= $abt2->about_title; ?></h4>
                    <p class="text-muted"><?= $abt2->about_dsc; ?></p>
                <?php endforeach ?>
            </div>
            <div class="col-xs-3 col-xs-offset-3">
                <?php foreach ($about4 as $abt4): ?>
                    <small style="color: blue">|</small>
                    <h4><?= $abt4->timeline; ?></h4>
                    <h4 class="subheading"><?= $abt4->about_title; ?></h4>
                    <p class="text-muted"><?= $abt4->about_dsc; ?></p>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>

<br>

<!--Contact Section-->
<section id="contact" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Contact Us</h2>
                <h3 class="section-subheading text-muted">Agriculture Water Mines and Energy Bureau</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4">
                <h3 class="text-muted">Call our Mobile: +251*******</h3>
            </div>
            <div class="col-xs-4">
                <h3 class="text-muted">Call our Office: 12****</h3>
            </div>
            <div class="col-xs-4">
                <h3 class="text-muted">Email us: Agr***@****.***</h3>
            </div>
        </div>
    </div>
</section>

<footer style="background-color: #000; color: #fff;">
    <div class="container">
        <div class="row" style="padding-top: 10px;">
            <div class="col-md-6">
                <span class="copyright">Copyright &copy; Agriculture Water Mines and Energy Bureau Website 2018</span>
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-4">
                <ul class="list-inline">
                    <li><a style="color: orange;" href="#">Privacy Policy</a>
                    </li>
                    <li><a style="color: orange;" href="#">Terms of Use</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>