<?php
/**
 * CSS YCHANGE theme
 *
 */
$bodyBgColor = 'rgba(255, 255, 255, 0.85)';
$bodyInnerBgColor = 'rgba(255, 255, 255, 0.25)';
$oceanBgColor = '#01021E';
$arcticBgColor = '#0F1F52';
?>
/* <style> /**/

/*******************************
    Ychange general styles
********************************/
body {
  background: url(<?php echo elgg_get_simplecache_url('backgrounds/site-europe-bg.jpg'); ?>) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.elgg-body {
  background: #fff;
  background-color: <?php echo $bodyBgColor; ?>;
  padding: 10px;
}

a.elgg-heading-site, a.elgg-heading-site:hover {
  font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
}

.elgg-sidebar {
  border: none;
  background: #fff;
  background-color: <?php echo $bodyBgColor; ?>;
  padding: 10px;
}

.elgg-body .elgg-body, .elgg-sidebar .elgg-body {
    background-color: <?php echo $bodyInnerBgColor; ?>;
}

.elgg-module-highlight .elgg-body {
    background-color: <?php echo $bodyBgColor; ?>;
}

.elgg-page-header {
    background-color: <?php echo $arcticBgColor; ?>;
}

.elgg-page-navbar {
    background-color: <?php echo $oceanBgColor; ?>;
}

.elgg-menu-site > .elgg-state-selected > a, .elgg-menu-site > li:hover > a {
    background-color: <?php echo $arcticBgColor; ?>;
}

.elgg-menu-site-more > li > a:hover {
    color: #fff;
}

:focus > .elgg-icon, .elgg-icon:hover, .elgg-icon-hover {
    color: <?php echo $arcticBgColor; ?>;
}

a {
    color: <?php echo $arcticBgColor; ?>;
}

.ychange-description-site {
    color: #ccc;
}

.ychange-satellite-link {
    border: 1px solid #AAAAAA;
    padding: 5px;
    margin: 2.5px;
    display: inline-block;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}

.ychange-satellite-link:hover {
    border-color: #4690D6;
}

.ychange-satellite-link img.ychange-satellite-image {
    opacity: 0.75;
}

.ychange-satellite-link img.ychange-satellite-image:hover {
    opacity: 1;
}

.ychnage-project-label {
    display: block;
}

.ychange-satellite-image-edit {
    display: inline-block;
    text-align: center;
}

.ychange-satellite-image-edit .ychange-satellite-link {
    display: block;
}

.ychange-map-input, .ychange-map-output {
    width: 100%;
    height: 320px;
}

.ychange-required label::after {
    content: ' *';
    color: red;
    vertical-align: middle;
}

#ychange-cookie-consent {
    display: none;
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background: #424242;
    border-top: 1px solid #424242;
    padding: 10px 20px;
    color: #ccc;
}

#ychange-cookie-consent a {
    color: #fff;
}

#ychange-cookie-consent a:hover {
    color: #fff;
}

#ychange-cookie-consent input[type="button"] {
    margin-right: 40px;
}

#profile-location, #profile-class_grade {
    display: block;
}

.ychange-tutorials a i.fa {
    margin-right: 5px;
}

.ychange-tutorials a i.fa:before {
    font-size: 120%;
}

.ychange-tutorials a i.fa-youtube:before {
    color: #FF0000;
}

.ychange-questionnaire-info-box, .ychange-login-for-webmap {
    font-weight: bold;
}

.ychange-questionnaire-info-box a {
    color: #5097CF;
}

.ychange-questionnaire-info-box .elgg-icon, .ychange-login-for-webmap .elgg-icon {
    color: #0F1F52;
}

.ychange-webmap .elgg-page-body > .elgg-inner {
    max-width: 100%;
}

.ychange-webmap .ychange-open-map-in-new-tab {
  display: inline-block;
  margin-bottom: 10px;
  margin-top: 5px;
}

.ychange-webmap .ychange-open-map-in-new-tab .elgg-icon {
  color: #0F1F52;
}
