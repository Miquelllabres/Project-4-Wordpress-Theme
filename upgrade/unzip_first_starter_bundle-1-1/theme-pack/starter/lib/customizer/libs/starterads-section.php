<?php

if (class_exists('WP_Customize_Section') && !class_exists('Starter_Pro_Ads_Section')):

/**
 * Customize Themes Section class.
 *
 * A UI container for theme controls, which behaves like a backwards Panel.
 *
 * @since 4.2.0
 *
 * @see WP_Customize_Section
 */
class Starter_Pro_Ads_Section extends WP_Customize_Section {

	/**
	 * Customize section type.
	 *
	 * @since 4.2.0
	 * @access public
	 * @var string
	 */
	public $type = 'ads';

	/**
	 * Render the themes section, which behaves like a panel.
	 *
	 * @since 4.2.0
	 * @access protected
	 */
	protected function render() {
		$classes = 'accordion-section control-section control-section-' . $this->type;
		?>
		<li id="accordion-section-<?php echo esc_attr( $this->id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
			<a href="https://www.themeum.com/wordpress/themes/starter-pro-responsive-onepage-wordpress-theme/" style="display: block; margin-top: 30px;"><img src="http://demo.themeum.com/demo-image/starter-ads-small.jpg"></a>
		</li>
<?php }
}

endif;