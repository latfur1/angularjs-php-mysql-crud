//Reference File app.js
myApp.controller('student_contrloer', function ($scope, $state, $http, $location) {
    var vm = this;
  
    $scope.currentPage = 1;
    $scope.maxSize = 3;
    this.search_data = function (search_input) {
        if (search_input.length > 0)
            vm.loadData(1);

    };

    this.loadData = function (page_number) {
        var search_input = document.getElementById("search_input").value;
        $http.get('php/select.php?page=' + page_number + '&search_input=' + search_input).then(function (response) {
            vm.student_list = response.data.student_data;
            $scope.total_row = response.data.total;
        });
    };

    $scope.$watch('currentPage + numPerPage', function () {

        vm.loadData($scope.currentPage);

        var begin = (($scope.currentPage - 1) * $scope.numPerPage)
                , end = begin + $scope.numPerPage;


    });
//    

    this.addStudent = function (info) {
        $http.post('php/insert.php', info).then(function (response) {
            vm.msg = response.data.message;
            vm.alert_class = 'custom-alert';
            document.getElementById("create_student_info_frm").reset();
            $('#create_student_info_modal').modal('toggle');
            vm.loadData($scope.currentPage);

        });
    };

    this.edit_student_info = function (student_id) {
        $http.get('php/selectone.php?student_id=' + student_id).then(function (response) {
            vm.student_info = response.data;
        });
    };


    this.updateStudent = function () {
        $http.put('php/update.php', this.student_info).then(function (response) {
            vm.msg = response.data.message;
            vm.alert_class = 'custom-alert';
            $('#edit_student_info_modal').modal('toggle');
            vm.loadData($scope.currentPage);
        });
    };


    this.get_student_info = function (student_id) {
        $http.get('php/selectone.php?student_id=' + student_id).then(function (response) {
            vm.view_student_info = response.data;


        });
    };


    this.delete_student_info = function (student_id) {
        $http.delete('php/delete.php?student_id=' + student_id).then(function (response) {
            vm.msg = response.data.message;
            vm.alert_class = 'custom-alert';
            vm.loadData($scope.currentPage);
        });
    };


});

