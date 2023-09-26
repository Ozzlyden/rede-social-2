<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_STATIC; ?>css/feed.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">    <title>Home</title>
</head>
<body>

    <section class="main-feed">
        <div class="sidebar">
            <div class="logo-sidebar">
                <img src="<?php echo INCLUDE_PATH_STATIC;?>img/logo.png">
            </div><!--logo-sidebar-->
            <br/>
            <div class="menu-sidebar">
                <h4>Menu</h4>
                <br/>
                <a href="#">feed<i class="fa-solid fa-newspaper"></i></a>
                <a href="#">perfil<i class="fa-solid fa-user"></i></a>
                <a href="#">amigos<i class="fa-solid fa-user-group"></i></a>
            </div><!--menu-sidebar-->
        </div><!--sidebar-->
        <div class="feed">
            <div class="feed-single-post">
                <div class="feed-single-post-author">
                    <div class="img-single-post-author">

                    </div><!--img-single-post-author-->

                    <h3>Victor</h3>
                    <spam>08:36 20/09/2023</spam>

                    <div class="single-post-content">
                        <p>It is a long established fact that a reader will be distracted by 
                        the readable content of a page when looking at its layout. </p>
                    </div><!--single-post-content-->

                </div><!--fedd-single-post-author-->
            </div><!--feed-single-post-->

        </div><!--feed-->
    </section>
    
</body>
</html>