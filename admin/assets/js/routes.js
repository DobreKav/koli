app.config(function($routeProvider) {
  $routeProvider
  .when("/about", {
    templateUrl : "view/about.html",
	controller: "myCtrl"
  })
  .when("/contact", {
    templateUrl : "view/contact.html",
	controller: "myCtrl"
  })
  .when("/dukani", {
    templateUrl : "view/dukani.html",
	controller: "myCtrl"
  })
  .when("/details_dukani", {
    templateUrl : "view/details_dukani.html",
	controller: "myCtrl"
  });
});