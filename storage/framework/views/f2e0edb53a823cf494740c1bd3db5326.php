<?php $categories = app('App\Models\Category'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo e($title or 'P&P'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content=" " />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>

        <!--CSS Person-->
        <link rel="stylesheet" href="<?php echo e(url('assets/portal/css/bootstrap.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('assets/portal/css/easy-responsive-tabs.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('assets/portal/css/flexslider.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('assets/portal/css/font-awesome.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('assets/portal/css/jquery-ui.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('assets/portal/css/style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('assets/portal/css/team.css')); ?>">

        <!--Favicon-->
        <link rel="icon" type="image/png" href="<?php echo e(url('assets/all/imgs/favicon.jpeg')); ?>">
    </head>
    <body>

    <!-- header -->
  
    <!-- //header -->
    <!-- header-bot -->
 
    <!-- //header-bot -->
    <!-- banner -->

    <!-- //banner-top -->

            <?php echo $__env->yieldContent('content'); ?>


  
    </div>
    <!-- //footer -->


        <!--jQuery-->
        <script src="<?php echo e(url('assets/all/js/jquery-3.1.1.min.js')); ?>"></script>

        <script src="<?php echo e(url('assets/portal/js/modernizr.custom.js')); ?>"></script>
        <script src="<?php echo e(url('assets/portal/js/minicart.min.js')); ?>"></script>

        <script>
            // Mini Cart
            paypal.minicart.render({
                action: '#'
            });

            if (~window.location.search.indexOf('reset=true')) {
                paypal.minicart.reset();
            }
        </script>

        <!-- //cart-js -->
        <!-- script for responsive tabs -->
        <script src="js/easy-responsive-tabs.js"></script>
        <script>
            $(document).ready(function () {
                $('#horizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion
                    width: 'auto', //auto or any width like 600px
                    fit: true,   // 100% fit in a container
                    closed: 'accordion', // Start closed if in accordion view
                    activate: function(event) { // Callback function if tab is switched
                        var $tab = $(this);
                        var $info = $('#tabInfo');
                        var $name = $('span', $info);
                        $name.text($tab.text());
                        $info.show();
                    }
                });
                $('#verticalTab').easyResponsiveTabs({
                    type: 'vertical',
                    width: 'auto',
                    fit: true
                });
            });
        </script>
        <!-- //script for responsive tabs -->
        <!-- stats -->
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.countup.js"></script>
        <script>
            $('.counter').countUp();
        </script>
        <!-- //stats -->
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/jquery.easing.min.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
        <!-- here stars scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear'
                 };
                 */

                $().UItoTop({ easingType: 'easeOutQuart' });

            });
        </script>
        <!-- //here ends scrolling icon -->






    <!-- for bootstrap working -->
    <script src="<?php echo e(url('assets/portal/js/bootstrap.js')); ?>"></script>


    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.1/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.1/jquery.fancybox.min.js"></script>

    <?php echo $__env->yieldPushContent('scripts'); ?>

    </body>
</html><?php /**PATH /home/rafael/docker/portal pb/resources/views/site/templates/template.blade.php ENDPATH**/ ?>