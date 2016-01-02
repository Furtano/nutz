angular.module('app', []).controller("MainController", function($scope, $http){

$scope.getAnzeigen = function(){
  $http.get('getAnzeigen' ).success(function(data){
        $scope.anzeigen = data;

        for (var i = 0; i < data.length; i++){
          $scope.anzeigen[i].geburtsdatum = moment($scope.anzeigen[i].geburtsdatum.date).locale("de").format('LL');
        }

      });
    };
    $scope.getAnzeigen();
});
