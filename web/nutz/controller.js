angular.module('app', []).controller("MainController", function($scope,$rootScope, $http){
  $scope.anzeigen = [];
  $scope.anzeigenGefiltert = [];
  $scope.man = true;
  $scope.woman = true;
  $scope.liebe = 'Test';
  $scope.liebeId = -2;

$scope.getAnzeigen = function(){
  $http.get('getAnzeigen' ).success(function(data){
        $scope.anzeigen = data;

        for (var i = 0; i < data.length; i++){
          $scope.anzeigen[i].geburtsdatum = moment($scope.anzeigen[i].geburtsdatum.date).locale("de").format('LL');
        }

      console.log($scope.anzeigen);

      });



    };


  $scope.nachrichtSenden = function(anzeige){
    $http.get('nachrichtSenden?id=' + anzeige.id + "&nachricht=" + $scope.nachricht ).success(function(data){});
  };



    $scope.getAnzeigen();

});
