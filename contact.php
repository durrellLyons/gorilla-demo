<?php /* Template Name: Contact Page  */ ?>

<?php get_header(); ?>


<section class='contact_icons'>
    <div class=' first content'>
        <h1>Contact Us</h1>
            
        <div class='contact_icon_div'>
            <div class='contact_icon_img_div phone-icon'>
                <img src='<?php echo get_template_directory_uri() ?>/img/contact_phone.png' />
            </div>
            <div class='contact_icon_info_div'>
                (678) - 436 - 8087
            </div>
        </div><!-- .contact_icon -->
        
        <div class='contact_icon_div'>
            <div class='contact_icon_img_div'>
                <img src='<?php echo get_template_directory_uri() ?>/img/contact_email.png' />
            </div>
            <div class='contact_icon_info_div'>
                sales@ <br> gorillatech.com
            </div>
        </div><!-- .contact_icon -->
        
        <div class='contact_icon_div'>
            <div class='contact_icon_img_div map'>
                <img src='<?php echo get_template_directory_uri() ?>/img/contact_map.png' />
            </div>
            <div class='contact_icon_info_div'>
                123 Road ave <br> Atlanta, GA 30019
            </div>
        </div><!-- .contact_icon -->
        
        <div class='contact_icon_div'>
            <div class='contact_icon_img_div'>
                <img src='<?php echo get_template_directory_uri() ?>/img/contact_social.png' />
            </div>
            <div class='contact_icon_info_div'>
                <nav>
                    <ul class='social_media_menu'>
                        <li>
                            <a href='#'><img src='<?php echo get_template_directory_uri() ?>/img/facebook.png' /></a>
                        </li>
                        <li>
                            <a href='#'><img src='<?php echo get_template_directory_uri() ?>/img/twitter.png' /></a>
                        </li>
                        <li>
                            <a href='#'><img src='<?php echo get_template_directory_uri() ?>/img/linkedin.png' /></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div><!-- .contact_icon_div -->
    </div>
</section><!-- .contact_icons -->

<section class='contact_form'>
   <div class='content' >
        <form>
            <div class='text-input-div'>
                <span class='text-inputs'>
                    <label for='name'>Name*</label> <br />
                    <input type='text' id='name' />
                </span><!-- .text-inputs -->
                <span class='text-inputs phone-contact'>
                    <label for='name'>Phone</label> <br />
                    <input type='text' id='name' />
                </span><!-- .text-inputs -->
                <span class='text-inputs'>
                    <label for='name'>Email*</label> <br />
                    <input type='text' id='name' />
                </span><!-- .text-inputs -->
                <span class='text-inputs companyname-contact'>
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
   </div>
</section><!-- .contact_form -->

<section class='about_page get_started'>
    <div class='partners'>
        <div class='partners_img'>
            <span class='helper'></span>
            <img src='<?php echo get_template_directory_uri() ?>/img/partners_ikentoo_grey.png' />
        </div>
        <div class='partners_img'>
            <span class='helper'></span>
            <img src='<?php echo get_template_directory_uri() ?>/img/partners_menudrive_grey.png' />
        </div>
        <div class='partners_img'>
            <span class='helper'></span>
            <img src='<?php echo get_template_directory_uri() ?>/img/partners_bluestar_grey.png' />
        </div>
        <div class='partners_img'>
            <span class='helper'></span>
            <img src='<?php echo get_template_directory_uri() ?>/img/partners_priority_grey.png' />
        </div>
        <div class='partners_img'>
            <span class='helper'></span>
            <img src='<?php echo get_template_directory_uri() ?>/img/partners_usaepay_grey.png' />
        </div>
        <div class='partners_img'>
            <span class='helper'></span>
            <img src='<?php echo get_template_directory_uri() ?>/img/partners_ubiquiti_grey.png' />
        </div>
    </div>   
</section>

<?php get_footer(); ?>