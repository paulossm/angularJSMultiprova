app.controller("avaliacaoCtrl", function($scope, $http) {
    $scope.avaliacao = exam;
    $scope.totalQuestoes = Object.keys($scope.avaliacao).length;
    $scope.respostas = new Array($scope.totalQuestoes); // array de resposta
    
    $scope.codigo = document.getElementById("codigo").value;
    $scope.urlAvaliacao = "provas/" + $scope.codigo + "/";
    
    
    
    $scope.loadQuestion = function(number) {
        /** 
        *   Carrega uma questão na view:
        *   Enunciado e alternativas ou campo de texto discursivo
        *   ~           
        *   @param number
        *   refere-se ao número da questão a ser carregada na tela
        *   acessa-se os dados da questão através de
        *   $scope.avaliacao[number]
        **/
        
        $scope.resposta = {selectedOption: ""};
        $scope.questaoAtual = $scope.avaliacao[number].numero;
        $scope.objetiva = false;
        $scope.enunciado = $scope.urlAvaliacao + $scope.avaliacao[number].url + $scope.avaliacao[number].enunciado;
        $scope.urlQuestao = $scope.avaliacao[number].url;
        
        if($scope.avaliacao[number].objetiva) {
            $scope.objetiva = true;
            $scope.alternativas = $scope.avaliacao[number].alternativas; // OBJETO alternativas
        }
    }
    
    $scope.saveAnswer = function () {
        /**
        *   Salva a resposta de uma questão no 'banco' e
        *   avança para a próxima ou o final da prova.
        **/  
        $scope.respostas[$scope.questaoAtual-1] = $scope.resposta.selectedOption;
        
        if($scope.questaoAtual+1 > $scope.totalQuestoes) {
            document.write($scope.respostas);
            return;
        }
        $scope.loadQuestion(++$scope.questaoAtual);    
    }
    $scope.questaoAtual = 1;
    $scope.loadQuestion($scope.questaoAtual);
    
});