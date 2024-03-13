<?php 
    //display PHP errors to make debugging easier
// Comment this out when you are finished with the website.
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    // for use on desktop
    define('ROOT_DIR', 'http://localhost/Theatre/');
    define('AUTH_DIR', 'http://localhost/Theatre/'); 

    
     
// for use on college pc in room 13
    // define('ROOT_DIR', 'http://localhost/theatreV1/');
    // define('AUTH_DIR', 'http://localhost/theatreV1/account/dashboard/');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?= ROOT_DIR ?>/">   

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css" integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY=" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= ROOT_DIR ?>styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta property="og:url" content="https://tailwindcomponents.com/component/navigation-blog-with-dropdown-search-and-logo/landing" />
   
    <meta property="og:title" content="Navigation Blog With Dropdown + Search and Logo by okthapian" />
    <meta property="og:description" content="This is a navigation bar that can be used on any website, depending on usage, and can be customized with any color" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@TwComponents" />
    <meta name="twitter:title" content="Navigation Blog With Dropdown + Search and Logo by okthapian" />
    <meta name="twitter:description" content="This is a navigation bar that can be used on any website, depending on usage, and can be customized with any color" />
    <meta name="twitter:image" content="http://tailwindcomponents.com/storage/6789/conversions/temp97123-ogimage.jpg?v=2023-02-13 00:53:23" />

    <title>Local Theatre Company</title>

        
        <link rel="stylesheet" href="<?= ROOT_DIR ?>assets/scss/app.css">

    </head>
<body class="bg-black">

<script src="//unpkg.com/alpinejs" defer></script>
<script src="https://cdn.tailwindcss.com"></script>
