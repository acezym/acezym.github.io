// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Define marker path
var targetSVG = "M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z";

// Create map instance
var chart = am4core.create("chartdiv", am4maps.MapChart);

// Set map definition
chart.geodata = am4geodata_worldLow;

// Set projection
chart.projection = new am4maps.projections.Miller();

// Add zoom control
chart.zoomControl = new am4maps.ZoomControl();

// Set initial zoom
chart.homeZoomLevel = 2.5;
chart.homeGeoPoint = {
  latitude: 51,
  longitude: -23
};

// Create map polygon series
var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());
polygonSeries.exclude = ["AQ"];
polygonSeries.useGeodata = true;
polygonSeries.mapPolygons.template.fill = chart.colors.getIndex(0).lighten(0.5);

// Add images
var imageSeries = chart.series.push(new am4maps.MapImageSeries());
var imageTemplate = imageSeries.mapImages.template;
imageTemplate.tooltipText = "{title}";
imageTemplate.nonScaling = true;

var marker = imageTemplate.createChild(am4core.Sprite);
marker.path = targetSVG;
marker.horizontalCenter = "middle";
marker.verticalCenter = "middle";
marker.fill = chart.colors.getIndex(1).brighten(-0.5);

imageTemplate.propertyFields.latitude = "latitude";
imageTemplate.propertyFields.longitude = "longitude";
imageSeries.data = [ {
  "id": "london",
  "svgPath": targetSVG,
  "title": "WTA珠海精英赛",
  "latitude": 22.131591,
  "longitude": 113.541112,
  "scale": 1
}, {
  "svgPath": targetSVG,
  "title": "香港公开赛",
  "latitude": 22.284390,
  "longitude": 114.188950,
  "scale": 0.5
}, {
  "svgPath": targetSVG,
  "title": "中国网球公开赛",
  "latitude": 40.016310,
  "longitude": 116.374524,
  "scale": 0.5
}, {
  "svgPath": targetSVG,
  "title": "武汉网球公开赛",
  "latitude": 23.453720,
  "longitude": 120.445510,
  "scale": 0.5
}, {
  "svgPath": targetSVG,
  "title": "广州网球公开赛",
  "latitude": 23.148670,
  "longitude": 113.415472,
  "scale": 0.5
}, {
  "svgPath": targetSVG,
  "title": "日本广岛公开赛",
  "latitude": 35.636333,
  "longitude": 139.790167,
  "scale": 0.5
}, {
  "svgPath": targetSVG,
  "title": "美国网球公开赛",
  "latitude": 40.752710,
  "longitude": -73.840410,
  "scale": 0.5
}, {
  "svgPath": targetSVG,
  "title": "蒙特利尔网球大师赛",
  "latitude": 43.772200,
  "longitude": -79.512680,
  "scale": 0.5
}, {
  "svgPath": targetSVG,
  "title": "圣何塞公开赛",
  "latitude": 37.332020,
  "longitude": -121.901490,
  "scale": 0.5
}, {
  "svgPath": targetSVG,
  "title": "江西南昌公开赛",
  "latitude": 28.681940,
  "longitude": 115.878050,
  "scale": 0.5
}, {
  "svgPath": targetSVG,
  "title": "温布尔顿网球赛",
  "latitude": 51.433800,
  "longitude": -0.205350,
  "scale": 0.5
}, {
  "svgPath": targetSVG,
  "title": "罗兰·加洛斯法国网球公开赛",
  "latitude": 48.856890,
  "longitude": 2.350850,
  "scale": 0.5
}, {
  "svgPath": targetSVG,
  "title": "斯特拉斯堡国际赛",
  "latitude": 48.553520,
  "longitude": 7.680690,
  "scale": 0.5
}, {
  "svgPath": targetSVG,
  "title": "罗马网球公开赛",
  "latitude": 41.928290,
  "longitude": 12.455720,
  "scale": 0.5
}, {
  "svgPath": targetSVG,
  "title": "马德里大师赛",
  "latitude": 40.460620,
  "longitude": -3.667880,
  "scale": 0.5
}, {
  "svgPath": targetSVG,
  "title": "伊斯坦布尔公开赛",
  "latitude": 41.117850,
  "longitude": 29.036350,
  "scale": 0.5
}, {
  "svgPath": targetSVG,
  "title": "迈阿密大师赛",
  "latitude": 25.707610,
  "longitude": -80.158570,
  "scale": 0.5
}, {
  "svgPath": targetSVG,
  "title": "印第安维尔斯大师赛",
  "latitude": 33.734890,
  "longitude": -116.317690,
  "scale": 0.5
}, {
  "svgPath": targetSVG,
  "title": "迪拜公开赛",
  "latitude": 25.294860,
  "longitude": 55.339574,
  "scale": 0.5
}, {
  "svgPath": targetSVG,
  "title": "多哈公开赛",
  "latitude": 25.236040,
  "longitude": 51.396740,
  "scale": 0.5
} , {
  "svgPath": targetSVG,
  "title": "澳大利亚网球公开赛",
  "latitude": -37.815340,
  "longitude": 144.963230,
  "scale": 0.5
}, {
  "svgPath": targetSVG,
  "title": "深圳公开赛",
  "latitude": 22.562070,
  "longitude": 114.158079,
  "scale": 0.5
} ];

