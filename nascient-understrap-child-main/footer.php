<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<!-- <?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?> -->

<footer class="footer">
    <div class="container">
        <div class="row">
        
            <?php get_template_part('global-templates/parts/footer/column-1'); ?>
            
            <?php get_template_part('global-templates/parts/footer/column-2'); ?>
            
            <?php get_template_part('global-templates/parts/footer/column-3'); ?>
            
            <?php get_template_part('global-templates/parts/footer/column-4'); ?>

        </div>
    </div>
</footer>


</div><!-- #page we need this extra closing tag here -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
<!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script> -->
<!-- <script src="https://kit.fontawesome.com/3cc536d3cb.js" crossorigin="anonymous"></script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->


<script>
    // Userback = window.Userback || {};
    // Userback.access_token = '4465|17969|0pC59czd68HZ897LGv6kO5wwVnhWaGlmymPyChuoHi8bwBWuKB';
    // (function(id) {
    //     var s = document.createElement('script');
    //     s.async = 1;
    //     s.src = 'https://static.userback.io/widget/v1.js';
    //     var parent_node = document.head || document.body;
    //     parent_node.appendChild(s);
    // })('userback-sdk');

    AOS.init({
        duration: 1200,
        disable: window.innerWidth < 768,
    });

    // jQuery(document).ready(function($) {

    //     function triggerScroll(targetObj) {
    //         let targetName = targetObj.attr("id"); //for console.log
    //         let targetFlag = false;
    //         let scrollTop = $(window).scrollTop();
    //         let scrollBottom = scrollTop + $(window).height();
    //         let targetTop = targetObj.offset().top;
    //         let targetBottom = targetTop + targetObj.height();
    //         // while loading
    //         if (scrollBottom > targetTop && scrollTop < targetBottom) {
    //             if (!targetFlag) {
    //                 console.log(targetName + ' is in sight'); //for console.log
    //                 targetObj.slick('slickPlay');
    //                 targetFlag = true;
    //             }
    //         } else {
    //             console.log(targetName + ' is not in sight'); //for console.log
    //             targetObj.slick('slickPause');
    //             targetFlag = false;
    //         }

    //         $(window).on('scroll', function() {
    //             scrollTop = $(window).scrollTop();
    //             scrollBottom = scrollTop + $(window).height();
    //             targetTop = targetObj.offset().top;
    //             targetBottom = targetTop + targetObj.height();
    //             if (scrollBottom > targetTop && scrollTop < targetBottom) {
    //                 // Start autoplay when entering the viewport
    //                 if (!targetFlag) {
    //                     console.log(targetName + ' is in sight');
    //                     targetObj.slick('slickPlay');
    //                     targetFlag = true;
    //                 }
    //             } else {
    //                 // Stop autoplay when you get out of the viewport
    //                 if (targetFlag) {
    //                     console.log(targetName + ' is not in sight'); //for console.log
    //                     targetObj.slick('slickPause');
    //                     targetFlag = false;
    //                 }
    //             }
    //         });
    //     }
    //     // Execute function
    //     triggerScroll($('.slider-work'));
    // });

    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 120) {
            jQuery('.sticky').addClass('header-scroll');
        } else {
            jQuery('.sticky').removeClass('header-scroll');
        }
    });


    jQuery('.arrow').on('click', function(e) {
        jQuery('ul.nav').toggleClass("drop-arrow");
        e.preventDefault();
    });

    // (function($) {
    //     $('.svc-tb-link').click(function() {
    //         var target_id = $(this).data('target_id')
    //         if (target_id != null) {
    //             target_id = '#' + target_id
    //             console.log(target_id)

    //             $('html, body').animate({
    //                 scrollTop: $(target_id).offset().top
    //             }, 1500);
    //         }
    //     })

    //     $(document).ready(function() {

    //         $(window).scroll(function() {



    //             threeBlocks = $('.three-col');
    //             var windowscroll = $(window).scrollTop();
    //             if (threeBlocks.length) {
    //                 if (windowscroll >= threeBlocks.offset().top) {
    //                     $(".partners").addClass("active");
    //                 } else {
    //                     $(".partners").removeClass("active");
    //                 }
    //             }

    //             coreBlocks = $('.core-sec .row')

    //             if (coreBlocks.length) {



    //                 ctaBlock = $(".green-cta");
    //                 if (windowscroll >= ctaBlock.offset().top) {

    //                     setTimeout(function() {
    //                         coreBlocks.eq(1).find('.core-block').addClass("active");
    //                     }, 1500);

    //                 } else {
    //                     setTimeout(function() {
    //                         coreBlocks.eq(1).find('.core-block').removeClass("active");
    //                     }, 500);
    //                 }


    //                 if (windowscroll >= coreBlocks.eq(1).offset().top) {

    //                     setTimeout(function() {
    //                         coreBlocks.eq(2).find('.core-block').addClass("active");
    //                     }, 1500);

    //                 } else {
    //                     setTimeout(function() {
    //                         coreBlocks.eq(2).find('.core-block').removeClass("active");
    //                     }, 500);
    //                 }

    //                 if (windowscroll >= coreBlocks.eq(2).offset().top) {

    //                     setTimeout(function() {
    //                         coreBlocks.eq(3).find('.core-block').addClass("active");
    //                     }, 1500);

    //                 } else {
    //                     setTimeout(function() {
    //                         coreBlocks.eq(3).find('.core-block').removeClass("active");
    //                     }, 500);
    //                 }

    //             }
    //         });
    //     });



    // })
    (jQuery)
</script>


<?php wp_footer(); ?>

</body>

</html>