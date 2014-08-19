<?php if (!defined('CURRENT_PAGE')) { exit; } ?>

    <div class="footer">
        <div class="container">
            <p class="text-muted">
                &COPY; <?php echo gmdate("Y") ?> Awesome Apps Inc. - A Completely Unreal Company 
                <br><br>
                <small>
                    In case you happened to get here by accident we'll let you in on a little secret... 
                    there is no special Awesome App. This is a demo site to show off the 
                    <a href="http://betabuddy.co" target="_blank">awesome invitation management system</a>
                    we've built to help <a href="http://betabuddy.co" target="_blank">launch private beta programs</a>.
                    Feel free to play with the site and see how things work. Then head over to our
                    <a href="https://github.com/betabuddy" target="_blank">GitHub repo</a> where you can 
                    <a href="https://github.com/betabuddy/php-starter" target="_blank">browse the source code</a>
                    and read some of the <a href="javascript:alert('Oops! Still working on it. Good docs take forever to write.');">awesome documentation</a> for our API.
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
