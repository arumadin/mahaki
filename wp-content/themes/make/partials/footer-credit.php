<?php
/**
 * @package Make
 */

$footer_text   = get_theme_mod( 'footer-text', false );

/**
 * Allow toggling of the footer credit.
 *
 * @since 1.2.3.
 *
 * @param bool    $show    Whether or not to show the footer credit.
 */
$footer_credit = apply_filters( 'make_show_footer_credit', true );
?>

<?php if ( $footer_text || ttfmake_is_preview() ) : ?>
<div class="footer-text">
	<?php echo ttfmake_sanitize_text( $footer_text ); ?>
</div>
<?php endif; ?>

<?php if ( true === $footer_credit ) : ?>
<div class="site-info">
	<p>Mahaki Kitchen by <a href="http://arumadin.wordpress.com">Arumadin</a></p>
</div>
<?php endif; ?>
