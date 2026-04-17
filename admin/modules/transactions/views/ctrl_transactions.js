//blank line is required
app.controller("ctrl_transactions", function ($scope, $http) {
  $http.get("login/check_valid_session").success(function (data) {
    if (data != 1) {
      window.location.assign('<?=site_url("login")?>');
    }
  });

  $scope.loader = function () {
    $http.get("workers/view_active_data").success(function (data) {
      $scope.workers = data;
    });
    $http.get("workers/view_admin").success(function (data) {
      $scope.admins = data;
    });
    $http.get("transactions/view_data").success(function (data) {
      $scope.datadb = data;
    });
  };

  $scope.loader();

  $scope.filter_new = function () {
    $scope.x = {};
    $scope.y = {};
  };

  $scope.save_data1 = function (y) {
    // console.log("save function called");
    // console.log(y);
    $("#form1").ajaxForm({
      type: "POST",
      url: "transactions/save_data1",
      beforeSend: function () {
        $("#submitbtn1").attr("disabled", true);
        $("#webprogress1").css("display", "inline");
      },
      success: function (data) {
        console.log(data);
        if (data == "1") {
          $scope.loader();
          messages(
            "success",
            "Success!",
            "Transaction Saved Successfully",
            3000
          );
          $scope.filter_new();
        } else if (data == "0") {
          messages("warning", "Info!", "No Data Affected", 3000);
        } else {
          messages("danger", "Warning!", data, 4000);
        }
        $("#webprogress1").css("display", "none");
        $("#submitbtn1").attr("disabled", false);
      },
    });
  };
  $scope.save_data2 = function (y) {
    // console.log("save function called");
    // console.log(y);
    $("#form2").ajaxForm({
      type: "POST",
      url: "transactions/save_data2",
      beforeSend: function () {
        $("#submitbtn2").attr("disabled", true);
        $("#webprogress2").css("display", "inline");
      },
      success: function (data) {
        console.log(data);
        if (data == "1") {
          $scope.loader();
          messages(
            "success",
            "Success!",
            "Transaction Saved Successfully",
            3000
          );
          $scope.filter_new();
        } else if (data == "0") {
          messages("warning", "Info!", "No Data Affected", 3000);
        } else {
          messages("danger", "Warning!", data, 4000);
        }
        $("#webprogress2").css("display", "none");
        $("#submitbtn2").attr("disabled", false);
      },
    });
  };
});
