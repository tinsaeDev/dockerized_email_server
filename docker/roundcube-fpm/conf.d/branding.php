<?php

$config['product_name'] = "FiveStar Email";

// Logo image replacement. Specifies location of the image as:
// - URL relative to the document root of this Roundcube installation
// - full URL with http:// or https:// prefix
// - URL relative to the current skin folder (when starts with a '/')
//
// An array can be used to specify different logos for specific template files
// The array key specifies the place(s) the logo should be applied to and
// is made up of (up to) 3 parts:
// - skin name prefix (always with colon, can be replaced with *)
// - template name (or * for all templates)
// - logo type - it is used for logos used on multiple templates and the available types include:
//      '[favicon]' for favicon
//      '[print]' for logo on all print templates (e.g. messageprint, contactprint)
//      '[small]' for small screen logo in supported skins
//      '[dark]' and '[small-dark]' for dark mode logo in supported skins
//      '[link]' for adding a URL link to the logo image
//
// Example config for skin_logo
/*
   [
     // show the image /images/logo_login_small.png for the Login screen in the Elastic skin on small screens
     "elastic:login[small]" => "/images/logo_login_small.png",
     // show the image /images/logo_login.png for the Login screen in the Elastic skin
     "elastic:login" => "/images/logo_login.png",
     // add a link to the logo on the Login screen in the Elastic skin
     "elastic:login[link]" => "https://www.example.com",
     // add a link to the logo on all screens in the Elastic skin
     "elastic:*[link]" => "https://www.example.com",
     // add a link to the logo on all screens for all skins
     "[link]" => "https://www.example.com",
     // show the image /images/logo_small.png in the Elastic skin
     "elastic:*[small]" => "/images/logo_small.png",
     // show the image /images/larry.png in the Larry skin
     "larry:*" => "/images/larry.png",
     // show the image /images/logo_login.png on the login template in all skins
     "login" => "/images/logo_login.png",
     // show the image /images/logo_print.png for all print type logos in all skins
     "[print]" => "/images/logo_print.png",
   ];
*/
$config['skin_logo'] = '/skins/5star/images/elevator.png';


?>