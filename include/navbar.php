<?php if (!defined('CURRENT_PAGE')) { exit; } ?>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <?php if (CURRENT_PAGE != "index") { ?>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php } ?>
            <a class="navbar-brand" href="/">Awesome App</a>
        </div>
        <?php if (CURRENT_PAGE != "index") { ?>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="<?php if (CURRENT_PAGE == "index") { echo "active"; } ?>"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
        <?php } ?>
    </div>
</div>


