<?php
    session_start();

    if( isset($_POST['codigoAvaliacao']) && !empty($_POST['codigoAvaliacao'])) {
        $codigoAvaliacao = $_POST['codigoAvaliacao'];
    }
?>

<!DOCTYPE html>
<html ng-app="multiprovaOnline">
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/inicial.css" />
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <link rel="stylesheet" href="css/main.css" type="text/css" />
        
        <!-- JQUERY -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        
        <!-- ANGULAR JS 1.4 -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        
        
    </head>
    
    <body ng-controller="avaliacaoCtrl">
        
        <input type="hidden" id="codigo" value="<?= $codigoAvaliacao ?>">
        
        <section id="headInfo" class="col-xs-12">
        <div class="col-xs-12 text-center">
            <h5>Realizando Avaliação: <?= $codigoAvaliacao ?></h5>
        </div>

        <div class="col-xs-12 text-center">
            <nav id="NavQuestao">
                <h4><i>Questão <span id="n_questao">{{questaoAtual}}</span> / <span id="t_questao">{{totalQuestoes}}</span></i></h4>
            </nav>
        </div>
    </section>

    <section id="prova" class="col-xs-10 col-xs-offset-1">
        <div class="panel">
            <div class="panel-header">Enunciado</div>
            <img id="enunciado" ng-src="{{enunciado}}" class="img img-responsive" />
        </div>

        <div class="panel">
            
                <div id="tipoResposta" class="panel-header"><i class="text-muted"></i>
                        <strong ng-show="objetiva">Objetiva - <i>Selecione uma alternativa</i></strong>

                        <strong ng-show="!objetiva">
                        Discursiva - <i>Elabore sua resposta</i></strong>
                </div>
                
                <div class="panel-body">
                    
                    
                <form id="resposta" class="col-xs-10 col-xs-offset-1">
                    <div ng-if="objetiva">
                        <!-- BEGIN INSERÇÃO DE ALTERNATIVAS -->
                        <div ng-repeat="(letra, urlAlternativa) in alternativas">
                            <label class="col-xs-4 col-lg-4">
                                <input type="radio" ng-model="resposta.selectedOption" value="{{letra}}" name="respostaQuestao{{questaoAtual}}">
                                <img
                                ng-src="{{urlAvaliacao +  urlQuestao + urlAlternativa}}" class="alternativa">
                            </label>
                        </div>
                        <!-- END INSERÇÃO DE ALTERNATIVAS -->
                    </div>
                    
                    <div ng-if="!objetiva">
                        <textarea ng-model="resposta.selectedOption" rows="4" class="col-xs-12"></textarea>
                    </div>
                </form>
                    
                    
                </div>
        </div>
        
        <div class="text-center">
            <input class="btn btn-default pull-right"  ng-click="saveAnswer()" type="button" id="avancar" value="Próxima">
        </div>

        <div id="respostasModal" class="modalHidden col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3 panel">
            <h4 class="text-center">Respostas</h4>
            <ul id="respostas" class="list-group">
            </ul>        
        </div>    
    </section>
        
    <script src="provas/<?= $codigoAvaliacao ?>/prova.conf.js"></script>
    <script src="js/multiprovaOnline.js"></script>
    <script src="js/avaliacao/avaliacaoController.js"></script>
        
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>