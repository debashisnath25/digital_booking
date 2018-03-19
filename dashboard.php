
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">
	<title>Dashboard | Digital Booking and Management</title>
    <?php include("metalinks.php");?>
</head>
<body class="app header-fixed left-sidebar-fixed right-sidebar-fixed right-sidebar-overlay right-sidebar-hidden">

    <!--===========header start===========-->
    <?php include("header.php");?>
    <!--===========header end===========-->

    <!--===========app body start===========-->
    <div class="app-body">
        <!--left sidebar start-->
        <?php include("sidebar.php");?>
        <!--left sidebar end-->

        <!--main contents start-->
        <main class="main-content">
            <div class="container">
                <!--page title start-->
                <div class="page-title pl-0">
                    <h4 class="mb-0"> Dashboard 4
                        <small>start your new page</small>
                    </h4>
                    <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                        <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                        <li class="breadcrumb-item active">Layout Box Container</li>
                    </ol>
                </div>
                <!--page title end-->

                <!--state widget start-->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <span class="bg-primary rounded-circle text-center wb-icon-box">
                                            <i class="icon-people text-light f24"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="mt-1 mb-0">New Users</h6>
                                        <p class="f12 mb-0">32 New Users</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-3">
                                        <span class="bg-warning rounded-circle text-center wb-icon-box">
                                            <i class="icon-basket-loaded text-light f24"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="mt-1 mb-0">Order Placed</h6>
                                        <p class="f12 mb-0">123 New Order Placed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-3">
                                        <span class="bg-danger rounded-circle text-center wb-icon-box">
                                            <i class="icon-badge text-light f24"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="mt-1 mb-0">Monthly Profits</h6>
                                        <p class="f12 mb-0">$9887 This Month Profit
                                            <span class="float-right text-success"> </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--state widget end-->

                <!-- state start-->
                <div class="row">
                    <div class=" col-md-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                    Rainfall and Evaporation
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="rainfall" style="height: 350px"></div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                    Doughnut Pie Chart
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="doughnut" style="height: 350px"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- state end-->

                <div class="row">
                    <!--Report widget start-->
                    <div class="col-xl-7">
                        <div class="card mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                    Page Visit
                                    <div class="btn-group float-right task-list-action">
                                        <div class="dropdown ">
                                            <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class=" icon-options"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right ">
                                                <a class="dropdown-item" href="#"> <i class="fa fa-calendar-o text-info pr-2"></i> Daily</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-calendar-check-o text-danger pr-2"></i> Weekly</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-calculator text-warning pr-2"></i> Monthly</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-vertical-middle">
                                    <thead>
                                    <tr>
                                        <th class="border-0">Page</th>
                                        <th class="border-0 text-right">Pageviews</th>
                                        <th class="border-0 text-right">Page Value </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            /dashboard/home/
                                        </td>
                                        <td class="text-right">
                                            2345
                                        </td>
                                        <td class="text-right">
                                            $ 0.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            /dashboard/charts/nice_charts
                                        </td>
                                        <td class="text-right">
                                            2345
                                        </td>
                                        <td class="text-right">
                                            $ 0.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            /profile/edit/
                                        </td>
                                        <td class="text-right">
                                            2345
                                        </td>
                                        <td class="text-right">
                                            $ 0.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            /dashboard/datatables/responsive
                                        </td>
                                        <td class="text-right">
                                            2345
                                        </td>
                                        <td class="text-right">
                                            $ 0.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            /dashboard/charts/nice_charts
                                        </td>
                                        <td class="text-right">
                                            2345
                                        </td>
                                        <td class="text-right">
                                            $ 0.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            /profile/edit/
                                        </td>
                                        <td class="text-right">
                                            2345
                                        </td>
                                        <td class="text-right">
                                            $ 0.00
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--Report widget end-->

                    <!--weather widget start-->
                    <div class="col-xl-5">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5 d-flex justify-content-center">
                                        <div class="align-self-center ">
                                            <i class="wi wi-day-sleet f60 text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col p-3">
                                        <small>SUN, Jan 2018 10:21  </small>
                                        <h6>Most Cloudy</h6>
                                        <h1 class="mt-3 mb-3 p-2 border border-right-0 border-left-0 text-primary"> 34<sup>o c</sup></h1>
                                        <span>Wind: SE 15 KM/H</span>
                                        <p>Huminity: 54%</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white text-center p-4">
                                <div class="row">
                                    <div class="col">
                                        <p class="f12">MON</p>
                                        <i class="wi wi-day-cloudy f30"></i>
                                        <p class="mb-0 mt-2">18<sup>o c</sup></p>
                                    </div>
                                    <div class="col">
                                        <p class="f12">TUE</p>
                                        <i class="wi  wi wi-day-rain-mix f30"></i>
                                        <p class="mb-0 mt-2">13<sup>o c</sup></p>
                                    </div>
                                    <div class="col">
                                        <p class="f12">WED</p>
                                        <i class="wi  wi wi-day-cloudy-windy f30"></i>
                                        <p class="mb-0 mt-2">29<sup>o c</sup></p>
                                    </div>
                                    <div class="col">
                                        <p class="f12">THU</p>
                                        <i class="wi  wi wi-day-sprinkle f30"></i>
                                        <p class="mb-0 mt-2">32<sup>o c</sup></p>
                                    </div>
                                    <div class="col">
                                        <p class="f12">FRI</p>
                                        <i class="wi  wi wi-day-thunderstorm f30"></i>
                                        <p class="mb-0 mt-2">09<sup>o c</sup></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--weather widget end-->
                </div>

            </div>
        </main>
        <!--main contents end-->

        <!--right sidebar start-->
        <aside class="right-sidebar">

            <!--notification widget start-->
            <div class="widget">
                <h3 class="mb-4 widget-title">Notification</h3>

                <div class="notification-list">
                    <ul class="list-unstyled">
                        <li>
                            <div class="nt-thumb mr-3">
                                <img src="images/n1.png" alt=""/>
                            </div>
                            <div class="nt-info">
                                <a href="#"  class="nt-title">Diverse Ltd.</a>
                                <small class="text-muted">2 days ago</small>
                                <p><a href="#">www.diverse-test.com</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="nt-thumb mr-3">
                                <img src="images/n3.png" alt=""/>
                            </div>
                            <div class="nt-info">
                                <a href="#"  class="nt-title">Black Friday Discount Offer</a>
                                <small class="text-muted">2 days ago</small>
                                <p>Nam libero tempore cum soluta nobis est eligendi.</p>
                            </div>
                        </li>

                        <li>
                            <div class="nt-thumb mr-3">
                                <img src="images/n2.png" alt=""/>
                            </div>
                            <div class="nt-info">
                                <a href="#"  class="nt-title">Task Failed</a>
                                <small class="text-muted">2 days ago</small>
                                <p>Error: Invalid command found ... after [this class]</p>
                            </div>
                        </li>

                        <li>
                            <div class="nt-thumb mr-3">
                                <img src="images/n4.png" alt=""/>
                            </div>
                            <div class="nt-info">
                                <a href="#"  class="nt-title">John Doe</a>
                                <small class="text-muted">3 days ago</small>
                                <p>Send you a contact request.</p>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <!--notification widget end-->

            <!--Active log widget start-->
            <div class="widget">
                <h3 class="mb-4 widget-title">Activity Log</h3>
                <div class="baseline baseline-border">
                    <div class="baseline-list">
                        <div class="baseline-info">
                            <div><a href="#" class="default-color"><strong>John Tasi</strong></a> Prepare for the Meeting <span class="badge badge-pill badge-success">status</span></div>
                            <span class="text-muted">10:00 PM Sat, 10 Jan 2018</span>
                        </div>
                    </div>
                    <div class="baseline-list baseline-border baseline-primary">
                        <div class="baseline-info">
                            <div>Video conference to client</div>
                            <span class="text-muted">05:00 PM Sun, 02 Feb 2018</span>
                        </div>
                    </div>
                    <div class="baseline-list  baseline-border baseline-success">
                        <div class="baseline-info">
                            <div><a href="#" class="default-color"><strong>Tnisha</strong></a> Submit a blog post <a href="#" class="">best admin template in 2018.</a></div>
                            <span class="text-muted">10:00 PM Sat, 10 Jan 2018</span>
                        </div>
                    </div>
                    <div class="baseline-list  baseline-border baseline-warning">
                        <div class="baseline-info">
                            <div><a href="#" class="default-color"><strong>New Request</strong></a> 10 user request to approve or remove</div>
                            <span class="text-muted">10:00 PM Sat, 10 Jan 2018</span>
                        </div>
                    </div>
                    <div class="baseline-list  baseline-border baseline-info">
                        <div class="baseline-info">
                            <div><a href="#" class="default-color"><strong>Mark Henry</strong></a> added your friend list now</div>
                            <span class="text-muted">10:00 PM Sat, 10 Jan 2018</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--Active log widget end-->

            <!--stock widget start-->
            <div class="widget">
                <h3 class="mb-4 widget-title">Stocks</h3>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>DOW</td>
                            <td>1999</td>
                            <td>
                                <span class="badge badge-pill badge-primary">+ 0.10%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>AAPL</td>
                            <td>1299</td>
                            <td>
                                <span class="badge badge-pill badge-success">- 0.50%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>SBUX</td>
                            <td>1099</td>
                            <td>
                                <span class="badge badge-pill badge-danger">+ 0.20%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>NKE</td>
                            <td>2199</td>
                            <td>
                                <span class="badge badge-pill badge-warning">+ 1.25%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>YOO</td>
                            <td>999</td>
                            <td>
                                <span class="badge badge-pill badge-info">+ 3.00%</span>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <!--stock widget end-->

        </aside>
        <!--right sidebar end-->

    </div>
    <!--===========app body end===========-->

    <!--===========footer start===========-->
    <footer class="app-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">
                    2018 © Diverse Admin by MHS
                </div>
                <div class="col-4">
                    <a href="#" class="float-right back-top">
                        <i class=" ti-arrow-circle-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!--===========footer end===========-->


    <!-- Placed js at the end of the page so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.ui.touch-punch-improved.js"></script>
    <script src="js/lobicard.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>

    <!--echarts-->
    <script type="text/javascript" src="js/echarts-all-3.js"></script>
    <!--init echarts-->
    <script>
        $(document).ready(function() {

            <!--Rainfall and Evaporation echarts init-->

            var dom = document.getElementById("rainfall");
            var rainChart = echarts.init(dom);

            var app = {};
            option = null;
            option = {
                color: ['#A768F3','#36a2f5'],
                tooltip : {
                    trigger: 'axis'
                },
                legend: {
                    data:['Sale','Market']
                },
                calculable : true,
                xAxis : [
                    {
                        type : 'category',
                        data : ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec']
                    }
                ],
                yAxis : [
                    {
                        type : 'value'
                    }
                ],
                series : [
                    {
                        name:'Sale',
                        type:'bar',
                        data:[2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3],
                        markPoint : {
                            data : [
                                {type : 'max', name: 'Max'},
                                {type : 'min', name: 'Min'}
                            ]
                        },
                        markLine : {
                            data : [
                                {type : 'average', name: 'Average'}
                            ]
                        }
                    },
                    {
                        name:'Market',
                        type:'bar',
                        data:[2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3],
                        markPoint : {
                            data : [
                                {name : 'Max', value : 182.2, xAxis: 7, yAxis: 183, symbolSize:18},
                                {name : 'Min', value : 2.3, xAxis: 11, yAxis: 3}
                            ]
                        },
                        markLine : {
                            data : [
                                {type : 'average', name : 'Average'}
                            ]
                        }
                    }
                ]
            };

            if (option && typeof option === "object") {
                rainChart.setOption(option, false);
            }


            <!--Doughnut echarts init-->

            var dom = document.getElementById("doughnut");
            var dnutChart = echarts.init(dom);

            var app = {};
            option = null;
            option = {
                color: ['#FF518A','#eac459', '#36a2f5','#34bfa3', '#A768F3'],
                tooltip : {
                    trigger: 'item',
                    formatter: '{a} <br/>{b} : {c} ({d}%)'
                },
                legend: {
                    orient : 'vertical',
                    x : 'left',
                    data:['Direct','Mail','Affiliate','AD','Search']
                },
                calculable : true,
                series : [
                    {
                        name:'Source',
                        type:'pie',
                        radius : ['50%', '70%'],
                        data:[
                            {value:335, name:'Direct'},
                            {value:310, name:'Mail'},
                            {value:234, name:'Affiliate'},
                            {value:135, name:'AD'},
                            {value:1548, name:'Search'}
                        ]
                    }
                ]
            };

            if (option && typeof option === "object") {
                dnutChart.setOption(option, false);
            }



        });
    </script>


    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

    <!--init scripts-->
    <script src="js/scripts.min.js"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112914598-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-112914598-1');
    </script>
</body>
</html>
