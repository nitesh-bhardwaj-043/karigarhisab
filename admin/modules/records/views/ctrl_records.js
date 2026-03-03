app.controller(
  "ctrl_records",
  function ($scope, $http, $timeout, $state, $stateParams, $window) {
    $http.get("login/check_valid_session").success(function (data) {
      if (data != 1) {
        window.location.assign('<?=site_url("login")?>');
      }
    });

    $scope.w_id = null;
    $scope.loader = function () {
      let url = "workers/view_data";
      if ($scope.w_id) {
        url += "?id=" + $scope.w_id;
      }
      $http.get(url).success(function (data) {
        $scope.worker_data = data[0];
      });
    };
    if ($stateParams.id) {
      $scope.w_id = $stateParams.id;
      $scope.loader();
    }
  }
);
