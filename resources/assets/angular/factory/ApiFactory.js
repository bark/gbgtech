angular.module('gbgtech').factory('ApiFactory',[function(){
	this.getListOfEvents=function() {
		return $http.get('/getListOfEvents');
	});
	}
}]);