<?php
/**
 * Header template.
 *
 * The main header template. This is used throughout the application.
 *
 * @author     Cory Collier <corycollier@corycollier.com>
 * @license    http://opensource.org/licenses/MIT  MIT License
 * @version    git: $Id$
 * @link       https://github.com/corycollier/simplesamlphp-module-themes
 * @see        https://github.com/simplesamlphp/simplesamlphp/
 * @since      File available since Release 1.3.0
 */
?>
<?php
$dir = SimpleSAML\Module::getModuleDir('themes');
require $dir . '/lib/functions.php';

// Define variables.
$url_path  = SimpleSAML\Module::getModuleURL('themes');
$css_path  = $url_path . '/css';
$js_path   = $url_path . '/js';
$img_path  = $url_path . '/img';
$language  = $this->getLanguage();

$login_url = isset($this->data['loginurl'])
    ? $this->data['loginurl']
    : '';

$title     = isset($this->data['header'])
    ? $this->data['header']
    : 'SimpleSAMLphp';


if (array_key_exists('pageid', $this->data)) :
    $hookinfo = array(
        'pre'    => &$this->data['htmlinject']['htmlContentPre'],
        'post'   => &$this->data['htmlinject']['htmlContentPost'],
        'head'   => &$this->data['htmlinject']['htmlContentHead'],
        'jquery' => &$jquery,
        'page'   => $this->data['pageid']
    );
    SimpleSAML\Module::callHooks('htmlinject', $hookinfo);

endif;
?>

<!doctype html>
<html class="" lang="<?php echo $language; ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <meta name="description" content="SAML Configuration">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" type="text/css" href="<?php echo $css_path; ?>/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $css_path; ?>/bootstrap-theme.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $css_path; ?>/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $css_path; ?>/print.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $css_path; ?>/screen.css" />

    <!--[if IE]>
    <link href="<?php echo $css_path; ?>/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <![endif]-->
    <?php
    if(!empty($this->data['htmlinject']['htmlContentHead'])) :
        foreach($this->data['htmlinject']['htmlContentHead'] as $content) :
            echo $content;
        endforeach;
    endif;
    ?>
    <style>
        body {
            /*background: #ffffff;*/
            background:url('https://drknbmw32n1iy.cloudfront.net/images/people_meeting_flipped.jpg') no-repeat center center fixed;
            background-size: cover;
            background-color: dimgrey;
            -webkit-background-size: 100% auto;
            -moz-background-size: 100% auto;
            -o-background-size: 100% auto;
            color: white;
        }
        .form-signin
        {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .form-signin-heading, .form-signin .checkbox
        {
            margin-bottom: 10px;
        }
        .form-signin .checkbox
        {
            font-weight: normal;
        }
        .form-signin .form-control
        {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .form-signin .form-control:focus
        {
            z-index: 2;
        }
        .form-signin input[type="text"]
        {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }
        .form-signin input[type="password"]
        {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .account-wall
        {
            margin-top: 20px;
            padding: 40px 0px 20px 0px;
            background-color: #f7f7f7;
            -moz-box-shadow: 0px 2px 30px black;
            -webkit-box-shadow: 0px 2px 30px black;
            box-shadow: 0px 2px 30px black;
        }
        .login-title
        {
            color: #555;
            font-size: 18px;
            font-weight: 400;
            display: block;
        }
        .profile-img
        {
            margin: 0 auto 10px;
            display: block;
        }
        .forgot-password-link {
            margin-top: 8px;
        }
        .sso-and-create-account-links {
            margin: 15px;
            padding: 5px;
        }
        .vertical-center {
            min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
            min-height: 100vh; /* These two lines are counted as one :-)       */
            background-color: transparent;
            display: flex;
            align-items: center;
        }
        .content {
            background-color: transparent;
        }

        .login-logo {
            max-height: 125px;
            max-width: 100%;
            padding: 10px;
        }

        @media (max-width: 767px) {
            body {
                background-image: none;
            }
        }

    </style>
</head>
<body>

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser.
    Please <a href="http://browsehappy.com/">upgrade your browser</a> to
    improve your experience.</p>
<![endif]-->

<!-- start .header -->

<!-- start the .content -->
<div class="content">
    <div class="container">
        <?php
        if(!empty($this->data['htmlinject']['htmlContentPre'])) :
            foreach($this->data['htmlinject']['htmlContentPre'] as $content) :
                echo $content;
            endforeach;
        endif;
        ?>
        <div class="row">
