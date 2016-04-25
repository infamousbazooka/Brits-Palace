var arraylist = {
    "type": "serial",
    "theme": "light",
    "marginRight": 40,
    "marginLeft": 40,
    "autoMarginOffset": 20,
    "dataDateFormat": "YYYY-MM-DD",
    "valueAxes": [{
        "id": "v1",
        "axisAlpha": 0,
        "position": "left",
        "ignoreAxisWidth":true
    }],
    "balloon": {
        "borderThickness": 1,
        "shadowAlpha": 0
    },
    "graphs": [{
        "id": "g1",
        "balloon":{
          "drop":true,
          "adjustBorderColor":false,
          "color":"#ffffff"
        },
        "bullet": "round",
        "bulletBorderAlpha": 1,
        "bulletColor": "#FFFFFF",
        "bulletSize": 5,
        "hideBulletsCount": 50,
        "lineThickness": 2,
        "title": "red line",
        "useLineColorForBulletBorder": true,
        "valueField": "value",
        "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
    }],
    "chartScrollbar": {
        "graph": "g1",
        "oppositeAxis":false,
        "offset":30,
        "scrollbarHeight": 80,
        "backgroundAlpha": 0,
        "selectedBackgroundAlpha": 0.1,
        "selectedBackgroundColor": "#888888",
        "graphFillAlpha": 0,
        "graphLineAlpha": 0.5,
        "selectedGraphFillAlpha": 0,
        "selectedGraphLineAlpha": 1,
        "autoGridCount":true,
        "color":"#AAAAAA"
    },
    "chartCursor": {
        "pan": true,
        "valueLineEnabled": true,
        "valueLineBalloonEnabled": true,
        "cursorAlpha":1,
        "cursorColor":"#258cbb",
        "limitToGraph":"g1",
        "valueLineAlpha":0.2
    },
    "valueScrollbar":{
      "oppositeAxis":false,
      "offset":50,
      "scrollbarHeight":10
    },
    "categoryField": "date",
    "categoryAxis": {
        "parseDates": true,
        "dashLength": 1,
        "minorGridEnabled": true
    },
    "export": {
        "enabled": true
    },
    "dataProvider": [{
        "date": "2016-03-16",
        "value": 34000
    }, {
        "date": "2016-03-17",
        "value": 33500
    }, {
        "date": "2016-03-18",
        "value": 34890
    }, {
        "date": "2016-03-19",
        "value": 34200
    }, {
        "date": "2016-03-20",
        "value": 33000
    }, {
        "date": "2016-03-21",
        "value": 33000
    }, {
        "date": "2016-03-22",
        "value": 33000
    }, {
        "date": "2016-03-23",
        "value": 34600
    }, {
        "date": "2016-03-24",
        "value": 33000
    }, {
        "date": "2016-03-25",
        "value": 33000
    }, {
        "date": "2016-03-26",
        "value": 33500
    }, {
        "date": "2016-03-27",
        "value": 33500
    }, {
        "date": "2016-03-28",
        "value": 32000
    }, {
        "date": "2016-03-29",
        "value": 32000
    }, {
        "date": "2016-03-30",
        "value": 32000
    }, {
        "date": "2016-03-31",
        "value": 32000
    }, {
        "date": "2016-04-01",
        "value": 32000
    }]
};
var sum = 0;
var i = 0;
for(i = 0; i<arraylist["dataProvider"].length; i++){
    sum += arraylist["dataProvider"][i]["value"];
}
var datstr = arraylist["dataProvider"][arraylist["dataProvider"].length-1]["date"];
var mydate = new Date(datstr);
mydate.setDate(mydate.getDate() + 1);
arraylist['dataProvider'].push({"date":mydate,"value":Math.floor(sum/i)});

var chart = AmCharts.makeChart("chartdiv", arraylist);

chart.addListener("rendered", zoomChart);

zoomChart();

function zoomChart() {
    chart.zoomToIndexes(chart.dataProvider.length - 40, chart.dataProvider.length - 1);
}