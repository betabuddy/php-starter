<?php require './vendor/autoload.php';

define("CURRENT_PAGE", "index");

include './include/header.php';

?>

<div class="container">
    <div class="signup-promo">
        <h1>Everything is Awesome!</h1>
        <p class="lead">
            Our app is going to be super awesome
            <br>&hellip;it's just not ready yet
        </p>
    </div>
</div><!-- /.container -->


<div class="container">
    <h3 style='text-align: center;'>Sign up to get updates and early access</h3>
    <!-- Begin MailChimp Signup Form -->
    <link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
    <div id="mc_embed_signup">
        <form action="//betabuddy.us8.list-manage.com/subscribe/post?u=d936a690f6603c79d69ffe13a&amp;id=aa0af00ac0" 
              method="post" id="mc-embedded-subscribe-form" 
              name="mc-embedded-subscribe-form" 
              class="validate form-horizontal"
              style="padding-left: 0px;"
              target="_blank" novalidate>
            <div class="form-group">
                <div class="col-lg-12">
                    <input type="email" 
                           value="" 
                           name="EMAIL" 
                           class="required email form-control" 
                           id="mce-EMAIL"
                           placeholder="just.me@example.com">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <input type="submit" 
                           value="I want some beta awesomeness!" 
                           name="subscribe" 
                           id="mc-embedded-subscribe" 
                           class="btn btn-success" 
                           style="margin:0px auto; border-width: 0px;">
                </div>
            </div>
            <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;"><input type="text" name="b_d936a690f6603c79d69ffe13a_aa0af00ac0" tabindex="-1" value=""></div>
        </form>
    </div>
</div><!-- /.container -->




<!--End mc_embed_signup-->



<?php

include './include/footer.php';

//eof