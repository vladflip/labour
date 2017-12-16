<?php
    $description = get_bloginfo('description');

    if(is_single()){
        $title = get_the_title();
        $description = strip_tags(get_the_excerpt($post->ID));
    }
    elseif(is_page()){
        $title = get_the_title('') . ' - '; 
        $title .= get_bloginfo('name');
    }
    else{
        $title = get_bloginfo('name');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <meta name="google-site-verification" content="PAvN6d874h1Q3SYFV6qK7JsCVPuFb54dKZfCrvmcx-E" />
    <meta name="Description" content="<?= $description ?>"> 

    <?php wp_enqueue_style('main-style'); ?>
    <?php wp_head(); ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Neucha&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400&amp;subset=cyrillic" rel="stylesheet">
</head>
<body>
    <div class="hero">
        <div class="container">
            <div class="hero-crest"></div>
            <div class="hero-text">
                <div class="hero-text-sign">
                    Соціальний захист Харкова
                </div>
                <div class="hero-text-name">
                    Офіційний сайт <br> Департаментy праці та соціальної політики <br> Харківської міської ради
                </div>
            </div>
            <div class="hero-search" id="search">
                <div class="hero-search-text">Пошук</div>
                <i class="hero-search-icon fa fa-search"></i>
            </div>
        </div>
    </div>

<div class="search-container">
    <script>
      (function() {
        var cx = '009057717908683271800:rx7c3ovd6zc';
        var gcse = document.createElement('script');
        gcse.type = 'text/javascript';
        gcse.async = true;
        gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(gcse, s);
      })();
    </script>
    <gcse:search></gcse:search>
</div>
