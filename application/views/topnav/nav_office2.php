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
        </div>
        <div class="navbar-collapse collapse">
          
            <ul class="nav navbar-nav">
                <li><?= anchor('office/two','News'); ?></li>
                <li><?= anchor('office/twos','Services'); ?></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><?= anchor('Office/logout','LOG_OUT'); ?></li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>