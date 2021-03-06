<?php
/**
 * The template for displaying the search form.
 *
 * @package MEAN Team
 */

?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="search-field"><span class="screen-reader-text"><?php esc_html_e( 'To search this site, enter a search term', 'meanteam' ) ?></span></label>
	<input class="search-field" id="search-field" type="text" name="s" value="<?php echo get_search_query() ?>" aria-required="false" autocomplete="off" placeholder="<?php echo esc_attr_x( 'Search', 'meanteam' ) ?>" />
	<button><?php esc_html_e( 'Submit', 'meanteam' ); ?></button>
</form>
