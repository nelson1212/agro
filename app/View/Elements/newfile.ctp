<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Cube - Bootstrap Admin Template</title>

        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" />

        <!-- RTL support - for demo only -->
        <script src="js/demo-rtl.js"></script>
        <!-- 
        If you need RTL support just include here RTL CSS file <link rel="stylesheet" type="text/css" href="css/libs/bootstrap-rtl.min.css" />
        And add "rtl" class to <body> element - e.g. <body class="rtl"> 
        -->

        <!-- libraries -->
        <link rel="stylesheet" type="text/css" href="css/libs/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="css/libs/nanoscroller.css" />

        <!-- global styles -->
        <link rel="stylesheet" type="text/css" href="css/compiled/theme_styles.css" />

        <!-- this page specific styles -->
        <link rel="stylesheet" href="css/libs/daterangepicker.css" type="text/css" />
        <link rel="stylesheet" href="css/libs/jquery-jvectormap-1.2.2.css" type="text/css" />
        <link rel="stylesheet" href="css/libs/weather-icons.css" type="text/css" />

        <!-- Favicon -->
        <link type="image/x-icon" href="favicon.png" rel="shortcut icon" />

        <!-- google font libraries -->
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>

        <!--[if lt IE 9]>
                <script src="js/html5shiv.js"></script>
                <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
     

        <div id="config-tool" class="closed">
            <a id="config-tool-cog">
                <i class="fa fa-cog"></i>
            </a>

            <div id="config-tool-options">
                <h4>Layout Options</h4>
                <ul>
                    <li>
                        <div class="checkbox-nice">
                            <input type="checkbox" id="config-fixed-header" />
                            <label for="config-fixed-header">
                                Fixed Header
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox-nice">
                            <input type="checkbox" id="config-fixed-sidebar" />
                            <label for="config-fixed-sidebar">
                                Fixed Left Menu
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox-nice">
                            <input type="checkbox" id="config-fixed-footer" />
                            <label for="config-fixed-footer">
                                Fixed Footer
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox-nice">
                            <input type="checkbox" id="config-boxed-layout" />
                            <label for="config-boxed-layout">
                                Boxed Layout
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox-nice">
                            <input type="checkbox" id="config-rtl-layout" />
                            <label for="config-rtl-layout">
                                Right-to-Left
                            </label>
                        </div>
                    </li>
                </ul>
                <br/>
                <h4>Skin Color</h4>
                <ul id="skin-colors" class="clearfix">
                    <li>
                        <a class="skin-changer" data-skin="" data-toggle="tooltip" title="Default" style="background-color: #34495e;">
                        </a>
                    </li>
                    <li>
                        <a class="skin-changer" data-skin="theme-white" data-toggle="tooltip" title="White/Green" style="background-color: #2ecc71;">
                        </a>
                    </li>
                    <li>
                        <a class="skin-changer blue-gradient" data-skin="theme-blue-gradient" data-toggle="tooltip" title="Gradient">
                        </a>
                    </li>
                    <li>
                        <a class="skin-changer" data-skin="theme-turquoise" data-toggle="tooltip" title="Green Sea" style="background-color: #1abc9c;">
                        </a>
                    </li>
                    <li>
                        <a class="skin-changer" data-skin="theme-amethyst" data-toggle="tooltip" title="Amethyst" style="background-color: #9b59b6;">
                        </a>
                    </li>
                    <li>
                        <a class="skin-changer" data-skin="theme-blue" data-toggle="tooltip" title="Blue" style="background-color: #2980b9;">
                        </a>
                    </li>
                    <li>
                        <a class="skin-changer" data-skin="theme-red" data-toggle="tooltip" title="Red" style="background-color: #e74c3c;">
                        </a>
                    </li>
                    <li>
                        <a class="skin-changer" data-skin="theme-whbl" data-toggle="tooltip" title="White/Blue" style="background-color: #3498db;">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- global scripts -->
        <script src="js/demo-skin-changer.js"></script> <!-- only for demo -->

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery.nanoscroller.min.js"></script>

        <script src="js/demo.js"></script> <!-- only for demo -->

        <!-- this page specific scripts -->
        <script src="js/moment.min.js"></script>
        <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="js/jquery-jvectormap-world-merc-en.js"></script>
        <script src="js/gdp-data.js"></script>
        <script src="js/flot/jquery.flot.min.js"></script>
        <script src="js/flot/jquery.flot.resize.min.js"></script>
        <script src="js/flot/jquery.flot.time.min.js"></script>
        <script src="js/flot/jquery.flot.threshold.js"></script>
        <script src="js/flot/jquery.flot.axislabels.js"></script>
        <script src="js/jquery.sparkline.min.js"></script>
        <script src="js/skycons.js"></script>

        <!-- theme scripts -->
        <script src="js/scripts.js"></script>
        <script src="js/pace.min.js"></script>

        <!-- this page specific inline scripts -->
        <script>
            $(document).ready(function () {

                //CHARTS
                function gd(year, day, month) {
                    return new Date(year, month - 1, day).getTime();
                }

                if ($('#graph-bar').length) {
                    var data1 = [
                        [gd(2015, 1, 1), 838], [gd(2015, 1, 2), 749], [gd(2015, 1, 3), 634], [gd(2015, 1, 4), 1080], [gd(2015, 1, 5), 850], [gd(2015, 1, 6), 465], [gd(2015, 1, 7), 453], [gd(2015, 1, 8), 646], [gd(2015, 1, 9), 738], [gd(2015, 1, 10), 899], [gd(2015, 1, 11), 830], [gd(2015, 1, 12), 789]
                    ];

                    var data2 = [
                        [gd(2015, 1, 1), 342], [gd(2015, 1, 2), 721], [gd(2015, 1, 3), 493], [gd(2015, 1, 4), 403], [gd(2015, 1, 5), 657], [gd(2015, 1, 6), 782], [gd(2015, 1, 7), 609], [gd(2015, 1, 8), 543], [gd(2015, 1, 9), 599], [gd(2015, 1, 10), 359], [gd(2015, 1, 11), 783], [gd(2015, 1, 12), 680]
                    ];

                    var series = new Array();

                    series.push({
                        data: data1,
                        bars: {
                            show: true,
                            barWidth: 24 * 60 * 60 * 12000,
                            lineWidth: 1,
                            fill: 1,
                            align: 'center'
                        },
                        label: 'Revenues'
                    });
                    series.push({
                        data: data2,
                        color: '#e84e40',
                        lines: {
                            show: true,
                            lineWidth: 3,
                        },
                        points: {
                            fillColor: "#e84e40",
                            fillColor: '#ffffff',
                                    pointWidth: 1,
                            show: true
                        },
                        label: 'Orders'
                    });

                    $.plot("#graph-bar", series, {
                        colors: ['#03a9f4', '#f1c40f', '#2ecc71', '#3498db', '#9b59b6', '#95a5a6'],
                        grid: {
                            tickColor: "#f2f2f2",
                            borderWidth: 0,
                            hoverable: true,
                            clickable: true
                        },
                        legend: {
                            noColumns: 1,
                            labelBoxBorderColor: "#000000",
                            position: "ne"
                        },
                        shadowSize: 0,
                        xaxis: {
                            mode: "time",
                            tickSize: [1, "month"],
                            tickLength: 0,
                            // axisLabel: "Date",
                            axisLabelUseCanvas: true,
                            axisLabelFontSizePixels: 12,
                            axisLabelFontFamily: 'Open Sans, sans-serif',
                            axisLabelPadding: 10
                        }
                    });

                    var previousPoint = null;
                    $("#graph-bar").bind("plothover", function (event, pos, item) {
                        if (item) {
                            if (previousPoint != item.dataIndex) {

                                previousPoint = item.dataIndex;

                                $("#flot-tooltip").remove();
                                var x = item.datapoint[0],
                                        y = item.datapoint[1];

                                showTooltip(item.pageX, item.pageY, item.series.label, y);
                            }
                        }
                        else {
                            $("#flot-tooltip").remove();
                            previousPoint = [0, 0, 0];
                        }
                    });

                    function showTooltip(x, y, label, data) {
                        $('<div id="flot-tooltip">' + '<b>' + label + ': </b><i>' + data + '</i>' + '</div>').css({
                            top: y + 5,
                            left: x + 20
                        }).appendTo("body").fadeIn(200);
                    }
                }

                //WORLD MAP
                $('#world-map').vectorMap({
                    map: 'world_merc_en',
                    backgroundColor: '#ffffff',
                    zoomOnScroll: false,
                    regionStyle: {
                        initial: {
                            fill: '#e1e1e1',
                            stroke: 'none',
                            "stroke-width": 0,
                            "stroke-opacity": 1
                        },
                        hover: {
                            "fill-opacity": 0.8
                        },
                        selected: {
                            fill: '#8dc859'
                        },
                        selectedHover: {
                        }
                    },
                    markerStyle: {
                        initial: {
                            fill: '#e84e40',
                            stroke: '#e84e40'
                        }
                    },
                    markers: [
                        {latLng: [38.35, -121.92], name: 'Los Angeles - 23'},
                        {latLng: [39.36, -73.12], name: 'New York - 84'},
                        {latLng: [50.49, -0.23], name: 'London - 43'},
                        {latLng: [36.29, 138.54], name: 'Tokyo - 33'},
                        {latLng: [37.02, 114.13], name: 'Beijing - 91'},
                        {latLng: [-32.59, 150.21], name: 'Sydney - 22'},
                    ],
                    series: {
                        regions: [{
                                values: gdpData,
                                scale: ['#6fc4fe', '#2980b9'],
                                normalizeFunction: 'polynomial'
                            }]
                    },
                    onRegionLabelShow: function (e, el, code) {
                        el.html(el.html() + ' (' + gdpData[code] + ')');
                    }
                });

                /* SPARKLINE - graph in header */
                var orderValues = [10, 8, 5, 7, 4, 4, 3, 8, 0, 7, 10, 6, 5, 4, 3, 6, 8, 9];

                $('.spark-orders').sparkline(orderValues, {
                    type: 'bar',
                    barColor: '#ced9e2',
                    height: 25,
                    barWidth: 6
                });

                var revenuesValues = [8, 3, 2, 6, 4, 9, 1, 10, 8, 2, 5, 8, 6, 9, 3, 4, 2, 3, 7];

                $('.spark-revenues').sparkline(revenuesValues, {
                    type: 'bar',
                    barColor: '#ced9e2',
                    height: 25,
                    barWidth: 6
                });

                /* ANIMATED WEATHER */
                var skycons = new Skycons({"color": "#03a9f4"});
                // on Android, a nasty hack is needed: {"resizeClear": true}

                // you can add a canvas by it's ID...
                skycons.add("current-weather", Skycons.SNOW);

                // start animation!
                skycons.play();

            });
        </script>

    </body>
</html>