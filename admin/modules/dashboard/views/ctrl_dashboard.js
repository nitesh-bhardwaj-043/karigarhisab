//blank line is required
app.controller("ctrl_dashboard", function ($scope, $http) {
  $http.get("login/check_valid_session").success(function (data) {
    if (data != 1) {
      window.location.assign('<?=site_url("login")?>');
    }
  });
  $scope.loader = function () {
    $http.get("transactions/get_wallet").success(function (data) {
      $scope.grams = data[0].grams;
    });
    $http.get("workers/view_admin").success(function (data) {
      $scope.name = data[0].name;
    });
  };

  $scope.loader();
});
