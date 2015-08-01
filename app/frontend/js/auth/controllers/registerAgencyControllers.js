angular.module('motibu.auth.register_agency_controllers', [
        'motibu.common_services'
    ])
    .controller('RegisterAgencyControllerStep1', ['$scope', '$http', '$location', '$log', function ($scope, $http, $location, $log) {
        $scope.agency_name = '';
        $scope.email = '';
        $scope.fname = '';
        $scope.lname = '';
        $scope.password = '';
        $scope.password_confirmation = '';

        $scope.registrationFailed = false;

        $scope.submit = function () {
            return $http( {
                method: 'POST',
                url: '/register_agency',
                data: {
                    agency_name: $scope.agency_name,
                    email: $scope.email,
                    fname: $scope.fname,
                    lname: $scope.lname,
                    password: $scope.password,
                    password_confirmation : $scope.password_confirmation

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
                    $location.path('/register_agency_step_2');
                }
            })
            .error(function (data, status, headers, config) {
                $scope.registrationFailed = true;
            });
        }
    }])
    .controller('RegisterAgencyControllerStep3', ['$scope', '$http', '$location', '$log', function ($scope, $http, $location, $log) {
        $scope.selectedPlan = 0;

        $scope.placeOrder = function () {
            return $http( {
                method: 'POST',
                url: '/place_order',
                data: {
                    user_id: getQS('user_id'),
                    plan_id: $scope.selectedPlan,
                    payment_info_card_no: 2093099020923,
                    payment_info_cvv: 232
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
                if(!data.success){
                    $scope.paymentFailed = true;
                }else{
                    $location.path('/register_agency_step_4');
                }
            })
            .error(function (data, status, headers, config) {
                $scope.paymentFailed = true;
            });
        };
    }])