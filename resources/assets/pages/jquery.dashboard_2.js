
/**
* Theme: Ubold Admin Template
* Author: Coderthemes
* Dashboard 2
*/

!function($) {
    "use strict";

    var Dashboard2 = function() {
    	this.$realData = []
    };

    //creates area chart with dotted
    Dashboard2.prototype.createAreaChartDotted = function(element, pointSize, lineWidth, data, xkey, ykeys, labels, Pfillcolor, Pstockcolor, lineColors) {
        Morris.Area({
            element: element,
            pointSize: 0,
            lineWidth: 0,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            hideHover: 'auto',
            pointFillColors: Pfillcolor,
            pointStrokeColors: Pstockcolor,
            resize: true,
            gridLineColor: '#eef0f2',
            lineColors: lineColors
        });

   },
    Dashboard2.prototype.init = function() {

        //creating area chart
        var $areaDotData = [
                { y: '1389', a: 10, b: 20, c:30 },
                { y: '1390', a: 75,  b: 65, c:30 },
                { y: '1391', a: 50,  b: 40, c:30 },
                { y: '1392', a: 75,  b: 65, c:30 },
                { y: '1393', a: 50,  b: 40, c:30 },
                { y: '1394', a: 75,  b: 65, c:30 },
                { y: '1395', a: 90, b: 60, c:30 }
            ];
        this.createAreaChartDotted('morris-area-with-dotted', 0, 0, $areaDotData, 'y', ['a', 'b', 'c'], ['دکستاپ ', 'تبلت ها ', 'موبایل ها '],['#ffffff'],['#999999'], ['#36404a', '#5d9cec','#bbbbbb']);

    },
    //init
    $.Dashboard2 = new Dashboard2, $.Dashboard2.Constructor = Dashboard2
}(window.jQuery),

//initializing
function($) {
    "use strict";
    $.Dashboard2.init();
}(window.jQuery);