<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bem-vindo, <?php echo $_SESSION['name'];?></title>
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
                <a href="?logout">logout<i class="fa-solid fa-right-from-bracket"></i></a>
            </div><!--menu-sidebar-->
        </div><!--sidebar-->

        <div class="feed">
            <div class="feed-wraper">
            <div class="feed-single-post">
                <div class="feed-single-post-author">
                    <div class="img-single-post-author">
                        <img src="<?php echo INCLUDE_PATH_STATIC ?>img/avatar.png">
                    </div><!--img-single-post-author-->
                    <div class="feed-single-post-author-info">
                        <h3>Victor</h3>
                        <p>08:36 20/09/2023</p>
                    </div>
                    

                    <div class="feed-single-post-content">
                        <p>It is a long established fact that a reader will be distracted by 
                        the readable content of a page when looking at its layout. </p>
                        <img src="<?php echo INCLUDE_PATH_STATIC ?>img/post.png">
                    </div><!--feed-single-post-content-->

                </div><!--fedd-single-post-author-->
            </div><!--feed-single-post-->


            <div class="friends-request-feed">
                <h4>Solicitacoes de amizades</h4>
                <div class="friend-request-single">
                    <img src="<?php echo INCLUDE_PATH_STATIC ?>img/avatar.png">
                    <div class="friend-request-single-info">
                        <h3>Lucas da Silva</h3>
                        <p><a href="">Aceitar</a> | <a href="">Recusar</a></p>
                    </div><!--friend-request-single-info-->
                </div><!--friend-request-single-->
                <div class="friend-request-single">
                    <img src="<?php echo INCLUDE_PATH_STATIC ?>img/avatar.png">
                    <div class="friend-request-single-info">
                        <h3>Luiz da Silva</h3>
                        <p><a href="">Aceitar</a> | <a href="">Recusar</a></p>
                    </div><!--friend-request-single-info-->
                </div><!--friend-request-single-->
            </div><!--friends-request-feed-->
        </div><!--feed-->

    </section>
    
</body>
</html>