<?php
    session_start();
?>

<!DOCTYPE html>
<html ng-app="multiprovaOnline">
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/inicial.css" />
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <!-- JQUERY -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        
        <!-- ANGULAR JS 1.4 -->
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    </head>
    
    <body ng-controller="dashboardCtrl">
        <header class="col-xs-12">
            <h3>
                Bem vindo, {{aluno.nome}}
                <small> {{aluno.matricula}} </small>
            </h3>
        </header>
        <section class="col-xs-12">
            <ul class="list">
                <li ng-repeat="prova in provas" class="panel col-xs-6 col-xs-offset-3 col-lg-8 col-lg-offset-0">
                    <h4>{{prova.codigo}}  {{prova.disciplina}}</h4>
                    <h5>Prazo: {{prova.data.dia}}/{{prova.data.mes}}/{{prova.data.ano}}</h5>

                    <form action="avaliacao.php" method="post">
                        <input type="hidden" name="codigoAvaliacao" value="{{prova.codigo}}">
                        <button type="submit" class="btn btn-primary">realizar avaliação >></button>
                    </form>
                </li>
            </ul>
        </section>
    
    <script src="js/provas-db.js"></script>
    <script src="js/multiprovaOnline.js"></script>
    <script src="js/dashboard/dashboardController.js"></script>
        
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>