@extends('app')
@section('content')
    <div class="container" ng-app="todoApp" ng-controller="todoController">



        <div class="well col-md-6 b">
            <div class="input-group">
                <input class="form-control" placeholder="Enter Your Todo's" ng-model="todo.title" />
                    <span class="input-group-btn">
                         <button class="btn btn-primary" ng-click="addTodo()"><span class="glyphicon glyphicon-list-alt"></span>&nbsp; Add</button>
                    </span>
            </div><br>


            <div>
            <button class="btn btn-default" type="button" ng-class="warningLevel()"
                    ng-hide="todos.count== 0">
                    remaining&nbsp; <span class="badge"> <% todos.count %></span>
            </button></div><br>

            <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                     ng-style="{'width':progressLevel() + '%'}">
                    <span><% progressLevel()+ '% Work Done' %></span>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading text-center"><h4>Todo's List</h4></div>

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th class="text-center">Done</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Remove</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr ng-repeat='todo in todos.todo | checkedItems:showComplete'>
                        <td class="text-center"><input type="checkbox" ng-true-value="1" ng-false-value="'0'" ng-model="todo.done" ng-change="updateTodo(todo)"></td>
                        <td class="text-center"><% todo.title %></td>
                        <td class="text-center"><button class="btn btn-danger btn-xs" ng-click="deleteTodo(todo)">  <span class="glyphicon glyphicon-trash" ></span></button></td>

                    </tr>
                    </tbody>
                </table>
            </div>

                <div class="checkbox-inline">
                    <label><input type="checkbox" ng-model="showComplete"> Show Complete</label>
                </div>



        </div>
    </div>
    @stop