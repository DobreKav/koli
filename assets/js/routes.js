app.config(function($routeProvider) {
  $routeProvider
  .when("/Login", {
    templateUrl : "view/Login.html",
	controller: "myCtrl"
  })
  .when("/contact", {
    templateUrl : "Marki_modeli.html",
	controller: "myCtrl"
  })
  .when("/Service", {
    templateUrl : "view/Service.html",
	controller: "myCtrl"
  })
  .when("/Salon", {
    templateUrl : "view/Salon.html",
	controller: "myCtrl"
  });
});