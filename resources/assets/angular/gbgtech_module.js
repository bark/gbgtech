var gbgtech = angular.module('gbgtech', [])
.controller('GbgTechController',['PostService','$scope',function(PostService,$scope){
	PostService.getListOfEvents().then(function(listOfEvents){
		$scope.listOfEvents = listOfEvents;
		console.log(listOfEvents);
	});
}]);