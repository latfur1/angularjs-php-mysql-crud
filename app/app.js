var myApp = angular.module('example_codeenable', ['ui.router', 'ui.bootstrap']);

myApp.config(function ($stateProvider, $locationProvider, $urlRouterProvider) {

    $urlRouterProvider.otherwise('/');
    $stateProvider
            .state('home', {
                url: '/',
                templateUrl: 'templates/student.html',
                controller: 'student_contrloer',
                controllerAs: "std_ctrl",
              
                resolve: {
                    'title': ['$rootScope', function ($rootScope) {
                            $rootScope.title = "Home";
                        }]
                }

            })
            
    $locationProvider.html5Mode({
        enabled: true,
        requireBase: false
    });




});

