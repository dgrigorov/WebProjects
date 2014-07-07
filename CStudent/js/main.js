jQuery(document).ready(function() {

    /*
        Countdown initializer
    */
    var now = new Date();
    var countTo = 26 * 27 * 99 * 100 * 1000 + now.valueOf();
    $('.timer').countdown(countTo, function(event) {
        var $this = $(this);
        switch(event.type) {
            case "seconds":
            case "minutes":
            case "hours":
            case "days":
            case "weeks":
            case "daysLeft":
                $this.find('span.'+event.type).html(event.value);
                break;
            case "finished":
                $this.hide();
                break;
        }
    });
});


angular.module('plunker', ['ui.bootstrap']);
function AccordionDemoCtrl($scope) {
  $scope.staticTitle = "Static Title";

  $scope.groups = [
    { title: "Dynamic Title 1", content: "Dynamic content 1" }, 
    { title: "Dynamic Title 2", content: "Dynamic content 2" }
  ];
}