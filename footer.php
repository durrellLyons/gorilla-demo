<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gorilla
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<section class='footer'>
			<div class='content'>
				<div class='column'>
				    <h5 class='footer-nav-title'>Information</h5>
				    <div class='footer-nav-bar blue'></div>
				    <nav>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-1', 'menu_id' => 'information' ) ); ?>
				    </nav>
				</div>
			    
				<div class='column'>
				    <h5 class='footer-nav-title'>Solutions</h5>
				    <div class='footer-nav-bar purple'></div>
				    <nav>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-2', 'menu_id' => 'solutions' ) ); ?>
				    </nav>
				</div>
			    
				<div class='column'>
				    <h5 class='footer-nav-title'>Copyright</h5>
				    <div class='footer-nav-bar pink'></div>
				    <nav>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-3', 'menu_id' => 'copyright' ) ); ?>
				    </nav>
				</div>
				
				<div class='column'>
				   <h5 class='footer-nav-title'>Social Networking</h5>
				   <div class='footer-nav-bar darkblue'></div>
				   <nav>
				       <ul class='social_media_menu'>
					   <li>
					       <a href='#'><img src='<?php echo get_template_directory_uri() ?>/img/facebook.png' /></a>
					   </li>
					   <li>
					       <a href='#'><img src='<?php echo get_template_directory_uri() ?>/img/linkedin.png' /></a>
					   </li>
					   <li>
					       <a href='#'><img src='<?php echo get_template_directory_uri() ?>/img/twitter.png' /></a>
					   </li>
				       </ul>
				   </nav>
				</div>
			</div><!-- .content -->
			<div class="gorilla-icon-div">
				<img src='<?php echo get_template_directory_uri() ?>/img/gorilla.png' class='gorilla-icon' />
			</div><!-- .gorilla-icon-div -->
			<section class='footer-form content'>
				<form>
					<h4>Get In Touch</h4>
					<div class='text-input-div'>
					    <span class='text-inputs'>
						<label for='name'>Name*</label> <br />
						<input type='text' id='name' />
					    </span><!-- .text-inputs -->
					    <span class='text-inputs'>
						<label for='name'>Phone</label> <br />
						<input type='text' id='name' />
					    </span><!-- .text-inputs -->
					    <span class='text-inputs'>
						<label for='name'>Email*</label> <br />
						<input type='text' id='name' />
					    </span><!-- .text-inputs -->
					    <span class='text-inputs'>
						<label for='name'>CompanyName</label> <br />
						<input type='text' id='name' />
					    </span><!-- .text-inputs -->
					</div><!-- .text-input-div -->
					
					<div class='textarea-div'>
					    <label for='comments'>Comments</label> <br />
					    <textarea id='comments'></textarea>
					</div><!-- .textarea-div -->
					
					<button class='button pink' type='submit'>Submit</button>
				</form>
			</section><!-- .footer-form -->
		</section><!-- .footer -->
		    
            <section class='site-info content'>
                <p class='disclaimer mobile'>
                    &copy;2017 GORILLA TECHNOLOGIES <br> | ALL RIGHTS RESERVED <br> WEBSITE DESIGNED BY
                    <a href='#'>BLUE KEY INTERACTIVE. A BARTA COMPANY</a>
                </p>
                
                <p class='disclaimer desktop'>
                    &copy;2017 GORILLA TECHNOLOGIES | ALL RIGHTS RESERVED &nbsp; &nbsp; WEBSITE DESIGNED BY
                    <a href='#'>BLUE KEY INTERACTIVE. A BARTA COMPANY</a>
                </p>
            </section><!-- .site-info .content -->
	</footer><!-- #colophon -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
