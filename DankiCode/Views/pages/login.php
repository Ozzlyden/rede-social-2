<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_STATIC; ?>css/login.css"/>
    <title>Login</title>
</head>
<body>
    <header> 
            <div class="center"> 
                <div class="logo-left"> <a href="/rede-social-2"> Logomarca</a> </div>
                
                
            </div><!--center-->
    </header>

    <div class="sidebar"></div>

    <div class="form-conteiner-login">

        <div class="logo-box">
            <img src="<?php echo INCLUDE_PATH_STATIC;?>img/logo.png">
            <p>It is a long established fact that a reader will be distracted by 
             the readable content of a page when looking at its layout. 
            </p>
        </div><!--logo-box-->

        <div class="box-login">
            <form method="post">
                <input type="text" name="email" placeholder="Email..." required>
                <input type="password" name="password" placeholder="Senha..." required>
                <input type="submit" name="acao" value="Login">
                <input type="hidden" name="login">
            </form>
            <p><a href="<?php echo INCLUDE_PATH;?>registrar">Criar conta</a></p>
        </div><!--box-login-->
        
    </div><!--form-conteiner-login-->

    <footer>


    </footer>
    
</body>
</html>