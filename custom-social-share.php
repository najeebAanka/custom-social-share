<?php

/**
 * Plugin Name: Custom Social Share
 * Description: Adds floating share icons for Facebook and LinkedIn.
 * Version: 1.1
 * Author: Najeeb Anka
 */

function enqueue_custom_styles()
{
    wp_enqueue_style('custom-social-share', plugin_dir_url(__FILE__) . 'custom-social-share.css', array(), '1.1');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', array(), '5.15.3');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

function add_social_share_icons()
{
?>
    <div class="social-share-icons">
        <a class="facebook-link" href="<?php echo esc_url('https://www.facebook.com/sharer/sharer.php?u=' . urlencode(get_permalink())); ?>" target="_blank" title="Share on Facebook">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a class="linkedin-link" href="<?php echo esc_url('https://www.linkedin.com/shareArticle?url=' . urlencode(get_permalink())); ?>" target="_blank" title="Share on LinkedIn">
            <i class="fab fa-linkedin"></i>
        </a>
    </div>
<?php
}

add_action('wp_footer', 'add_social_share_icons');
