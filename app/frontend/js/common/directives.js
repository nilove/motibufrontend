angular.module('motibu.common_directives', [
    'ui.select'
])
.directive('fileInput', function(){
    return {
        scope: {
            fileInput: '='
        },
        link: function(scope, el, attrs){
            el.bind('change', function(event){
                var files = event.target.files;
                var file = files[0];
                scope.fileInput = file ? file : undefined;
                scope.$apply();
            });
        }
    };
})

.directive('toggleSkill', function(){
    return {
        link: function(scope, el, attrs){
            el.bind('click', function(e){
              e.preventDefault(),
              $(this).toggleClass('active'),
              $(this).parent().next().children('.toggle-content').slideToggle(300);

              return false;
            });
        }
    };
})
.directive('highlightMenuItem', function () {
    return {
        restrict: 'A',
        link: function (scope, element, attr) {
            element.find('li').click( function () {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');
            })
        }
    }
})
.directive('geolocation', function () {
    return {
        restrict: 'A',
        require: "ngModel",
        link: function (scope, element, attr,ngModel) {
            //alert("Here");
             $(element).geocomplete({
                  map: ".map_canvas",
                  details: "form ",
                  markerOptions: {
                    draggable: true
                  }
                });
                
                $(element).bind("geocode:dragged", function(event, latLng){
                    
                  console.log(latLng);
                  scope.$apply(function()
                  {
                    scope.location_latitude=latLng.lat();
                    scope.location_longitude=latLng.lng();
                  });
                  

                });

                $(element).bind("geocode:result", function(event, result){                  
                    scope.$apply(function()
                      {
                        scope.location_latitude=result.geometry.location.A;
                        scope.location_longitude=result.geometry.location.F;

                        //scope.$parent.residency=result.formatted_address;
                        ngModel.$setViewValue(result.formatted_address);
                      });
                });
                
                 $(element).trigger("geocode");
        }
    }
})
.directive('geolocationinline', function () {
    return {
        restrict: 'A',
        require: "ngModel",
        link: function (scope, element, attr,ngModel) {
            //alert("Here");
             $(element).geocomplete({
                  details: "form ",
                  markerOptions: {
                    draggable: true
                  }
                });
                
                $(element).bind("geocode:dragged", function(event, latLng){
                    
                  console.log(latLng);
                  scope.$apply(function()
                  {
                    scope.location_latitude=latLng.lat();
                    scope.location_longitude=latLng.lng();
                  });
                  

                });

                $(element).bind("geocode:result", function(event, result){                  
                    scope.$apply(function()
                      {
                        scope.location_latitude=result.geometry.location.A;
                        scope.location_longitude=result.geometry.location.F;

                        //scope.$parent.residency=result.formatted_address;
                        ngModel.$setViewValue(result.formatted_address);
                      });
                });
                
                 $(element).trigger("geocode");
        }
    }
});