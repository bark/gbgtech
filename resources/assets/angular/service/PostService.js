angular.module('gbgtech')
	.service('PostService',['ApiFactory',function(ApiFactory){
		this.getListOfEvents = function(){
			return ApiFactory.getListOfEvents();
		} 
	}]);