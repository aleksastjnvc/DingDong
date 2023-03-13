<?php wp_head() ?>



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<body>
    


         <!-- FOR MOBILE VIEW -->
         <div id="slideout-menu">
            
            <ul>
                <li><a class="active" href="<?php echo site_url('')?>">Home</a></li>
                <li><a href="<?php echo site_url('/event')?>">Events</a></li>
                <li><a href="<?php echo site_url('/ideas')?>">Ideas</a></li>
                <li><a href="<?php echo site_url('/about')?>">About</a></li>
                <li><a href="<?php echo site_url('/contact')?>">Contact</a></li>
                <li>
                  <input type="text" placeholder="Search here...">
            
                </li>
            </ul>
        </div>
        <!-- MOBILE VIEW ENDS -->

        <nav>
            <div id="logo-img">
                <a href="<?php echo site_url('')?>">
                    <img id="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/dingdong-logo.png"  alt="ding-dong-logo" />
                </a>
            </div>
            <div id="menu-icon">
                <i class="fas fa-bars"></i>
            </div>
            <ul>
                <li><a href="<?php echo site_url('')?>" <?php if(is_front_page()) echo 'class="active"'?> >Home</a></li>
                <li><a href="<?php echo site_url('/event')?>">Events</a></li>
                <li><a href="<?php echo site_url('/ideas')?>">Ideas</a></li>
                <li><a href="<?php echo site_url('/about')?>" <?php if(is_page('about')) echo 'class="active"'?> >About</a></li>
                <li><a href="<?php echo site_url('/contact')?>">Contact</a></li>
                <li>
                    <div id="search-icon">
                        <i class="fas fa-search"></i>
                    </div>
                </li>
            </ul>

        </nav>

        <div id="searchbox">
            <form method="get" action="<?php echo home_url() ?>">
            <input type="text" name="" placeholder="Search here..." value="<?php get_search_query(); ?>">
            <form>
        </div>
        
        <div id="banner">
            <h1>Welcome To DingDong</h1>
            <h3>Daily News About IT.</h3>
        </div>

    <?php if(!is_front_page()) {?>

        <main>
            
    <?php } ?>