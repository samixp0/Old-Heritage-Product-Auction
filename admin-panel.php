
 <?php 
include ('server.php');

 if(empty($_SESSION['username'])){
     header('location: admin.php');
 }

?>
<!DOCTYPE HTML>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
            
        }

    </script>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />

    <!-- font-awesome icons CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons CSS-->

    <!-- side nav css file -->
    <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css' />
    <!-- //side nav css file -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- js-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/modernizr.custom.js"></script>

    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <!--//webfonts-->

    <!-- chart -->
    <script src="js/Chart.js"></script>
    <!-- //chart -->

    <!-- Metis Menu -->
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script>
    <link href="css/custom.css" rel="stylesheet">


    <!--//Metis Menu -->
    <style>
        #chartdiv {
            width: 100%;
            height: 280px;
        }

    </style>
</head>

<body class="cbp-spmenu-push">
    <div class="main-content">
        <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
            <!--left-fixed -navigation-->
            <aside class="sidebar-left">
                <nav class="navbar navbar-inverse">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1><a class="navbar-brand" href="index.html"><span class="fa fa-area-chart"></span> ADMIN<span class="dashboard_text"> &nbsp;Dashboard</span></a></h1>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="sidebar-menu">
                            
                            <li class="treeview">
                                <a href="admin-panel.php">
                                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-gavel"></i>
                                    <span>Auctions</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="auction-list.php"><i class="fa fa-angle-right"></i> Auction List</a></li>
                                    <li><a href="media.html"><i class="fa fa-angle-right"></i> Auction Section Title</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="charts.html">
                                    <i class="fa fa-money"></i>
                                    <span>Withdraws</span>
                                    
                                </a>
                            </li>
                            <li class="treeview">
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-laptop"></i>
                                    <span>Category</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="general.html"><i class="fa fa-angle-right"></i> General</a></li>
                                    <li><a href="icons.html"><i class="fa fa-angle-right"></i> Icons</a></li>
                                    <li><a href="buttons.html"><i class="fa fa-angle-right"></i> Buttons</a></li>
                                    <li><a href="typography.html"><i class="fa fa-angle-right"></i> Typography</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="manage-users.php">
                                    <i class="fa fa-user"></i> <span>Manage Users</span>
                                   
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="staff.php">
                                    <i class="fa fa-user-md"></i> <span>Staffs</span>
                                  
                                </a>
                               
                            </li>
                            
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-envelope"></i> <span>Mailbox </span>
                                    <i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="inbox.html"><i class="fa fa-angle-right"></i> Mail Inbox </a></li>
                                    <li><a href="compose.html"><i class="fa fa-angle-right"></i> Compose Mail </a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-language"></i> <span>Language settings</span>
                                </a>
                               
                            </li>
                           
                            <li><a href="#"><i class="fa fa-angle-right text-red"></i> <span>Important</span></a></li>
                            <li><a href="#"><i class="fa fa-angle-right text-yellow"></i> <span>Warning</span></a></li>
                            <li><a href="#"><i class="fa fa-angle-right text-aqua"></i> <span>Information</span></a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </aside>
        </div>
        <!--left-fixed -navigation-->

        <!-- header-starts -->
        <div class="sticky-header header-section ">
            <div class="header-left">
                <!--toggle button start-->
                <button id="showLeftPush"><i class="fa fa-bars"></i></button>
                <!--toggle button end-->
                <div class="profile_details_left">
                    <!--notifications of menu start -->
                    <ul class="nofitications-dropdown">
                        
                       
                    </ul>
                    <div class="clearfix"> </div>
                </div>
                <!--notification menu end -->
                <div class="clearfix"> </div>
            </div>
            <div class="header-right">

                <!--search-box-->
                <div class="search-box">
                    <form class="input">
                        <input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
                        <label class="input__label" for="input-31">
                            <svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                <path d="m0,0l404,0l0,77l-404,0l0,-77z" />
                            </svg>
                        </label>
                    </form>
                </div>
                <!--//end-search-box-->

                <div class="profile_details">
                    <ul>
                        <li class="dropdown profile_details_drop">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <div class="profile_img">
                                    <span class="prfil-img"><img src="img/avatar1.jpg" alt=""> </span>
                                    <div class="user-name">
                                        <p>NAEEM ISLAM</p>
                                        <span>Administrator</span>
                                    </div>
                                    <i class="fa fa-angle-down lnr"></i>
                                    <i class="fa fa-angle-up lnr"></i>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <ul class="dropdown-menu drp-mnu">
                                <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                                <li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li>
                                <li> <a href="#"><i class="fa fa-suitcase"></i> Profile</a> </li>
                                <li> <a href="admin.php?logout='1'"><i class="fa fa-sign-out"></i> Logout</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- //header-ends -->
        <!-- main content start-->
        
        
        <div id="page-wrapper">
            <div class="main-page">
                <div class="col_3">
                    <div class="col-md-3 widget widget1">
                        <div class="r3_counter_box">
                           
                            <i class="pull-left fa fa-gavel icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>0</strong></h5>
                                <span>Total Auctions</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 widget widget1"> 
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-forward user1 icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>0</strong></h5>
                                <span>Auction Running</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 widget widget1">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-dollar user2 icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>0</strong></h5>
                                <span>Pending </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 widget widget1">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-users dollar1 icon-rounded"></i>
                            <div class="stats">
                                <?php
                         if(isset($username))
                              {
                            $result= mysqli_query($db, "SELECT firstname, lastname, username, email, mobile FROM user");
                            $row = mysqli_num_rows($result);                       
                            echo "<h5><strong>$row</strong></h5>";
                              }
                           ?> 
                                <span>Total Users</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 widget">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-list-alt dollar2 icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>0</strong></h5>
                                <span>Blocklist</span>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
        
                    <div class="clearfix"> </div>
                </div>
 <br>
               
             
                <div class="charts">
                    <div class="col-md-4 charts-grids widget">
                        <div class="card-header">
                            <h3>Bar Chart</h3>
                        </div>

                        <div id="container" style="width: 100%; height:280px;">
                            <canvas id="canvas"></canvas>
                        </div>
                       

                    </div>

                    <div class="col-md-4 charts-grids widget states-mdl">
                        <div class="card-header">
                            <h3>Column & Line Graph</h3>
                        </div>
                        <div id="chartdiv"></div>
                    </div>

                    <div class="clearfix"> </div>
                </div>


                <!-- for amcharts js -->
                <script src="js/amcharts.js"></script>
                <script src="js/serial.js"></script>
                <script src="js/export.min.js"></script>
                <link rel="stylesheet" href="css/export.css" type="text/css" media="all" />
                <script src="js/light.js"></script>
                <!-- for amcharts js -->

                <script src="js/index1.js"></script>

            </div>
        </div>
        <!--footer-->
        <center>
        <div class="footer-last">
            <p>&copy; 2019 Copyright by <a href="#">NAEEM ISLAM</a>. All Rights Reserved </p>
        </div>
       </center>      
         <!--//footer-->
    </div>

    <!-- new added graphs chart js-->

    <script src="js/Chart.bundle.js"></script>
    <script src="js/utils.js"></script>

    <script>
        var platform = ["Windows 10", "Windows 8.1", "Windows 7", "Windows xp", "Unknown platform", "Mac OS"];
        var color = Chart.helpers.color;
        var barChartData = {
            labels: ["Windows 10", "Windows 8.1", "Windows 7", "Windows xp", "Unknown platform", "Mac OS"],
            datasets: [{
                label: 'Dataset 1',
                backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    
                ]
            }, {
                label: 'Dataset 2',
                backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    
                ]
            }]

        };
        window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Desktop Search Engine Market Share - 2016"
	},
	data: [{
		type: "bar",
		startAngle: 240,
		yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
	
	}]
});
chart.render();

}

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                       
                    }
                }
            });

        };

        document.getElementById('randomizeData').addEventListener('click', function() {
            var zero = Math.random() < 0.2 ? true : false;
            barChartData.datasets.forEach(function(dataset) {
                dataset.data = dataset.data.map(function() {
                    return zero ? 0.0 : randomScalingFactor();
                });

            });
            window.myBar.update();
        });

        var colorNames = Object.keys(window.chartColors);
        document.getElementById('addDataset').addEventListener('click', function() {
            var colorName = colorNames[barChartData.datasets.length % colorNames.length];;
            var dsColor = window.chartColors[colorName];
            var newDataset = {
                label: 'Dataset ' + barChartData.datasets.length,
                backgroundColor: color(dsColor).alpha(0.5).rgbString(),
                borderColor: dsColor,
                borderWidth: 1,
                data: []
            };

            for (var index = 0; index < barChartData.labels.length; ++index) {
                newDataset.data.push(randomScalingFactor());
            }

            barChartData.datasets.push(newDataset);
            window.myBar.update();
        });

        document.getElementById('addData').addEventListener('click', function() {
            if (barChartData.datasets.length > 0) {
                var month = MONTHS[barChartData.labels.length % MONTHS.length];
                barChartData.labels.push(month);

                for (var index = 0; index < barChartData.datasets.length; ++index) {
                    //window.myBar.addData(randomScalingFactor(), index);
                    barChartData.datasets[index].data.push(randomScalingFactor());
                }

                window.myBar.update();
            }
        });

        document.getElementById('removeDataset').addEventListener('click', function() {
            barChartData.datasets.splice(0, 1);
            window.myBar.update();
        });

        document.getElementById('removeData').addEventListener('click', function() {
            barChartData.labels.splice(-1, 1); // remove the label first

            barChartData.datasets.forEach(function(dataset, datasetIndex) {
                dataset.data.pop();
            });

            window.myBar.update();
        });

    </script>
    <!-- new added graphs chart js-->

    <!-- Classie -->
    <!-- for toggle left push menu script -->
    <script src="js/classie.js"></script>
    <script>
        var menuLeft = document.getElementById('cbp-spmenu-s1'),
            showLeftPush = document.getElementById('showLeftPush'),
            body = document.body;

        showLeftPush.onclick = function() {
            classie.toggle(this, 'active');
            classie.toggle(body, 'cbp-spmenu-push-toright');
            classie.toggle(menuLeft, 'cbp-spmenu-open');
            disableOther('showLeftPush');
        };


        function disableOther(button) {
            if (button !== 'showLeftPush') {
                classie.toggle(showLeftPush, 'disabled');
            }
        }

    </script>
    <!-- //Classie -->
    <!-- //for toggle left push menu script -->

    <!--scrolling js-->
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!--//scrolling js-->

    <!-- side nav js -->
    <script src='js/SidebarNav.min.js' type='text/javascript'></script>
    <script>
        $('.sidebar-menu').SidebarNav()

    </script>
    <!-- //side nav js -->

    <!-- for index page weekly sales java script -->
    <script src="js/SimpleChart.js"></script>
    
       

    </script>
    <!-- //for index page weekly sales java script -->


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"> </script>
    <!-- //Bootstrap Core JavaScript -->

</body>

</html>
