<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gorilla
 */

get_header(); ?>

	<section class='simplified page_404'>
		<div class='content'>
		    <h1>404</h1>
		    <h3>OOPS, THIS PAGE IS DOWN FOR <br> TECHNICAL REPAIRS!</h3>
		</div>
	</section><!-- .simplified -->
	    
	<section class='solutionsIcons'>
		<div class='content'>
		    <figure class='column pos-col'>
			<span class='helper'></span>
			<img src='<?php echo get_template_directory_uri() ?>/img/icon_pos.png' />
			<figcaption>Point of Sale</figcaption>
		    </figure>
		    <figure class='column wfm-col'>
			<span class='helper'></span>
			<img src='<?php echo get_template_directory_uri() ?>/img/icon_wifi.png' />
			<figcaption>Wifi Marketing</figcaption>
		    </figure>
		    <figure class='column foi-col'>
			<span class='helper'></span>
			<img src='<?php echo get_template_directory_uri() ?>/img/icon_internet.png' />
			<figcaption>Fallover Internet</figcaption>
		    </figure>
		    <figure class='column ms-col'>
			<span class='helper'></span>
			<img src='<?php echo get_template_directory_uri() ?>/img/icon_managed.png' />
			<figcaption>Managed Services</figcaption>
		    </figure>
		</div>
	</section>

<?php
get_footer();
