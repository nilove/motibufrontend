angular.module('motibu.auth.register_controller', [
        'motibu.common_services'
    ])
    .controller('RegisterController', ['$scope', '$http', '$location', '$log', function ($scope, $http, $location, $log) {
        $scope.email = '';
        $scope.fname = '';
        $scope.lname = '';
        $scope.password = '';
        $scope.confirm_password = '';
        $scope.confirmationemail=false;
        $scope.registrationFailed = false;
        $scope.is_external_vcard=false;
        $scope.submit = function () {
            return $http( {
                method: 'POST',
                url: '/register',
                data: {
                    email: $scope.email,
                    fname: $scope.fname,
                    lname: $scope.lname,
                    password: $scope.password,
                    password_confirmation : $scope.confirm_password,
                    is_external_vcard: $scope.is_external_vcard

                },
                transformRequest: function(obj) {
                    var str = [];
                    for(var p in obj)
                        str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
                    return str.join("&");
                },
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            })
                .success(function (data, status, headers, config) {
                    $log.info(data);
                    if(!data.success){
                        $scope.registrationFailed = true;
                    }else{
                        $scope.confirmationemail=true;
                        $scope.email = '';
                        $scope.fname = '';
                        $scope.lname = '';
                        $scope.password = '';
                        $scope.confirm_password = '';
                        $scope.registrationFailed=false;
                        //$location.path('/');
                    }

                })
                .error(function (data, status, headers, config) {
                    $scope.registrationFailed = true;

                });
        }
    }])