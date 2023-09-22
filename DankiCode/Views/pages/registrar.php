<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_STATIC; ?>css/registrar.css"/>
    <title>Registrar</title>
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
                <h3>Crie a sua conta:</h3>
                <input type="text" name="email" placeholder="Digite o seu email..." required>
                <input type="text" name="name" placeholder="Digite o seu nome..." required>
                <input type="text" name="user" placeholder="Digite seu username..." required>
                <input type="password" name="password" placeholder="Escolha uma senha..." required>
                <input type="submit" name="acao" value="Criar">
            </form>
        </div><!--box-login-->
        
    </div><!--form-conteiner-login-->

    <footer>


    </footer>
    
</body>
</html>