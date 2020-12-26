$(document).ready(function(){
    
    chartYear();
    chartMonth();
    chartNow();
    chartDay();
    $('#plain').click(function () {
        chart.update({
            chart: {
                inverted: false,
                polar: false
            },
            subtitle: {
                text: 'Plain'
            }
        });
    });

    $('#inverted').click(function () {
        chart.update({
            chart: {
                inverted: true,
                polar: false
            },
            subtitle: {
                text: 'Inverted'
            }
        });
    });

    $('#polar').click(function () {
        chart.update({
            chart: {
                inverted: false,
                polar: true
            },
            subtitle: {
                text: 'Polar'
            }
        });
    });
});

function chartYear() {
    var order = $('#container').data('order');
    var listOfValue = [];
    var listOfYear = [];
    order.forEach(function(element){
        listOfYear.push(element.getYear);
        listOfValue.push(element.value);
    });
    console.log(listOfValue);
    var chart = Highcharts.chart('container', {

        title: {
            text: 'Tổng đơn trong năm'
        },

        subtitle: {
            text: 'Plain'
        },

        xAxis: {
            categories: listOfYear,
        },

        series: [{
            type: 'column',
            colorByPoint: true,
            data: listOfValue,
            showInLegend: false
        }]
    });
}

function chartMonth() {
    var orderM = $('#chart-month').data('order');
    var listOfVal = [];
    var listOfMonth = [];
    orderM.forEach(function(element){
        listOfMonth.push(element.getMonth);
        listOfVal.push(element.value);
    });
    
    var chart = Highcharts.chart('chart-month', {

        title: {
            text: 'Tổng đơn trong tháng'
        },

        subtitle: {
            text: 'Plain'
        },

        xAxis: {
            categories: listOfMonth,
        },

        series: [{
            type: 'column',
            colorByPoint: true,
            data: listOfVal,
            showInLegend: false
        }]
    });
}

function chartDay() {
    var order = $('#chart-day').data('order');
    var listOfValue = [];
    var listOfDay = [];
    order.forEach(function(element){
        listOfDay.push(element.getDay);
        listOfValue.push(element.value);
    });
    console.log(listOfValue);
    var chart = Highcharts.chart('chart-day', {

        title: {
            text: 'Đơn từng ngày trong tháng'
        },

        subtitle: {
            text: 'Plain'
        },

        xAxis: {
            categories: listOfDay,
        },

        series: [{
            type: 'column',
            colorByPoint: true,
            data: listOfValue,
            showInLegend: false
        }]
    });
}

function chartNow() {
    var productBuy = $('#chart-now').data('order');
    console.log(productBuy);
    var chartData = [];
    productBuy.forEach(function(element){
      
        var ele = { name : element.name, y : parseFloat(element.y) };
        
        chartData.push(ele);
    });
    Highcharts.chart('chart-now', {
        chart: {
          plotBackgroundColor: null,
          plotBorderWidth: null,
          plotShadow: false,
          type: 'pie'
        },
        title: {
          text: 'Đơn hàng hôm nay'
        },
        tooltip: {
          pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
          pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
              enabled: false
            },
            showInLegend: true
          }
        },
        series: [{
          name: 'Brands',
          colorByPoint: true,
          data: chartData,
        }]
    });
}