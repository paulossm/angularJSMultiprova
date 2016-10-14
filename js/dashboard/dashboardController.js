app.controller("dashboardCtrl", function ($scope, $http) {
    
    $scope.provas = provas;
    
    /*
    $http.get("js/provas-db.txt")
    .then(function(exams) {
        $scope.provas = JSON.parse(exams.data);
    });
    */
    
    $scope.aluno = {
        "nome": "José",
        "matricula": "2016100123"
    }; // objeto perfil
    
    
});