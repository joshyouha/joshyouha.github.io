        </div><!-- .main_wrapper -->
	</div><!-- .site_wrapper -->
	<?php
		/* Back2Top */
		if (gt3_option('back_to_top') == '1'){
			echo "<div class='back_to_top_container'><a href='" . esc_js("javascript:void(0)") . "' class='gt3_back2top' id='back_to_top'></a></div>";
		}
		if (!is_404()) {
			gt3_get_default_footer();
		}
		if (class_exists('Woocommerce') && is_product()) do_action( 'gt3_footer_action' );

	wp_footer();
    ?>
</body>
</html>
