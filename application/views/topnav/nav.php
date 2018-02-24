<!-- Navigation -->
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-custom navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#page-top">Agriculture Water Mines and Energy</a>
        </div>
        <div class="navbar-collapse collapse">
          
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <?php echo anchor(base_url()); ?>
                </li>
                <li class="active">
                    <?php echo anchor(base_url().'index.php/#services','Services'); ?>
                </li>
                <li>
                    <?php echo anchor(base_url().'index.php/#news','News'); ?>
                </li>
                <li class="active"> 
                    <?php echo anchor(base_url().'index.php/#about','About Us'); ?>
                </li>
                <li> 
                    <?php echo anchor(base_url().'index.php/#contact','Contact Us'); ?>
                </li>
                <li class="active">
                    <?php echo anchor('User','Login'); ?>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>