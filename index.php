<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>    
        
        <meta charset="utf-8" />
        <title>Multiprova Online</title>
        
        <link rel="stylesheet" type="text/css" href="css/inicial.css" />
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <!-- JQUERY -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        
        <!-- ANGULAR JS 1.4 -->
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    </head>
    
    <body ng-app="multiprovaOnline" class="splashScreen">
        <section class="alertBox col-xs-10 col-xs-offset-1 col-lg-4 col-lg-offset-4">
            <?php 
            if(isset($_SESSION['matricula'])) {
                echo "<h2>You are logged in as " . $_SESSION['matricula'] . "</h2>";
            }
            ?>
            <form action="include/login.php" method="post" id="loginForm" novalidate>
                <h3>Acesso ao Multiprova</h3>
                <fieldset>
                    <label for="matricula">Matrícula
                    <input required type="text" name="matricula" ng-model="username"  />
                    </label>
                    <label for="senha">Senha
                    <input required type="password" name="senha" ng-model="password" />
                    </label>
                </fieldset>
                <button type="submit" class="btn btn-success pull-right">Entrar</button>
                <!--<p class="text-muted pull-left"><a href="#">esqueceu sua senha?</a></p>-->
            </form>
        </section>
    
    <script src="js/multiprovaOnline.js"></script>
    <script src="js/multiprovaOnlineController.js"></script>
    <script src="js/database.json"></script>
        
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
        
    </body>
</html>