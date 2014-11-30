<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package eventx
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

	<div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-11 col-md-offset-1 col-sm-12">
                    <ul class="list-unstyled list-inline footer-menu" data-uk-scrollspy="{cls:'uk-animation-scale-up',delay:900, repeat:true}">
                        <li><a href="#">BE A SPONSOR</a>
                        </li>
                        <li><a href="#">IMPRESSUM</a>
                        </li>
                        <li><a href="#">CREDITs</a>
                        </li>
                        <li><a href="#">CONTACT</a>
                        </li>
                        <li><a href="#">BANNERS</a>
                        </li>
                        <li><a href="#">ARCHIVE</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Footer Top -->

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright pull-left" data-uk-scrollspy="{cls:'uk-animation-slide-left',delay:1300, repeat:true}">
                      eventX &copy; 2014
                    </div>
                    <div class="footer-logo pull-right" data-uk-scrollspy="{cls:'uk-animation-slide-right',delay:1300, repeat:true}">
                      <img src="<?php echo IMAGES; ?>/footer-logo.png" alt="footer Logo">
                    </div>
                    <div id="back-top">
                        <a href=""><img src="<?php echo IMAGES; ?>/top-arrow.jpg" height="20" width="20"></a>
                    </div>
                </div>  
            </div>          
        </div>
    </div>

</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

