var app = angular.module("instantSearch", []);

app.filter('searchFor', function() { //ทำให้ช่วยค้นหาข้อมูลได้ง่ายขึ้น
    return function(arr, searchString) {
        if (!searchString) {
            return arr;
        }
        var result = [];
        //add code here
        searchString = searchString.toLowerCase();
        angular.forEach(arr,function(item){
            if(item.title.toLowerCase().indexOf(searchString) != -1){
                result.push(item); //push into array result
            }
        });
        return result;
    };
});

app.controller('InstantSearchController', function($scope) {
            $scope.items = [{
                url: 'http://www.tutorialspoint.com/android/',
                title: 'Android tutorials',
                image: 'http://www.tutorialspoint.com/android/images/android-mini-logo.jpg'
            }, {
                url: 'http://www.tutorialspoint.com/angularjs/',
                title: 'AngularJs Tutorials ',
                image: 'http://www.tutorialspoint.com/angularjs/images/angularjs-mini-logo.jpg'
            }, {
                url: 'http://www.tutorialspoint.com/html5/',
                title: 'HTML5 Tutorials',
                image: 'http://www.tutorialspoint.com/html5/images/html5-mini-logo.jpg'
            }, {
                url: 'http://www.tutorialspoint.com/css/',
                title: 'CSS Tutorials',
                image: 'http://www.tutorialspoint.com/css/images/css-mini-logo.jpg'
            }, {
                url: 'http://www.tutorialspoint.com/java/',
                title: 'Java Tutorials',
                image: 'http://www.tutorialspoint.com/java/images/java-mini-logo.jpg'
            }, {
                url: 'http://www.tutorialspoint.com/joomla/',
                title: 'Joomla Tutorials',
                image: 'http://www.tutorialspoint.com/joomla/images/joomla-mini-logo.jpg'
            }, {
                url: 'http://www.tutorialspoint.com/html/',
                title: 'HTML Tutorials ',
                image: 'http://www.tutorialspoint.com/html/images/html-mini-logo.jpg'
            }];
        });
