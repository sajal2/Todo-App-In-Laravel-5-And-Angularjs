

var app = angular.module('todoApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
app.filter("checkedItems", function () {
    return function (todo, showComplete) {
        var resultArr = [];
        angular.forEach(todo, function (todo) {
            if (todo.done == false || showComplete == true) {
                resultArr.push(todo);
            }
        });
        return resultArr;
    }
});

app.controller('todoController', function($scope, $http) {


    $scope.todos = [];


    $scope.init = function() {

        $http.get('/api/todos').
            success(function(data, status, headers, config) {
                $scope.todos = data;
                $scope.loading = false;

            });
    };

    $scope.addTodo = function() {
        $scope.loading = true;
        if( $scope.todo.title) {
            console.log($scope.todo);
            $http.post('/api/todos', {
                title: $scope.todo.title,
                done: $scope.todo.done
            }).success(function (data, status, headers, config) {
                //$scope.todos.push(data);
                $scope.todo = '';
                //$scope.loading = false;
                $scope.init();
            });

        }
        else{

            alert('insert data');
        }

    };

    $scope.updateTodo = function(todo) {


        $http.put('/api/todos/' + todo.id, {
            title: todo.title,
            done: todo.done
        }).success(function(data, status, headers, config) {
            //todo = data;
            //$scope.loading = false;

            $scope.init();


        });
    };

    $scope.deleteTodo = function(todo) {


       // var todo = $scope.todos.todo[index];

        $http.delete('/api/todos/' + todo.id)
            .success(function() {

                $scope.todos.todo.splice(todo, 1);
                $scope.init();




            });
    };

    $scope.warningLevel = function () {
        return $scope.todos.count < 3 ? "label-success" : "label-danger";
    }
    $scope.progressLevel = function () {


        var count = 0;

        angular.forEach($scope.todos.todo, function (todo) {
            if (todo.done) { count++ }
        });

           //  console.log(count);
        var total =count+$scope.todos.count;
        return Math.floor((count/total)*100);


    }


    $scope.init();

});
