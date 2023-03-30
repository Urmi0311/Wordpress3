<?php

/**
 * Plugin Name: Popup Image on Homepage
 * Plugin URI: https://yourpluginurl.com/
 * Description: Shows a popup with an image on load of the home page.
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: https://yourauthorurl.com/
 */

// Add the popup HTML and CSS to the home page


function popup_image_on_homepage()
{
    if (is_front_page()) { // Check if the current page is the home page
        echo '<div id="popup-container">';
        echo '<div id="popup">';
        echo '<img src="https://www.sharatjaswal.com/wp-content/uploads/2017/12/Flipkart.png" alt="Popup Image">';
        echo '<a href="#" id="close-popup">&times;</a>';
        echo '</div>';
        echo '</div>';
        echo '<style>';
        echo '#popup-container { position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: none;  }';
        echo '#popup { position: fixed; top: 60%; left: 50%; transform: translate(-50%, -50%); max-width: 90%; max-height: 90%; }';
        echo '#popup img { display: block; width: 100%; height: auto; }';
        echo '#close-popup { position: absolute; top: 10px; right: 10px; font-size: 24px; text-decoration: none; color: white; }';
        echo '</style>';
        echo '<script>';
        echo 'document.addEventListener("DOMContentLoaded", function() {';
        echo 'document.getElementById("popup-container").style.display = "block";';
        echo '});';
        echo 'document.getElementById("close-popup").addEventListener("click", function(event) {';
        echo 'event.preventDefault();';
        echo 'document.getElementById("popup-container").style.display = "none";';
        echo '});';
        echo '</script>';
    }
}

add_action('wp_footer', 'popup_image_on_homepage');




