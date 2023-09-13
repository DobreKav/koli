var app = angular.module('myApp', ["ngRoute"]);
app.controller('myCtrl', function($scope, $http) {
//var $scope.
$scope.full_name ="Ljubisa Popovsk";
$scope.alert_succ=false;
$scope.alert_danger=false;

$http.get("../model/select.php")
	.then(function (response) {$scope.marki = response.data.jsonformat;});

//JSON
$scope.marki
console.log($scope.marki);
$scope.dukani=
[
	{"dukan_id": 1,"ime": "A1","adresa": "bu.1 vi"},
	{"dukan_id": 2,"ime": "A1","adresa": "Part 2/3"},
	{"dukan_id": 3,"ime": "Javen","adresa": "Dimitar Vlahov 3/34"},
	{"dukan_id": 3,"ime": "Javen 2","adresa": "Dimitar Vlahov 3/32"}
];

//Function
$scope.details_dukani=function(ime,adresa){
	$scope.alert_danger=false;
	var objDukani=[];
	
	objDukani.push(
		{
			"ime": ime,
			"adresa": adresa
		}
		);
	console.log(objDukani);
	$scope.alert_succ=true;
}
$scope.erorr=function(){
	$scope.alert_succ=false;
	$scope.alert_danger=true;
}
});

