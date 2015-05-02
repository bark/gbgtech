var gbgtech = angular.module('gbgtech', ['gapi'])
.value('GoogleApp', {
    apiKey: 'AIzaSyA-WngRqzV1hbbyTQd-OiXlKigPIcZbuBg',
    clientId: 'YOUR_CLIENT_ID',
    scopes: [
      // whatever scopes you need for your app, for example:
      'https://www.googleapis.com/auth/calendar',
      'https://www.googleapis.com/auth/calendar.readonly',
      'https://www.googleapis.com/auth/youtube',
      'https://www.googleapis.com/auth/userinfo.profile'
      // ...
    ]
  }).
controller('GbgTechController',['$scope',function($scope){
}]);