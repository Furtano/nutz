angular.module('app', []).controller("MainController", function($scope, $http){
  $scope.anzeigen = [];
  $scope.anzeigenGefiltert = [];
  $scope.man = true;
  $scope.woman = true;
  $scope.liebe = 'Test';
  $scope.liebeId = -2;
  $scope.email;

$scope.getAnzeigen = function(){
  $http.get('getAnzeigen' ).success(function(data){
        $scope.anzeigen = data;

        for (var i = 0; i < data.length; i++){
          //$scope.anzeigen[i].geburtsdatgebuum = moment($scope.anzeigen[i].geburtsdatum.date).locale("de").format('LL');
        }

      console.log($scope.anzeigen);

      });



    };


  $scope.nachrichtSenden = function(anzeige){
    $http.get(
      'nachrichtSenden?id=' +
      anzeige.id +
      "&nachricht=" +
      $scope.nachricht +
      "&email=" +
      $scope.emailia
     ).success(function(data){
          console.log($scope.data);

     });
  };


    $scope.getAnzeigen();

});
