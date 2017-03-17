var app = angular.module('Order', []);

app.controller('OrderController', function($scope) { // after function to close bracket are dependencies

    $scope.services = [{
        name: "Tutorials Development",
        price: 500,
        active: "true"
    }, {
        name: 'Tutorial Design',
        price: 300,
        active: false
    }, {
        name: 'Code Integration',
        price: 250,
        active: false
    }, {
        name: 'Training',
        price: 220,
        active: false
    }];

    $scope.toggleActive = function(s) {
        s.active = !s.active;
    }; // this is in line function

    $scope.total = function() {
        var total = 0;
        //add code here
        angular.forEach($scope.services,function (s){  // s is $scope.services
            if(s.active){
                total += s.price;   
            }
        });
        
        return total;
    };
});