// Add lines
var lineSeries = chart.series.push(new am4maps.MapLineSeries());
var lineTemplate = lineSeries.mapLines.template;
lineTemplate.nonScalingStroke = true;
lineTemplate.arrow.nonScaling = true;
lineTemplate.stroke = chart.colors.getIndex(1).brighten(-0.5);

lineSeries.data = [{
  "multiGeoLine": [
    [
      { "latitude": 39.142488, "longitude": 117.216994 },
      { "latitude": 22.131591, "longitude": 113.541112},
    ]
  ]
}, {
  "multiGeoLine": [
    [
      { "latitude": 39.142488, "longitude": 117.216994 },
      { "latitude": 22.28439, "longitude": 114.188950 }
    ]
  ]
}, {
  "multiGeoLine": [
    [
      { "latitude": 39.142488, "longitude": 117.216994 },
      { "latitude": 23.453720, "longitude": 120.445510 },
    ]
  ]
}, {
  "multiGeoLine": [
    [
      { "latitude": 39.142488, "longitude": 117.216994 },
      { "latitude": 40.016310, "longitude": 116.374524 },
    ]
  ]
}, {
  "multiGeoLine": [
    [
      { "latitude": 39.142488, "longitude": 117.216994 },
      { "latitude": 23.148670, "longitude": 113.415472 },
    ]
  ]
}, {
  "multiGeoLine": [
    [
      { "latitude": 39.142488, "longitude": 117.216994 },
      { "latitude": 35.636333, "longitude": 139.790167 },
    ]
  ]
}, {
  "multiGeoLine": [
    [
      { "latitude": 39.142488, "longitude": 117.216994 },
      { "latitude": 40.752710, "longitude": -73.840410 },
    ]
  ]
}, {
  "multiGeoLine": [
    [
      { "latitude": 39.142488, "longitude": 117.216994 },
      { "latitude": 43.772200, "longitude": -79.512680 },
    ]
  ]
}, {
  "multiGeoLine": [
    [
      { "latitude": 39.142488, "longitude": 117.216994 },
      { "latitude": 37.332020, "longitude": -121.901490 },
    ]
  ]
}, {
  "multiGeoLine": [
    [
      { "latitude": 39.142488, "longitude": 117.216994 },
      { "latitude": 28.681940, "longitude": 115.878050 },
    ]
  ]
}, {
  "multiGeoLine": [
    [
      { "latitude": 39.142488, "longitude": 117.216994 },
      { "latitude": 51.433800, "longitude": -0.205350},
    ]
  ]
}, {
  "multiGeoLine": [
    [
      { "latitude": 39.142488, "longitude": 117.216994 },
      { "latitude": 48.856890, "longitude": 2.350850 },
     ]
  ]
}, {
  "multiGeoLine": [
    [
      { "latitude": 39.142488, "longitude": 117.216994 },
      { "latitude": 48.553520, "longitude": 7.680690 },
    ]
  ]
}, {
  "multiGeoLine": [
    [
      { "latitude": 39.142488, "longitude": 117.216994 },
      { "latitude": 41.928290, "longitude": 12.455720},
    ]
  ]
}, {
  "multiGeoLine": [
    [
      { "latitude": 39.142488, "longitude": 117.216994 },
      { "latitude": 33.734890, "longitude": -116.317690 },
     ]
  ]
}, {
  "multiGeoLine": [
    [
      { "latitude": 39.142488, "longitude": 117.216994 },
      { "latitude": 48.856890, "longitude": 2.350850 },
     ]
  ]
}, {
  "multiGeoLine": [
    [
      { "latitude": 39.142488, "longitude": 117.216994 },
      { "latitude": 48.553520, "longitude": 7.680690 },
    ]
  ]
}, {
  "multiGeoLine": [
    [
      { "latitude": 39.142488, "longitude": 117.216994 },
      { "latitude": 25.294860, "longitude": 55.339574},
    ]
  ]
}, {
  "multiGeoLine": [
    [
      { "latitude": 39.142488, "longitude": 117.216994 },
      { "latitude": -37.815340, "longitude": 144.963230 },
     ]
  ]
}, {
  "multiGeoLine": [
    [
      { "latitude": 39.142488, "longitude": 117.216994 },
      { "latitude": 22.562070, "longitude": 114.158079 },
     ]
  ]
}, {
  "multiGeoLine": [
    [
      { "latitude": 39.142488, "longitude": 117.216994 },
      { "latitude": 40.460620, "longitude": -3.667880 },
     ]
  ]
}, {
  "multiGeoLine": [
    [
      { "latitude": 39.142488, "longitude": 117.216994 },
      { "latitude": 41.117850, "longitude": 29.036350 },
     ]
  ]
}, {
  "multiGeoLine": [
    [
      { "latitude": 39.142488, "longitude": 117.216994 },
      { "latitude": 25.707610, "longitude": -80.158570 },
     ]
  ]
}, {
  "multiGeoLine": [
    [
      { "latitude": 39.142488, "longitude": 117.216994 },
      { "latitude": 25.236040, "longitude": 51.396740 },
     ]
  ]
}
                  ];
