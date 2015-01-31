<?php
/**
 * The template for displaying the footer.
 *
 * @package friedgold
 * @since 	friedgold 1.0
**/ 
?>

    <footer id="footer" role="contentinfo" class="animated">
    
        <?php get_sidebar( 'footer' ); // Output the footer sidebars ?>
        
        <div class="copyright">
            <div class="wrapper">
            	<div class="grids">
                    <div class="grid-10">
                        <?php global $ti_option; echo $ti_option['copyright_text']; ?>
                    </div>
                    <div class="grid-2">
                        <a href="#" class="back-top"><?php _e( 'Back to top', 'themetext' ); ?> <i class="icon-chevron-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
            
    </footer><!-- #footer -->
    
    
<?php wp_footer(); ?>

		<script>
					var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
						showRightPush = document.getElementById( 'showRightPush' ),
						body = document.body;

					showRightPush.onclick = function() {
						classie.toggle( this, 'active' );
						classie.toggle( body, 'cbp-spmenu-push-toleft' );
						classie.toggle( menuRight, 'cbp-spmenu-open' );
						disableOther( 'showRightPush' );
					};
		</script>

</body>
</html>