<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/bewelllogo.ico">
    <title>Bewell</title>
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <link href="plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/colors/gray.css" id="theme" rel="stylesheet">
</head>

<body class="fix-sidebar">
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header" style="background:#64B5F6;  border-radius: 2px; position:relative;"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part" style="background-color:#BBDEFB; opacity:1;"><a class="logo" href="index.html"><b><img src="plugins/images/bewelllogos.png"  width="35px" alt="home" /></b><span class="hidden-xs"><img src="plugins/images/bewelllogol.png" width="110px" alt="home" /></span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" style="min-width:300px; background-color:#F5F5F5;" placeholder="Search System" class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                        </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-bell"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
                        <ul class="dropdown-menu dropdown-tasks animated flipInX feeds">
                            <li>
                                    <strong>Notifications</strong> 
                            </li>
                            <li>
                                <div class="bg-info"><i class="fa fa-bell-o text-white"></i></div> Added 5 New Client Orders. <span class="text-muted">Just Now</span>
                      
                            </li>
                            <li>
                                <div class="bg-danger"><i class="ti-user text-white"></i></div> New user registered.<span class="text-muted">16 July</span>
                            </li>
                            <li>
                                <a class="text-center" href={{route('notifications.index')}}> <strong>See All Notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="dropdown"> 
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"><img src="plugins/images/jet.jpg" alt="user-img" width="36" class="img-circle"><b style="color:white; font-family:Helvetica,Arial,sans-serif;" class="hidden-xs">
                            
                            @if(Auth::user()->access==1)
                               Logistics Head
                            @endif
    
                        </b> </a>

                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li><a href="#"><i class="ti-user"></i> Manage Account</a></li>
                            <li role="separator" class="divider"></li>
                        <li><a href={{route('logout.index')}}><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                    </li>
                    <span style=" position:absolute; bottom: 50px; width:100%; text-align: center; font-size:14px;">Powered by</span>
                    <span style=" position:absolute; bottom: 30px; width:100%; text-align: center; font-size:12px;"><strong>AIMinds</strong></span>
                    <span style=" position:absolute; bottom: 10px; width:100%; text-align: center; font-size:10px;">BCOFSYS - Version 1.0.1</span>
                    <li style="background-color: #E9F0FD;"><a href={{route('dashboard.index')}} class="waves-effect"><i style="color:#4c87ed;" class="linea-icon linea-aerrow fa-fw" data-icon="&#xe078;"></i> <span class="hide-menu" style="color:#4c87ed;">Dashboard</span></a></li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="x" class="linea-icon linea-ecommerce fa-fw"></i> <span class="hide-menu">Order<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href={{route('clientorder.index')}}>Client</a> </li>
                            <li> <a href={{route('manufacturerorder.index')}}>Manufacturer</a> </li>
                            <li> <a href={{route('supplierorder.index')}}>Supplier</a> </li>
                        </ul>
                    </li>
                    <li> <a href={{route('schedule.index')}} class="waves-effect"><i style="color:#5F6367;" data-icon="r" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Schedule</span></a>
                    </li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i style="color:#5F6367;" data-icon="f" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Inventory<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href={{route('product.index')}}>Product</a> </li>
                        <li> <a href={{route('supply.index')}}>Raw Material</a> </li>
                        </ul>
                    </li>
                    @if(Auth::user()->user_id==1)
                    <li> <a href="javascript:void(0)" class="waves-effect"><i style="color:#5F6367;" data-icon="R" class="linea-icon linea-ecommerce fa-fw"></i> <span class="hide-menu">Report<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href={{route('salesreport.index')}}>Sales</a> </li>
                            <li> <a href={{route('deliveryreport.index')}}>Delivery</a> </li>
                            <li> <a href={{route('manufacturerreport.index')}}>Manufacturer</a> </li>
                            <li> <a href={{route('supplierreport.index')}}>Supplier</a> </li>
                        </ul>
                    </li>

                    <li style="border-bottom:1px solid #E8EAED;"> <a href="javascript:void(0)" class="waves-effect"><i style="color:#5F6367;" data-icon="V" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Account<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href={{route('useraccount.index')}}>User</a> </li>
                            <li> <a href={{route('clientaccount.index')}}>Client</a> </li>
                            <li> <a href={{route('manufactureraccount.index')}}>Manufacturer</a> </li>
                            <li> <a href={{route('supplieraccount.index')}}>Supplier</a> </li>
                        </ul>
                    </li>
                    @endif
                    <li><a href="faq.html" class="waves-effect"><i class="fa fa-circle-o text-success"></i> <span class="hide-menu">FAQs</span></a></li>
                    <li><a href="faq.html" class="waves-effect"><i class="fa fa-circle-o text-info"></i> <span class="hide-menu">Documentation</span></a></li>
                </ul>
            </div>
        </div>
        <div id="page-wrapper">
            <div class="container-fluid" style="background-color:#F5F5F5;">
                <div class="row bg-title" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title" style="color:black;">Dashboard</h4> </div>
                </div>
                <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="white-box" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                <h3 class="box-title">Weekly Sales</h3>
                                <div class="text-right"> <span class="text-muted" style="color:black;">Total Sales</span>
                                    <h1><sup><i class="ti-arrow-up text-success"></i></sup> ₱12,000</h1> 
                                </div> 
                                <span><small class="m-t-10 text-success" style="text-transform:uppercase;"><i class="fa fa-sort-asc"></i> 20% higher than last week</small></span>
                                    
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span class="sr-only">20% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="white-box" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                <h3 class="box-title">Weekly Cost</h3>
                                <div class="text-right"> <span class="text-muted" style="color:black;">Total Costs</span>
                                    <h1><sup><i class="ti-arrow-down text-danger"></i></sup> ₱5,000</h1> 
                                </div> 
                                    <span><small class="m-t-10 text-danger" style="text-transform:uppercase;"><i class="fa fa-sort-desc"></i> 30% higher than last week</small></span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:30%;"> <span class="sr-only">230% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <h4 style="color:black; margin-bottom:7px;">Previous Month Comparison</h4>
                                <div class="white-box" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                    <h3 class="box-title"><small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i> 18% Higher than last month</small>Sales to Cost Ratio</h3>
                                    <div class="stats-row">
                                        <div class="stat-item">
                                            <h6><span><i style="color:#1565C0;" data-icon="S" class="linea-icon linea-ecommerce"></i></span> Overall Ratio</h6> <b>80.40%</b></div>
                                        <div class="stat-item">
                                            <h6><span><i style="color:#1565C0;" data-icon="&#xe044;" class="linea-icon linea-weather"></i></span> Day</h6> <b>15.40%</b></div>
                                        <div class="stat-item">
                                            <h6><span><i style="color:#1565C0;" data-icon="&#xe045;" class="linea-icon linea-weather"></i></span> Week</h6> <b>5.50%</b></div>
                                        <div class="stat-item">
                                            <h6><span><i style="color:#1565C0;" data-icon="&#xe011;" class="linea-icon linea-weather"></i></span> Month</h6> <b>2.23%</b></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2 col-sm-12 col-xs-12">
                                <h4 style="color:black; margin-bottom:7px;">Generate Report</h4>
                                <div class="list-group" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                    <button type="button" class="list-group-item"><span><i style="color:#1565C0;" data-icon="U" class="linea-icon linea-ecommerce"></i></span> Sales Report</button>
                                    <button type="button" class="list-group-item"><span><i style="color:#1565C0;" data-icon="Z" class="linea-icon linea-ecommerce"></i></span> Delivery Report</button>
                                    <button type="button" class="list-group-item"><span><i style="color:#1565C0;" data-icon="3" class="linea-icon linea-ecommerce"></i></span> Manufacturer Report</button>
                                    <button type="button" class="list-group-item"><span><i style="color:#1565C0;" data-icon="x" class="linea-icon linea-ecommerce"></i></span> Supplier Report</button>
                                </div>
                            </div>
                                
                    </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="row row-in">
                            <h4 style="color:black; margin-left:7px; margin-bottom:7px;">Daily Notification Feedback</h4>
                            <div class="col-lg-3 col-sm-12">
                                <div class="white-box" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                    <div class="col-in row">
                                        <div class="col-md-6 col-sm-6 col-xs-6"> <i style="color:#1565C0;" data-icon="&#xe019;" class="linea-icon linea-basic"></i>
                                            <h5 class="text-muted vb" style="color:black;">ORDER DELIVERIES</h5> </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <h3 class="counter text-right m-t-15" style="color:black;">23</h3> 
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <span><small class="m-t-10 text-success" style="text-transform:uppercase;"><i style="font-size:12px;" class="fa fa-sort-asc"></i> 40% higher than yesterday</small></span>
                                            <div class="progress m-b-0">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:40%;"> <span class="sr-only">40% Complete</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                <div class="white-box" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                    <div class="col-in row">
                                        <div class="col-md-6 col-sm-6 col-xs-6"> <i style="color:#1565C0;" class="linea-icon linea-basic" data-icon="f"></i>
                                            <h5 style="color:black;"class="text-muted vb">NEEDED RESTOCKS</h5> </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <h3 class="counter text-right m-t-15" style="color:black;"> 3</h3> </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <span><small class="m-t-10 text-danger" style="text-transform:uppercase;"><i style="font-size:12px;" class="fa fa-sort-desc"></i> 18% lower than yesterday</small></span>
                                            <div class="progress m-b-0">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:40%;"> <span class="sr-only">18% Complete</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                <div class="white-box" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                    <div class="col-in row">
                                        <div class="col-md-6 col-sm-6 col-xs-6"> <i style="color:#1565C0;"class="linea-icon linea-basic" data-icon="r"></i>
                                            <h5 style="color:black;"class="text-muted vb">ORDER DEADLINES</h5> </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <h3 class="counter text-right m-t-15" style="color:black;">15</h3> </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <span><small class="m-t-10 text-success" style="text-transform:uppercase;"><i style="font-size:12px;" class="fa fa-sort-asc"></i> 21% higher than yesterday</small></span>
                                            <div class="progress m-b-0">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:21%;"> <span class="sr-only">21% Complete</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                <div class="white-box" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                    <div class="col-in row">
                                        <div class="col-md-6 col-sm-6 col-xs-6"> <i style="color:#1565C0;" class="linea-icon linea-basic" data-icon="O"></i>
                                            <h5 style="color:black;"class="text-muted vb">COMPANY ORDERS</h5> </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <h3 class="counter text-right m-t-15" style="color:black;">8</h3> </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <span><small class="m-t-10 text-success" style="text-transform:uppercase;"><i style="font-size:12px;" class="fa fa-sort-asc"></i> 37% higher than yesterday</small></span>
                                            <div class="progress m-b-0">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:37%;"> <span class="sr-only">37% Complete</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                                <h4 style="color:black;margin-bottom:7px;">Client Delivery Order Feedback</h4>
                                <div class="white-box" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                    <div class="table-responsive" style="margin-bottom:14px;">
                                        <table class="table color-table info-table color-bordered-table info-bordered-table">
                                            <thead>
                                                <tr>
                                                    <th>Order #</th>
                                                    <th>Customer</th>
                                                    <th>Delivery Date</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(isset($deliveries))
                                                    @foreach($deliveries as $info)
                                                        <tr>
                                                            <td><a href="">CLOD-{{$info->id}}</a></td>
                                                            <td>{{$info->fromClient->cl_name}}</td>
                                                            <td><span class="label label-rouded label-info">{{$info->scd_date}}</span></td>
                                                            <td><span class="label label-info"></span>{{$info->scd_status}}</td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <a href={{route('appdev.schedule')}}>View Client Deliveries</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                    <h4 style="color:black;margin-bottom:7px;">Inventory Product Feedback</h4>
                                    <div class="white-box" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                        <div class="table-responsive" style="margin-bottom:14px;">
                                            <table class="table full-color-table full-info-table hover-table">
                                                <thead>
                                                    <tr>
                                                        <th>Supply</th>
                                                        <th>SKU</th>
                                                        <th>Re-Order</th>
                                                        <th>Total (Boxes)</th>
                                                        <th>Status</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Bewell-C</td>
                                                        <td>500 grams</td>
                                                        <td>40</td>
                                                        <td><span class="label label-rouded label-success">72</span></td>
                                                        <td><span class="label label-success">On-Stock</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bewell-C Calcium</td>
                                                        <td>500 grams</td>
                                                        <td>50</td>
                                                        <td><span class="label label-rouded label-warning">37</span></td>
                                                        <td><span class="label label-warning">Re-Stock</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>BeNerv-B</td>
                                                        <td>500 grams</td>
                                                        <td>60</td>
                                                        <td><span class="label label-rouded label-danger">0</span></td>
                                                        <td><span class="label label-danger">No Stock</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Liverguard</td>
                                                        <td>500 grams</td>
                                                        <td>70</td>
                                                        <td><span class="label label-rouded label-success">91</span></td>
                                                        <td><span class="label label-success">On-Stock</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bewell-C</td>
                                                        <td>250 grams</td>
                                                        <td>40</td>
                                                        <td><span class="label label-rouded label-success">47</span></td>
                                                        <td><span class="label label-success">On-Stock </span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <a href="#">View Product Inventory</a>
                                    </div>
                                </div>

                            {{-- <div class="col-lg-6 col-md-6 col-sm-12"> --}}
                                {{-- <div class="col-md-6 col-xs-12 col-sm-6">
                                    <button class="btn btn-block btn-success" style="height:75px;')">
                                            <h3 style="font-family:Helvetica,Arial,sans-serif; color:white;">View Schedule</h3>
                                    </button>
                                </div>
                                <div class="col-md-6 col-xs-12 col-sm-6">
                                    <button class="btn btn-block btn-success" style="height:150px; background-color:blue;">
                                            <h3 style="font-family:Helvetica,Arial,sans-serif; color:white;">View Report</h3>
                                    </button>
                                </div>
                                <div class="col-md-6 col-xs-12 col-sm-6">
                                    <button class="btn btn-block btn-success" style="height:150px; background-color:blue;">
                                            <h3 style="font-family:Helvetica,Arial,sans-serif; color:white;">Manage Account</h3>
                                    </button>
                                </div>
                                <div class="col-md-6 col-xs-12 col-sm-6">
                                    <button class="btn btn-block btn-success" style="height:150px; background-color:yellow;">
                                            <h3 style="font-family:Helvetica,Arial,sans-serif; color:white;">Manage Inventory</h3>
                                    </button>
                                </div> --}}
                            {{-- </div> --}}
                    {{-- <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <h4>Latest Feedbacks</h4>
                        <div class="white-box">
                            <h3 class="box-title">Product Sales</h3>
                            <ul class="list-inline text-right">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #aec9cb;"></i>iPhone</h5> </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #cbb2ae;"></i>iPad</h5> </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #85b4d0;"></i>iPod</h5> </li>
                            </ul>
                            <div id="morris-area-chart" style="height: 240px;"></div>
                        </div>
                    </div>
                     --}}

                        
                </div>

             

                
                <!--row -->
                <!-- /.row -->
                {{-- <div class="row">
                    <div class="col-md-5 col-lg-3 col-sm-6 col-xs-12">
                        <div class="bg-theme-dark m-b-15">
                            <div class="row weather p-20">
                                <div class="col-md-6 col-xs-6 col-lg-6 col-sm-6 m-t-40 p-t-20">
                                    <h3>&nbsp;</h3>
                                    <h1>73<sup>°F</sup></h1>
                                    <p class="text-white">AHMEDABAD, INDIA</p>
                                </div>
                                <div class="col-md-6 col-xs-6 col-lg-6 col-sm-6 text-right"> <i class="wi wi-day-cloudy-high"></i>
                                    <br/>
                                    <br/> <b class="text-white">SUNNEY DAY</b>
                                    <p class="w-title-sub">April 14</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-3 col-sm-6 col-xs-12">
                        <div class="bg-theme m-b-15">
                            <div id="myCarouse2" class="carousel vcarousel slide p-20">
                                <!-- Carousel items -->
                                <div class="carousel-inner ">
                                    <div class="active item">
                                        <h3 class="text-white">My Acting blown <span class="font-bold">Your Mind</span> and you also laugh at the moment</h3>
                                        <div class="twi-user"><img src="../plugins/images/users/hritik.jpg" alt="user" class="img-circle img-responsive pull-left">
                                            <h4 class="text-white m-b-0">Govinda</h4>
                                            <p class="text-white">Actor</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h3 class="text-white">My Acting blown <span class="font-bold">Your Mind</span> and you also laugh at the moment</h3>
                                        <div class="twi-user"><img src="../plugins/images/users/genu.jpg" alt="user" class="img-circle img-responsive pull-left">
                                            <h4 class="text-white m-b-0">Govinda</h4>
                                            <p class="text-white">Actor</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h3 class="text-white">My Acting blown <span class="font-bold">Your Mind</span> and you also laugh at the moment</h3>
                                        <div class="twi-user"><img src="../plugins/images/users/ritesh.jpg" alt="user" class="img-circle img-responsive pull-left">
                                            <h4 class="text-white m-b-0">Govinda</h4>
                                            <p class="text-white">Actor</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box bg-success m-b-15">
                            <h3 class="box-title text-white">Sales Difference</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                                    <h1 class="text-white">$647</h1>
                                    <p class="light_op_text">APRIL 2016</p> <b class="text-white">(150 Sales)</b> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div id="sparkline2dash" class="text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box bg-purple m-b-15">
                            <h3 class="text-white box-title">VISIT STATASTICS</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                                    <h1 class="text-white">$347</h1>
                                    <p class="light_op_text">APRIL 2016</p> <b class="text-white">(150 Sales)</b> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div id="sales1" class="text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!--row -->
                {{-- <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Recent Comments</h3>
                            <div class="comment-center">
                                <div class="comment-body">
                                    <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"></div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5> <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat.</span> <span class="label label-rounded label-info">PENDING</span><a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">April 14, 2016</span></div>
                                </div>
                                <div class="comment-body">
                                    <div class="user-img"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle"> </div>
                                    <div class="mail-contnet">
                                        <h5>Sonu Nigam</h5> <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat.</span><span class="label label-rounded label-success">APPROVED</span><a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">April 14, 2016</span></div>
                                </div>
                                <div class="comment-body">
                                    <div class="user-img"> <img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle"> </div>
                                    <div class="mail-contnet">
                                        <h5>Arijit Sinh</h5> <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat. </span><span class="label label-rounded label-danger">REJECTED</span><a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">April 14, 2016</span></div>
                                </div>
                                <div class="comment-body b-none">
                                    <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"></div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5> <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat.</span> <span class="label label-rounded label-info">PENDING</span> <a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">April 14, 2016</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Recent sales
              <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                <select class="form-control pull-right row b-none">
                  <option>March 2016</option>
                  <option>April 2016</option>
                  <option>May 2016</option>
                  <option>June 2016</option>
                  <option>July 2016</option>
                </select>
              </div>
            </h3>
                            <div class="row sales-report">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h2>March 2016</h2>
                                    <p>SALES REPORT</p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 ">
                                    <h1 class="text-right text-success m-t-20">$3,690</h1> </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>NAME</th>
                                            <th>STATUS</th>
                                            <th>DATE</th>
                                            <th>PRICE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="txt-oflo">Pixel admin</td>
                                            <td><span class="label label-megna label-rounded">SALE</span> </td>
                                            <td class="txt-oflo">April 18</td>
                                            <td><span class="text-success">$24</span></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">Real Homes</td>
                                            <td><span class="label label-info label-rounded">EXTENDED</span></td>
                                            <td class="txt-oflo">April 19</td>
                                            <td><span class="text-info">$1250</span></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">Medical Pro</td>
                                            <td><span class="label label-danger label-rounded">TAX</span></td>
                                            <td class="txt-oflo">April 20</td>
                                            <td><span class="text-danger">-$24</span></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">Hosting press</td>
                                            <td><span class="label label-megna label-rounded">SALE</span></td>
                                            <td class="txt-oflo">April 21</td>
                                            <td><span class="text-success">$24</span></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">Helping Hands</td>
                                            <td><span class="label label-success label-rounded">MEMBER</span></td>
                                            <td class="txt-oflo">April 22</td>
                                            <td><span class="text-success">$24</span></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">Digital Agency</td>
                                            <td><span class="label label-megna label-rounded">SALE</span> </td>
                                            <td class="txt-oflo">April 23</td>
                                            <td><span class="text-danger">-$14</span></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">Helping Hands</td>
                                            <td><span class="label label-success label-rounded">MEMBER</span></td>
                                            <td class="txt-oflo">April 22</td>
                                            <td><span class="text-success">$64</span></td>
                                        </tr>
                                    </tbody>
                                </table> <a href="#">Check all the sales</a> </div>
                        </div>
                    </div>
                </div> --}}
                <!-- /.row -->
                <!--row -->
                {{-- <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">Sales Difference</h3>
                            <ul class="list-inline text-right">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #dadada;"></i>Site A View</h5> </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #aec9cb;"></i>Site B View</h5> </li>
                            </ul>
                            <div id="morris-area-chart2" style="height: 370px;"></div>
                        </div>
                    </div>
                </div> --}}
                <!-- row -->
                {{-- <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="white-box">
                            <h3 class="box-title">To Do List</h3>
                            <ul class="list-task list-group" data-role="tasklist">
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputSchedule" name="inputCheckboxesSchedule">
                                        <label for="inputSchedule"> <span>Schedule meeting</span> </label>
                                    </div>
                                </li>
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputCall" name="inputCheckboxesCall">
                                        <label for="inputCall"> <span>Give Purchase report</span> <span class="label label-danger">Today</span> </label>
                                    </div>
                                </li>
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputBook" name="inputCheckboxesBook">
                                        <label for="inputBook"> <span>Book flight for holiday</span> </label>
                                    </div>
                                </li>
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputForward" name="inputCheckboxesForward">
                                        <label for="inputForward"> <span>Forward all tasks</span> <span class="label label-warning">2 weeks</span> </label>
                                    </div>
                                </li>
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputRecieve" name="inputCheckboxesRecieve">
                                        <label for="inputRecieve"> <span>Recieve shipment</span> </label>
                                    </div>
                                </li>
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputForward2" name="inputCheckboxesd">
                                        <label for="inputForward2"> <span>Important tasks</span> <span class="label label-success">2 weeks</span> </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="white-box">
                            <h3 class="box-title">You have 5 new messages</h3>
                            <div class="message-center">
                                <a href="#">
                                    <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                </a>
                                <a href="#">
                                    <div class="user-img"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                </a>
                                <a href="#">
                                    <div class="user-img"> <img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                </a>
                                <a href="#">
                                    <div class="user-img"> <img src="../plugins/images/users/genu.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Genelia Deshmukh</h5> <span class="mail-desc">I love to do acting and dancing</span> <span class="time">9:08 AM</span> </div>
                                </a>
                                <a href="#" class="b-none">
                                    <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Chat</h3>
                            <div class="chat-box">
                                <ul class="chat-list slimscroll" style="overflow: hidden;" tabindex="5005">
                                    <li>
                                        <div class="chat-image"> <img alt="male" src="../plugins/images/users/sonu.jpg"> </div>
                                        <div class="chat-body">
                                            <div class="chat-text">
                                                <h4>Sonu Nigam</h4>
                                                <p> Hi, All! </p> <b>10.00 am</b> </div>
                                        </div>
                                    </li>
                                    <li class="odd">
                                        <div class="chat-image"> <img alt="Female" src="../plugins/images/users/genu.jpg"> </div>
                                        <div class="chat-body">
                                            <div class="chat-text">
                                                <h4>Genelia</h4>
                                                <p> Hi, How are you Sonu? ur next concert? </p> <b>10.03 am</b> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="chat-image"> <img alt="male" src="../plugins/images/users/ritesh.jpg"> </div>
                                        <div class="chat-body">
                                            <div class="chat-text">
                                                <h4>Ritesh</h4>
                                                <p> Hi, Sonu and Genelia, </p> <b>10.05 am</b> </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Say something"> <span class="input-group-btn">
                    <button class="btn btn-success" type="button">Send</button>
                    </span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- /.row -->
                <!-- .right-sidebar -->
                <div class="right-sidebar" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul>
                                <li><b>Layout Options</b></li>
                                <li>
                                    <div class="checkbox checkbox-info">
                                        <input id="checkbox1" type="checkbox" class="fxhdr">
                                        <label for="checkbox1"> Fix Header </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-warning">
                                        <input id="checkbox2" type="checkbox" class="fxsdr">
                                        <label for="checkbox2"> Fix Sidebar </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox4" type="checkbox" class="open-close">
                                        <label for="checkbox4"> Toggle Sidebar </label>
                                    </div>
                                </li>
                            </ul>
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
                                <li><b>With Dark sidebar</b></li>
                                <br/>
                                <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
                            </ul>
                            {{-- <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <footer style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);" class="footer text-center"> 2018 &copy; Bewell Nutraceutical Corporation </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Counter js -->
    <script src="plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--Morris JavaScript -->
    <script src="plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="plugins/bower_components/morrisjs/morris.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard1.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <script src="plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    {{-- <script type="text/javascript"> --}}
    {{-- // $(document).ready(function() {
    //     $.toast({
    //         heading: 'Welcome to Pixel admin',
    //         text: 'Use the predefined ones, or specify a custom position object.',
    //         position: 'top-right',
    //         loaderBg: '#ff6849',
    //         icon: 'info',
    //         hideAfter: 3500,
    //         stack: 6
    //     })
    // }); --}}
    {{-- </script> --}}
    <!--Style Switcher -->
    <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
