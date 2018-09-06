<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Odin
 */

?>

	</div><!-- #content -->

    <div id="logo-slider">
        
        <?php
            if(is_active_sidebar('logo-slider')){
            dynamic_sidebar('logo-slider');
            }
        ?>
    
    </div>

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div id="footer-sidebar" class="secondary">
            <div id="footer-sidebar1" class="footer-widget">
            <?php
            if(is_active_sidebar('footer-sidebar-1')){
            dynamic_sidebar('footer-sidebar-1');
            }
            ?>
            </div>
            <div id="footer-sidebar2" class="footer-widget">
            <?php
            if(is_active_sidebar('footer-sidebar-2')){
            dynamic_sidebar('footer-sidebar-2');
            }
            ?>
            </div>
            <div id="footer-sidebar3" class="footer-widget">
            <?php
            if(is_active_sidebar('footer-sidebar-3')){
            dynamic_sidebar('footer-sidebar-3');
            }
            ?>
            </div>
            <div class="clearfix"></div>
        </div>
		<div class="site-info">
			<div id="site-info-created">
                Site by <a href="//www.tornadocode.com">Tornado Code</a>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
