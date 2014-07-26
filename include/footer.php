<?php if (!defined(CURRENT_PAGE)) { exit; } ?>

    <div class="footer">
        <div class="container">
            <p class="text-muted">
                &COPY; <?php echo gmdate("Y") ?> Awesome Apps Inc. - A Completely Unreal Company 
                <br><br>
                <small>
                    If you got here by accident you should know that while this site 
                    is fully functional, there is no special Awesome App we're launching.
                    We use this site to show people the 
                    <a href="http://betabuddy.co" target="_blank">awesome invitation management system</a>
                    we've built to help <a href="http://betabuddy.co" target="_blank">launch private beta programs</a>.
                </small>
            </p>
        </div>
    </div>    

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <?php if (array_key_exists('BB_IS_PRODUCTION_DEMO_SITE', $_SERVER)) { ?>
    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-52983450-2', 'auto');
      ga('send', 'pageview');
    </script>    
    <!-- Google Analytics -->
    <?php } ?>
</body>
</html>
