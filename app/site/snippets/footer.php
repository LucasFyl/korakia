        <footer>
          <div class="container">
            <p class="left three">Copyright © 2015 - Korokia Pensione</p>

            <ul class="social">
              <li class="f"><a href="#" target="_blank"><img src="assets/images/asset-icon-facebook.svg" alt="facebook" /></a></li>
              <li class="t"><a href="#" target="_blank"><img src="assets/images/asset-icon-twitter.svg" alt="twitter" /></a></li>
              <li class="i"><a href="#" target="_blank"><img src="assets/images/asset-icon-instagram.svg" alt="instagram" /></a></li>
            </ul>
          </div>
        </footer>

        <!--  import vendor scripts  -->
        <?= js('assets/scripts/vendor/jquery.min.js') ?>
        <?= js('assets/scripts/vendor/jquery-ui.min.js') ?>
        <?= js('assets/scripts/vendor/TweenMax.min.js') ?>
        <?= js('assets/scripts/vendor/retina.js') ?>
        <?= js('assets/scripts/vendor/slick.min.js') ?>
        <!--  import main user scripts  -->
        <?= js('assets/scripts/main.js') ?>
        <?= js('assets/scripts/modal.js') ?>
        <?= js('assets/scripts/navigation.js') ?>


        <!-- build:remove -->
        <script src="http://localhost:35729/livereload.js"></script>
        <!-- /build -->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
           (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
