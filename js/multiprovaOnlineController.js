app.controller("loginCtrl", function ($scope, $http) {
    
    var that = $scope;
    
    $scope.submit = function() {
        $http.get("js/database.json").then(function success (response) {
            console.log("Carregamento Bem Sucedido " + response.data.username + response.data.password);
            var username = response.data.username;
            var password = response.data.password;
            
            if(that.username == username && that.password == password) {
                var section = $('<div>', {class: "loggedIn"});
                $(section).html("<h3>Login bem sucedido!</h3><p>Logado como <strong>" + username + "</strong>.</p>");
                $(".alertBox #loginForm").fadeOut();
                $(".alertBox").addClass("loggedIn").append(section);
            } else {
                if(that.username != username)
                    that.username.$invalid = true;
                if(that.password != password)
                    that.password.$invalid = true;
            }
            
        }, function error (response) {
            console.log("Não foi possível carregar o JSON:" + response.data.toString());
        });
    };
    
});