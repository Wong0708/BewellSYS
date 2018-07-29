<?php use App\Http\Controllers\ScheduleController;?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta id="token" name="token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/bewelllogo.ico">
    <title>Bewell</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">

    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <link href="css/allah.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">

    <link href="plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<![endif]-->
</head>

<body class="fix-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
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
                        <!-- /.dropdown -->

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
                                    <a class="text-center" href="#"> <strong>See All Notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                            <!-- /.dropdown-tasks -->
                        </li>



                        <li class="dropdown">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"><img src="plugins/images/jet.jpg" alt="user-img" width="36" class="img-circle"><b style="color:white; font-family:Helvetica,Arial,sans-serif;" class="hidden-xs">

                                @if(Auth::user()->access==1)
                                   Logistics Head
                                @endif

                            </b> </a>

                            <!--DROPDOWN OF THE CLASS-->
                            <ul class="dropdown-menu dropdown-user animated flipInY">
                                <li><a href="#"><i class="ti-user"></i> Manage Account</a></li>
                                {{-- <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                <li><a href="#"><i class="ti-email"></i> Inbox</a></li> --}}
                                {{-- <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li> --}}
                                <li role="separator" class="divider"></li>
                            <li><a href={{route('logout.index')}}><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                        <!-- /.Megamenu -->
                        {{-- <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li> --}}
                        <!-- /.dropdown -->
                    </ul>
                </div>
                <!-- /.navbar-header -->
                <!-- /.navbar-top-links -->
                <!-- /.navbar-static-side -->
            </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                            <!-- input-group -->
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
                <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                </span> </div>
                            <!-- /input-group -->
                        </li>
                        {{-- <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="plugins/images/jet.jpg" alt="user-img" class="img-circle"> <span class="hide-menu">
                            @if(Auth::user()->access==1)
                                Administrator
                            @endif

                            <span class="fa arrow"></span></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li><a href="javascript:void(0)"><i class="ti-user"></i> Manage Account</a></li>
                            </ul>
                        </li> --}}
                        {{-- <li class="nav-small-cap m-t-10">--- Main Menu</li> --}}
                        <span style=" position:absolute; bottom: 50px; width:100%; text-align: center; font-size:14px;">Powered by</span>
                        <span style=" position:absolute; bottom: 30px; width:100%; text-align: center; font-size:12px;"><strong>AIMinds</strong></span>
                        <span style=" position:absolute; bottom: 10px; width:100%; text-align: center; font-size:10px;">BCOFSYS - Version 1.0.1</span>
                        <li><a href={{route('dashboard.index')}} class="waves-effect"><i class="linea-icon linea-aerrow fa-fw" data-icon="&#xe078;"></i> <span class="hide-menu">Dashboard</span></a></li>
                        <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="x" class="linea-icon linea-ecommerce fa-fw"></i> <span class="hide-menu">Order<span class="fa arrow"></span></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href={{route('clientorder.index')}}>Client</a> </li>
                                <li> <a href={{route('manufacturerorder.index')}}>Manufacturer</a> </li>
                                <li> <a href={{route('supplierorder.index')}}>Supplier</a> </li>
                            </ul>
                        </li>
                        <li style="background-color: #E9F0FD;"> <a href={{route('schedule.index')}} class="waves-effect"><i style="color:#4c87ed;" data-icon="r" class="linea-icon linea-basic fa-fw"></i> <span style="color:#4c87ed;" class="hide-menu">Schedule</span></a>
                            {{-- <ul class="nav nav-second-level">
                                <li> <a href="javascript:void(0)">Client</a> </li>
                                <li> <a href="javascript:void(0)">Manufacturer</a> </li>
                                <li> <a href="javascript:void(0)">Supplier</a> </li>
                            </ul> --}}
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
                                <li> <a href={{route('inventoryreport.index')}}>Delivery</a> </li>
                                <li> <a href={{route('inventoryreport.index')}}>Manufacturer</a> </li>
                                <li> <a href={{route('inventoryreport.index')}}>Supplier</a> </li>
                            </ul>
                        </li>

                        <li style="border-bottom:1px solid #E8EAED;"> <a href="javascript:void(0)" class="waves-effect"><i style="color:#5F6367;" data-icon="V" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Account<span class="fa arrow"></span></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href={{route('useraccount.index')}}>User</a> </li>
                                <li> <a href={{route('clientaccount.index')}}>Client</a> </li>
                                <li> <a href={{route('manufactureraccount.index')}}>Manufacturer</a> </li>
                                <li> <a href={{route('supplieraccount.index')}}>Supplier</a> </li>
                                {{-- <li> <a href={{route('inventoryreport.index')}}>FAQs</a> </li> --}}
                            </ul>
                        </li>
                        @endif

                        {{-- <li style="border-bottom:1px solid #E8EAED;"> <a href="javascript:void(0)" class="waves-effect"><i style="color:#5F6367;" data-icon="&#xe005;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Logistics<span class="fa arrow"></span></span></a> --}}
                            {{-- <ul class="nav nav-second-level">
                                <li> <a href={{route('inventoryreport.index')}}>Truck</a> </li> --}}
                                {{-- <li> <a href={{route('salesreport.index')}}>Driver</a> </li> --}}
                                {{-- <li> <a href={{route('inventoryreport.index')}}>FAQs</a> </li> --}}
                            {{-- </ul>
                        </li> --}}

                        <li><a href="faq.html" class="waves-effect"><i class="fa fa-circle-o text-success"></i> <span class="hide-menu">FAQs</span></a></li>
                        <li><a href="faq.html" class="waves-effect"><i class="fa fa-circle-o text-info"></i> <span class="hide-menu">Documentation</span></a></li>

                        {{-- <li> <a href={{route('schedule.index')}} class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Settings</span></a> --}}
                            {{-- <ul class="nav nav-second-level">
                                <li> <a href="javascript:void(0)">Client</a> </li>
                                <li> <a href="javascript:void(0)">Manufacturer</a> </li>
                                <li> <a href="javascript:void(0)">Supplier</a> </li>
                            </ul> --}}
                        {{-- </li> --}}
                        {{-- <li><a href={{route('logout.index')}} class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li> --}}
                    </ul>
                </div>
            </div>

        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid" style="background-color:#F5F5F5;">
                <div class="row bg-title" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title" style="color:black;">Schedule</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            {{-- <li><a href="#">Order</a></li> --}}
                            <li class="active" style="color:#4c87ed;">Schedule</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <!--MODAL STARTS HERE-->
                <div class="modal fade" id="manuOrderModal" tabindex="-1" role="dialog" aria-labelledby="addManuOrder">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="exampleModalLabel1" style="color:black; font-family:Helvetica,Arial,sans-serif;">Add Manufacturer Schedule</h4>
                            </div>
                            {!! Form::open(array('route'=>'schedule.store'))!!}
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="client" class="control-label" style="color:black; font-family:Helvetica,Arial,sans-serif;"><b>Order #:</b></label>
                                    <br>
                                    <input type="hidden" name="sched_type" value="manufacturer">
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Choose one order among the list to add a schedule. <b style="color:#E53935;">*Required</b></span>
                                    <select name="order_num" class="form-control order_dropdown" id="client" style="margin-bottom:10px;">
                                        @if($orders)
                                            @foreach ($orders as $order)
                                                <option value="{{$order->id}}"
                                                        locs="@foreach($order->locations as $locs){{$locs->loc_address}};@endforeach"
                                                        locs_ids="@foreach($order->locations as $locs){{$locs->id}};@endforeach"
                                                        prod_ids="@foreach($order->order_details as $prod){{$prod->productID}};@endforeach"
                                                        prod_qty="@foreach($order->order_details as $qty){{$prod->cldt_qty}};@endforeach">
                                                    {{$order->client_name}} | CLOD-{{$order->id}} </option>
                                            @endforeach
                                        @endif
                                    </select>

                                    <label for="client" class="control-label" style="color:black; font-family:Helvetica,Arial,sans-serif;"><b>Address:</b></label>
                                    <br>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Choose one order among the list to add a schedule. <b style="color:#E53935;">*Required</b></span>
                                    <select name="address" class="form-control address_dropdown" id="client" style="margin-bottom:10px;">
                                        @if($orders)
                                            @foreach ($orders as $order)
                                                @foreach($order->locations as $locs)
                                                    <option value="{{$locs->id}}">{{$locs->loc_address}}</option>
                                                @endforeach
                                                @break
                                            @endforeach
                                        @endif
                                    </select>

                                    <label for="client" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Delivery Date:</b></label>
                                    <br>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Choose a date to schedule a delivery. <b style="color:#E53935;">*Required</b></span>
                                    {{csrf_field()}}
                                    <input type="date" class="form-control delivery_date" name="delivery_date" value="">

                                    <label for="client" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Truck Plate Number:</b></label>
                                    <br>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the car's plate number. Ex: NSA-2134. <b style="color:#E53935;">*Required</b></span>

                                    <select name="plate_num" class="form-control truck_dropdown" id="client" style="margin-bottom:10px;">
                                        @if(isset($trucks))
                                            @foreach ($trucks as $truck)
                                                <option value="{{$truck->id}}"
                                                        truck_total_cap="{{$truck->max_box}}"
                                                        truck_avail_cap=""
                                                        truck_cur_cap=""
                                                >[{{$truck->plate_num}}] {{$truck->car_model}}</option>
                                            @endforeach
                                        @endif
                                    </select>

                                    <label for="client" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Driver:</b></label>
                                    <br>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Choose a driver to deliver the order. <b style="color:#E53935;">*Required</b></span>
                                    <select name="driver" class="form-control driver_dropdown" id="driver" style="margin-bottom:10px;">
                                        @if(isset($drivers))
                                            @foreach ($drivers as $driver)
                                                <option value="{{$driver->id}}">{{$driver->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>

                                    <div class="white-box" style="background-color:#F5F5F5; margin-top:10px;">

                                        <h4  style="font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Truck Delivery Order/s</b></h4>
                                        <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: This section assign orders to the desired truck. <b style="color:#E53935;">*Required</b></span>
                                        <br>
                                        <div class="row">
                                            <center>
                                                <div class="col-md-4"><h4  style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Total Capacity:</b></h4></div>
                                                <div class="col-md-4"><h4  style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Current Capacity: </b></h4></div>
                                                <div class="col-md-4"><h4  style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Available Capacity: </b></h4></div>
                                            </center>
                                        </div>
                                        <div class="row">
                                            <center>
                                                <div class="col-md-4">
                                                    <p id="truck_total_cap">
                                                        @if(isset($trucks))
                                                            @foreach ($trucks as $truck)
                                                                {{$truck->max_box}}
                                                                @break
                                                            @endforeach
                                                        @endif
                                                    </p>
                                                </div>
                                                <div class="col-md-4"><b><p id="truck_cur_cap" value="">N/A - select a date</p></b></div>
                                                <div class="col-md-4"><p id="truck_avail_cap" value="">N/A</p></div>
                                            </center>
                                        </div>


                                        {{-- <label for="order" class="control-label"> <button style="margin-top:10px; font-size:12px; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); font-family:Helvetica,Arial,sans-serif; width:130px; height:30px;"class="btn btn-success btn-rounded waves-effect waves-light productadd" type="button"><span class="btn-label"><i class="fa fa-plus-square"></i></span>Add Product</button></label> --}}
                                        <div class="table-responsive" style="margin-top:10px;">
                                            <table class="table color-bordered-table info-bordered-table" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); font-family:Helvetica,Arial,sans-serif;">
                                                <thead>
                                                <tr style="font-size:12px; font-weight:700; ">
                                                    <th>Order #</th>
                                                    <th>Code</th>
                                                    <th>Qty (Boxes)</th>
                                                    <th>Deliver Qty (Boxes)</th>
                                                    <th><i class="fa fa-gear"></i></th>
                                                </tr>
                                                </thead>
                                                <tbody id="addproduct" class="prod_table">
                                                @if($orders)
                                                    @foreach ($orders as $order)
                                                        @foreach($order->order_details as $ord)
                                                            <tr style="font-size:12px;">
                                                                <td><span class="label label-info">CLOD-{{$ord->id}}</span></td>
                                                                <td>PR-{{$ord->productID}}</td>
                                                                <td>{{$ord->cldt_qty}} Boxes</td>
                                                                <input type="hidden" name="ids[]" value="{{$ord->productID}}">
                                                                <td><input style="font-size:12px;" class="form-control" placeholder="quantity" id="orderqty[]" name="orderqty[]" type="number" class="orderqty"></td>
                                                                <td><i style="font-size:20px; color:#E53935; " class="linea linea-aerrow removeproduct" data-icon="&#xe04a;">  </td>
                                                            </tr>
                                                        @endforeach
                                                        @break
                                                    @endforeach
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                        <hr>
                                        <center><h2  style="font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Truck Delivery Schedule Summary</b></h2></center>
                                        {{-- <h3 class="box-title">Product Inventory Support</h3> --}}
                                        <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: This is the referenced delivery list for the truck delivery.</span>

                                        <table class="table full-color-table full-info-table hover-table" data-height="250" data-mobile-responsive="true" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); margin-top:10px; font-family:Helvetica,Arial,sans-serif;">
                                            <thead>
                                            <tr style="font-size:12px; font-weight:700;">
                                                <th>Sched #</th>
                                                <th>Driver</th>
                                                <th>Address</th>
                                                <th>Delivered Date</th>
                                                <th>Status</th>
                                                {{-- <th><i class="fa fa-gear"></th> --}}
                                            </tr>
                                            </thead>
                                            <tbody id="addproduct">
                                            <tr style="font-size:12px;">
                                                <td>TR-{{$latest_id+1}}</td>
                                                <td id="prev_driver">
                                                    @if(isset($drivers))
                                                        @foreach ($drivers as $driver)
                                                            <option value="{{$driver->id}}">{{$driver->name}}</option>
                                                            @break
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td><span class="label label-success" id="prev_address">Taft Avenue, Metro Manila</span></td>
                                                <td id="prev_delivery_date"></td>
                                                <td><span class="label label-success">Scheduled</span></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <h2><center><span class="control label" id="alert" style="display: none; color:red">Delivering quantity exceeds the available space</span></center></h2>

                                    </div>


                                </div>

                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-danger btn-md btn-block text-uppercase waves-effect waves-light" onclick="checkSchedValidity()" style="background-color: #4c87ed; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);" type="button">Submit</button>
                                <button class="btn btn-danger btn-md btn-block text-uppercase waves-effect waves-light" style="display: none" id="schedSubmit" type="submit">Submit</button>
                            </div>
                            {!!Form::close()!!}

                        </div>
                    </div>
                </div>

                <!--MODAL STARTS HERE-->
                <div class="modal fade" id="clientOrderModal" tabindex="-1" role="dialog" aria-labelledby="addClientOrder">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="exampleModalLabel1" style="color:black; font-family:Helvetica,Arial,sans-serif;">Add Client Schedule</h4>
                            </div>
                            {!! Form::open(array('route'=>'schedule.store'))!!}

                            <input type="hidden" name="sched_type" value="client">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="client" class="control-label" style="color:black; font-family:Helvetica,Arial,sans-serif;"><b>Order #:</b></label>
                                    <br>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Choose one order among the list to add a schedule. <b style="color:#E53935;">*Required</b></span>
                                    <select name="order_num" class="form-control order_dropdown" id="client" style="margin-bottom:10px;">
                                            @if($orders)
                                                @foreach ($orders as $order)
                                                    <option value="{{$order->id}}"
                                                            locs="@foreach($order->locations as $locs){{$locs->loc_address}};@endforeach"
                                                            locs_ids="@foreach($order->locations as $locs){{$locs->id}};@endforeach"
                                                            prod_ids="@foreach($order->order_details as $prod){{$prod->productID}};@endforeach"
                                                            prod_qty="@foreach($order->order_details as $qty){{$prod->cldt_qty}};@endforeach"
                                                    >{{$order->client_name}} | CLOD-{{$order->id}} </option>
                                                @endforeach
                                            @endif
                                    </select>

                                    <label for="client" class="control-label" style="color:black; font-family:Helvetica,Arial,sans-serif;"><b>Address:</b></label>
                                    <br>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Choose one order among the list to add a schedule. <b style="color:#E53935;">*Required</b></span>
                                    <select name="address" class="form-control address_dropdown" id="client" style="margin-bottom:10px;">
                                        @if($orders)
                                            @foreach ($orders as $order)
                                                @foreach($order->locations as $locs)
                                                    <option value="{{$locs->id}}">{{$locs->loc_address}}</option>
                                                @endforeach
                                                @break
                                            @endforeach
                                        @endif
                                    </select>

                                    <label for="client" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Delivery Date:</b></label>
                                    <br>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Choose a date to schedule a delivery. <b style="color:#E53935;">*Required</b></span>
                                    {{csrf_field()}}
                                    <input type="date" class="form-control delivery_date" name="delivery_date" value="">

                                    <label for="client" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Truck Plate Number:</b></label>
                                    <br>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the car's plate number. Ex: NSA-2134. <b style="color:#E53935;">*Required</b></span>

                                    <select name="plate_num" class="form-control truck_dropdown" id="client" style="margin-bottom:10px;">
                                        @if(isset($trucks))
                                            @foreach ($trucks as $truck)
                                                <option value="{{$truck->id}}"
                                                        truck_total_cap="{{$truck->max_box}}"
                                                        truck_avail_cap=""
                                                        truck_cur_cap=""
                                                >[{{$truck->plate_num}}] {{$truck->car_model}}</option>
                                            @endforeach
                                        @endif
                                    </select>

                                    <label for="client" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Driver:</b></label>
                                    <br>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Choose a driver to deliver the order. <b style="color:#E53935;">*Required</b></span>
                                    <select name="driver" class="form-control driver_dropdown" id="driver" style="margin-bottom:10px;">
                                                    @if(isset($drivers))
                                                        @foreach ($drivers as $driver)
                                                            <option value="{{$driver->id}}">{{$driver->name}}</option>
                                                        @endforeach
                                                    @endif
                                    </select>

                                    <div class="white-box" style="background-color:#F5F5F5; margin-top:10px;">

                                            <h4  style="font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Truck Delivery Order/s</b></h4>
                                            <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: This section assign orders to the desired truck. <b style="color:#E53935;">*Required</b></span>
                                            <br>
                                    <div class="row">
                                        <center>
                                        <div class="col-md-4"><h4  style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Total Capacity:</b></h4></div>
                                        <div class="col-md-4"><h4  style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Current Capacity: </b></h4></div>
                                        <div class="col-md-4"><h4  style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Available Capacity: </b></h4></div>
                                        </center>
                                    </div>
                                    <div class="row">
                                        <center>
                                            <div class="col-md-4">
                                                <p id="truck_total_cap">
                                                    @if(isset($trucks))
                                                        @foreach ($trucks as $truck)
                                                                {{$truck->max_box}}
                                                            @break
                                                        @endforeach
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="col-md-4"><b><p id="truck_cur_cap" value="">N/A - select a date</p></b></div>
                                            <div class="col-md-4"><p id="truck_avail_cap" value="">N/A</p></div>
                                        </center>
                                    </div>


                                            {{-- <label for="order" class="control-label"> <button style="margin-top:10px; font-size:12px; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); font-family:Helvetica,Arial,sans-serif; width:130px; height:30px;"class="btn btn-success btn-rounded waves-effect waves-light productadd" type="button"><span class="btn-label"><i class="fa fa-plus-square"></i></span>Add Product</button></label> --}}
                                            <div class="table-responsive" style="margin-top:10px;">
                                            <table class="table color-bordered-table info-bordered-table" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); font-family:Helvetica,Arial,sans-serif;">
                                                <thead>
                                                    <tr style="font-size:12px; font-weight:700; ">
                                                        <th>Order #</th>
                                                        <th>Code</th>
                                                        <th>Qty (Boxes)</th>
                                                        <th>Deliver Qty (Boxes)</th>
                                                        <th><i class="fa fa-gear"></i></th>
                                                    </tr>
                                                </thead>
                                                <tbody id="addproduct" class="prod_table">
                                                @if($orders)
                                                    @foreach ($orders as $order)
                                                        @foreach($order->order_details as $ord)
                                                            <tr style="font-size:12px;">
                                                                <td><span class="label label-info">CLOD-{{$ord->id}}</span></td>
                                                                <td>PR-{{$ord->productID}}</td>
                                                                <td>{{$ord->cldt_qty}} Boxes</td>
                                                                <input type="hidden" name="ids[]" value="{{$ord->productID}}">
                                                                <td><input style="font-size:12px;" class="form-control" placeholder="quantity" id="orderqty[]" name="orderqty[]" type="number" class="orderqty"></td>
                                                                <td><i style="font-size:20px; color:#E53935; " class="linea linea-aerrow removeproduct" data-icon="&#xe04a;">  </td>
                                                            </tr>
                                                        @endforeach
                                                        @break
                                                    @endforeach
                                                @endif
                                                </tbody>
                                                </table>
                                            </div>
                                                    <hr>
                                                    <center><h2  style="font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Truck Delivery Schedule Summary</b></h2></center>
                                                    {{-- <h3 class="box-title">Product Inventory Support</h3> --}}
                                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: This is the referenced delivery list for the truck delivery.</span>

                                                    <table class="table full-color-table full-info-table hover-table" data-height="250" data-mobile-responsive="true" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); margin-top:10px; font-family:Helvetica,Arial,sans-serif;">
                                                            <thead>
                                                                <tr style="font-size:12px; font-weight:700;">
                                                                    <th>Sched #</th>
                                                                    <th>Driver</th>
                                                                    <th>Address</th>
                                                                    <th>Delivered Date</th>
                                                                    <th>Status</th>
                                                                    {{-- <th><i class="fa fa-gear"></th> --}}
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="addproduct">
                                                                            <tr style="font-size:12px;">
                                                                               <td>TR-{{$latest_id+1}}</td>
                                                                                <td id="prev_driver">
                                                                                    @if(isset($drivers))
                                                                                            @foreach ($drivers as $driver)
                                                                                                <option value="{{$driver->id}}">{{$driver->name}}</option>
                                                                                                @break
                                                                                            @endforeach
                                                                                        @endif
                                                                                </td>
                                                                               <td><span class="label label-success" id="prev_address">Taft Avenue, Metro Manila</span></td>
                                                                               <td id="prev_delivery_date"></td>
                                                                               <td><span class="label label-success">Scheduled</span></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <h2><center><span class="control label" id="alert" style="display: none; color:red">Delivering quantity exceeds the available space</span></center></h2>

                                                </div>


                                </div>

                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-danger btn-md btn-block text-uppercase waves-effect waves-light" onclick="checkSchedValidity()" style="background-color: #4c87ed; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);" type="button">Submit</button>
                                    <button class="btn btn-danger btn-md btn-block text-uppercase waves-effect waves-light" style="display: none" id="schedSubmit" type="submit">Submit</button>
                                </div>
                            {!!Form::close()!!}

                        </div>
                    </div>
                </div>
                <!--truck edit modal -->
                <div  class="modal fade" id="editTruckModal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"></button>
                                <center ><b><h2 class="modal-title" style="display: inline;">Edit Truck Status</h2></b></center>
                            </div>
                            {!! Form::open(['route'=>['truck.update',1],'method'=>'PUT','enctype'=>'multipart/form-data'])!!}
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="truckStatus">Truck Status:</label>
                                    <select name="truckStatus" class="form-control" id="truckStatus">
                                        <option>Available</option>
                                        <option>Not Available</option>
                                    </select>
                                </div>
                            </div>
                            <input id="tr_id" type="hidden" name="tr_id">
                            <div class="modal-footer">
                                <button class="btn btn-danger btn-md btn-block text-uppercase waves-effect waves-light" style="background-color: #4c87ed; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);" type="submit">Submit</button>
                            </div>
                            {!!Form::close()!!}
                        </div>
                    </div>
                </div>
                <!--conclude sched modal -->
                <div  class="modal fade" id="concludeSchedModal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"></button>
                                <center ><b><h2 class="modal-title" style="display: inline;">Conclude Schedule
                                            <i class="fa fa-calendar"></i>
                                        </h2></b></center>
                            </div>
                            {!! Form::open(['route'=>['schedule.update',1],'method'=>'PUT','enctype'=>'multipart/form-data'])!!}
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="truckStatus">Conclusion</label>
                                    <select name="schedule_conclusion" style="font-family: 'FontAwesome', 'Open Sans';font-size: 21px;" class="form-control sched_conc" id="sched_conc">
                                        <option value="fulfil" style="">&#xf274; Fulfill Delivery</option>
                                        <option value="cancel">&#xf273; Cancel Delivery</option>
                                    </select>
                                    <label for="truckStatus">Remarks:</label>
                                    <textarea class="form-control" class="form-control" placeholder="Write about your transaction details" rows="5" name="remarks" id="comment"></textarea>
                                    <div id="date_conclude" style="display:block">
                                        <label for="truckStatus">Delivery Date:</label>
                                        <input type="date" class="form-control" name="delivery_date"/>
                                    </div>
                                </div>
                            </div>
                            <input id="sc_id" type="hidden" name="id">
                            <div class="modal-footer">
                                <button class="btn btn-danger btn-md btn-block text-uppercase waves-effect waves-light" style="background-color: #4c87ed; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);" type="submit">Submit</button>
                            </div>
                            {!!Form::close()!!}
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="driverModal" tabindex="-1" role="dialog" aria-labelledby="adddriver">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="exampleModalLabel1" style="color:black; font-family:Helvetica,Arial,sans-serif;">Add Driver</h4>
                                </div>
                                {!! Form::open(array('route'=>'driver.store'))!!}
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="client" class="control-label" style="color:black; font-family:Helvetica,Arial,sans-serif;"><b>Driver's Name:</b></label>
                                        <br>
                                        <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the full name of the Driver. Ex: Juan Dela Cruz. <b style="color:#E53935;">*Required</b></span>
                                        <input class="form-control" name="name" type="text"/>

                                        <label for="client" class="control-label" style="margin-top:10px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Driver's License #:</b></label>
                                        <br>
                                        <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the user's latest issued driver's license. Ex: N07-12-657548. <b style="color:#E53935;">*Required</b></span>

                                        <input style="margin-top:10px;" class="form-control" name="license" type="text" data-mask="a99-99-999999"/>


                                        <label for="client" class="control-label" style="margin-top:10px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Contact #:</b></label>
                                        <br>
                                        <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the contact details of the driver. Ex: +63 917 391 8317 <b style="color:#E53935;">*Required</b></span>
                                        <input style="margin-top:10px;" class="form-control" type="text" name="contact" data-mask="+63 999-999-9999"/>
                                        <label for="client" class="control-label" style="margin-top:10px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Availability:</b></label>
                                        <br>
                                        <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the weekly availability of the driver. Ex: M-W-F. <b style="color:#E53935;">*Required</b></span>
                                        <input style="margin-top:10px;" class="form-control" name="availability" type="text"/>


                                            </div>

                                        {{-- <h1>Total:</h1> --}}

                                    </div>
                                    <div class="modal-footer">
                                        {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> --}}
                                        <button class="btn btn-danger btn-md btn-block text-uppercase waves-effect waves-light" style="background-color: #4c87ed; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);" type="submit">Submit</button>
                                    </div>
                                {!!Form::close()!!}

                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="truckmodal" tabindex="-1" role="dialog" aria-labelledby="adddriver">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="titlemodaltruck" style="color:black; font-family:Helvetica,Arial,sans-serif;">Add Truck</h4>
                                    </div>
                                    {!! Form::open(array('route'=>'truck.store'))!!}
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="client" class="control-label" style="color:black; font-family:Helvetica,Arial,sans-serif;"><b>Truck Car Model:</b></label>
                                            <br>
                                            <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the truck car model. Ex: Isuzu FRR90 M. <b style="color:#E53935;">*Required</b></span>
                                            <input class="form-control" name="car_model" type="text"/>


                                            <label for="client" class="control-label" style="margin-top:10px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Car Plate Number:</b></label>
                                            <br>
                                            <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the car's plate number. Ex: NSA-2134. <b style="color:#E53935;">*Required</b></span>

                                            <input style="margin-top:10px;" class="form-control" name="plate_num" type="text"/>


                                            <label for="client" class="control-label" style="margin-top:10px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Maximum Load (Boxes):</b></label>
                                            <br>
                                            <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the maximum delivery load of the car. Ex: 100 Boxes <b style="color:#E53935;">*Required</b></span>
                                            <input style="margin-top:10px;" class="form-control" name="max_box" type="text" data-mask="999"/>
                                            <label for="client" class="control-label" style="margin-top:10px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Availability:</b></label>
                                            <br>
                                            <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the weekly availability of the driver. Ex: M-W-F. <b style="color:#E53935;">*Required</b></span>
                                            <input style="margin-top:10px;" class="form-control" name="availability" type="text"/>


                                                </div>

                                            {{-- <h1>Total:</h1> --}}

                                        </div>
                                        <div class="modal-footer">
                                            {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> --}}
                                            <button class="btn btn-danger btn-md btn-block text-uppercase waves-effect waves-light" style="background-color: #4c87ed; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);" type="submit">Submit</button>
                                        </div>
                                    {!!Form::close()!!}

                                </div>
                            </div>
                        </div>



                <div class="row" style="font-family:Helvetica,Arial,sans-serif;">
                    @if(Session::has('success'))
                        <script>
                            window.onload = function() {
                                var x = document.getElementById("snackbar");
                                x.className = "show";
                                setTimeout(function(){
                                    x.className = x.className.replace("show", ""); }, 3000);
                            }
                        </script>
                        <div class="alert alert-success"> {{Session::get('success')}} </div>
                    @endif

                        @if(Session::has('success'))
                            <center><div id="snackbar">{{Session::get('success')}}</div></center>
                        @endif
                    <div class="col-sm-12">
                        <div class="white-box" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                            <h3 class="box-title m-b-0" style="color:black;">LIST OF ALL ORDER SCHEDULES</h3>
                            <ul class="nav customtab nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#client_table" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="ti-home"></i></span><span class="hidden-xs">Client</span></a></li>
                                <li role="presentation" class=""><a href="#manuf_table" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Manufacturer</span></a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="client_table">
                                    <button class="btn btn-success waves-effect waves-light"
                                            data-toggle="modal" data-target="#clientOrderModal"
                                            type="button">
                                            <span class="btn-label">
                                            <i class="fa fa-calendar-plus-o"></i>
                                            </span>Add Client Schedule</button>
                                    <hr>
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table table-striped myTable">
                                                <thead>
                                                <tr style="color:black;">
                                                    <th>Tracking #</th>
                                                    <th>Order #</th>
                                                    <th>Truck Plate #</th>
                                                    <th>Driver</th>
                                                    <th>Address</th>
                                                    <th>Schedule Date</th>
                                                    <th>Delivered Date</th>
                                                    <th>Status</th>
                                                    <th><i class="fa fa-gavel"></i> Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @if(isset($schedules))
                                                    @foreach($schedules as $schedule)
                                                        <tr>
                                                            <td><a href="{{ route('appdev.scheduledetail', ['id' => $schedule->id]) }}">TR-{{$schedule->id}}</a></td>
                                                            <td>CLOD-{{$schedule->orderID}}</td>
                                                            <td>{{\App\Http\Controllers\ScheduleController::getTruck($schedule->truckID)->plate_num}}</td>
                                                            <td>{{\App\Http\Controllers\ScheduleController::getDriver($schedule->driverID)->name}}</td>
                                                            <td>{{\App\Http\Controllers\ScheduleController::getLocation($schedule->locationID)->loc_address}}</td>
                                                            <td>{{$schedule->scd_date}}</td>
                                                            <td>@if($schedule->dateDelivered){{$schedule->dateDelivered}}@else N/A @endif</td>
                                                            <td><span class="label {{\App\Http\Controllers\ScheduleController::getSchedClassColor($schedule->id)}}"
                                                                >{{$schedule->scd_status}}</span></td>
                                                            <td>

                                                                <center>
                                                                    {!!  \App\Http\Controllers\ScheduleController::getRestrict($schedule->scd_status, $schedule->id) !!}
                                                                </center>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="manuf_table">
                                    <button class="btn btn-info waves-effect waves-light"
                                            data-toggle="modal" data-target="#manuOrderModal"
                                            type="button">
                                            <span class="btn-label">
                                            <i class="fa fa-calendar-plus-o"></i>
                                            </span>Add Manufacturer Schedule</button>
                                    <hr>
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table table-striped myTable">
                                                <thead>
                                                <tr style="color:black;">
                                                    <th>Tracking #</th>
                                                    <th>Order #</th>
                                                    <th>Truck Plate #</th>
                                                    <th>Driver</th>
                                                    <th>Address</th>
                                                    <th>Schedule Date</th>
                                                    <th>Delivered Date</th>
                                                    <th>Status</th>
                                                    <th><i class="fa fa-gavel"></i> Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @if(isset($schedules))
                                                    @foreach($schedules as $schedule)
                                                        <tr>
                                                            <td><a href="{{ route('appdev.scheduledetail', ['id' => $schedule->id]) }}">TR-{{$schedule->id}}</a></td>
                                                            <td>CLOD-{{$schedule->orderID}}</td>
                                                            <td>{{\App\Http\Controllers\ScheduleController::getTruck($schedule->truckID)->plate_num}}</td>
                                                            <td>{{\App\Http\Controllers\ScheduleController::getDriver($schedule->driverID)->name}}</td>
                                                            <td>{{\App\Http\Controllers\ScheduleController::getLocation($schedule->locationID)->loc_address}}</td>
                                                            <td>{{$schedule->scd_date}}</td>
                                                            <td>@if($schedule->dateDelivered){{$schedule->dateDelivered}}@else N/A @endif</td>
                                                            <td><span class="label {{\App\Http\Controllers\ScheduleController::getSchedClassColor($schedule->id)}}"
                                                                >{{$schedule->scd_status}}</span></td>
                                                            <td>

                                                                <center>
                                                                    {!!  \App\Http\Controllers\ScheduleController::getRestrict($schedule->scd_status, $schedule->id) !!}
                                                                </center>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-12 col-sm-12">
                            <div class="white-box" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">

                            <h3 class="box-title m-b-0" style="color:black;">LIST OF ALL TRUCKS</h3>
                            <button class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#truckmodal" type="button"><span class="btn-label"><i class="fa fa fa-truck"></i></span>Add Truck</button>

                            <p class="text-muted m-b-30"></p>
                            <div class="table-responsive">
                                    <table class="table table-striped myTable">
                                        <thead>
                                            <tr style="color:black;">
                                                <th>Truck #</th>
                                                <th>Car Model</th>
                                                <th>Plate #</th>
                                                <th>Max (Boxes) </th>
                                                {{-- <th>Mi</th> --}}
                                                <th>Availability</th>
                                                <th>Status</th>
                                                <th>Last Updated</th>
                                                <th><i class="fa fa-gear"/></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if($trucks)
                                        @foreach($trucks as $truck)
                                            <tr>
                                                <td><a href="{{ route('appdev.truckdetailz', ['id' => $truck->id]) }}">TRK-{{$truck->id}}</a></td>
                                                <td>{{$truck->car_model}}</td>
                                                <td>{{$truck->plate_num}}</td>
                                                <td>{{$truck->max_box}}</td>
                                                <td>{{$truck->availability}}</td>
                                                <td>
                                                @if($truck->tr_status == "Available")
                                                        <span class="label label-success">{{$truck->tr_status}}</span>
                                                @elseif($truck->tr_status =="Not Available")
                                                        <span class="label label-danger">{{$truck->tr_status}}</span>
                                                @endif
                                                </td>
                                                <td>{{$truck->updated_at}}</td>
                                                <td>
                                                    <i trid="{{$truck->id}}" style="color:#4c87ed;" data-toggle="modal" data-target="#editTruckModal" class="fa fa-edit truckeditz">
                                                        {!! Form::open(['route'=>['truck.destroy',$truck->id],'method'=>'DELETE','enctype'=>'multipart/form-data','class'=>'deleteOrder']) !!}
                                                        <i style="margin-left:5px; color:#E53935;" class="fa fa-trash-o removeorder"></i>
                                                        {!!Form::close()!!}

                                                </td>
                                                {{-- <td>  --}}
                                            </tr>

                                        @endforeach
                                    @endif

                                    </tbody>
                                </table>
                            </div>

                    </div>
                </div>


                <div class="col-lg-12 col-sm-12">
                        <div class="white-box" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                        <h3 class="box-title m-b-0" style="color:black;">LIST OF ALL DRIVERS</h3>
                        <button class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#driverModal" type="button"><span class="btn-label"><i class="fa fa-wrench"></i></span>Add Driver</button>

                        <a class="mytooltip" href="javascript:void(0)"><i class="fa fa-question-circle"></i><span class="tooltip-content3">Click this button to place a new company driver! </span> </a> {{-- </div> --}} {{-- </i>Add Order <span class="tooltip-content3">You can easily navigate the city by car.</span> </a> --}}
                        <p class="text-muted m-b-30"></p>
                        <div class="table-responsive">
                                <table class="table table-striped myTable">
                                    <thead>
                                        <tr style="color:black;">
                                             <th>Driver #</th>
                                            <th>License #</th>
                                            <th>Name</th>
                                            <th>Contact #</th>
                                            {{-- <th>Max (Boxes) </th> --}}
                                            {{-- <th>Mi</th> --}}
                                            <th>Availability</th>
                                            <th>Status</th>
                                            <th>Last Updated</th>
                                            <th><i class="fa fa-gear"></i></th>
                                        </tr>
                                    </thead>
                                <tbody>
                                    @if(isset($drivers))
                                        @foreach($drivers as $driver)
                                            <tr>
                                                <td><a href={{ route('appdev.driver', ['id' => $driver->id]) }}>DRV-{{$driver->id}}</a></td>
                                                <td>{{$driver->license_num}}</td>
                                                <td>{{$driver->name}}</td>
                                                <td>{{$driver->contact_num}}</td>
                                                <td>{{$driver->availability}}</td>
                                                <td>
                                                    @if($driver->dr_status == "Available")
                                                        <span class="label label-success">{{$driver->dr_status}}</span>
                                                    @elseif($driver->dr_status =="Not Available")
                                                        <span class="label label-danger">{{$driver->dr_status}}</span>
                                                    @endif
                                                </td>
                                                <td>{{$driver->updated_at}}</td>
                                                <td>

                                                    <i drid="{{$driver->id}}" style="color:#4c87ed;" data-toggle="modal" data-target="#editDriverModal" class="fa fa-edit drivereditz">

                                                        {!! Form::open(['route'=>['driver.destroy',$driver->id],'method'=>'DELETE','enctype'=>'multipart/form-data','class'=>'deleteOrder']) !!}
                                                        <i style="margin-left:5px; color:#E53935;" class="fa fa-trash-o removeorder">
                                                        {!!Form::close()!!}

                                                </td>
                                            </tr>
                                            <!--driver edit modal -->
                                            <div  class="modal fade" id="editDriverModal" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"></button>
                                                            <center ><b><h2 class="modal-title" style="display: inline;">Edit Driver Status</h2></b></center>
                                                    </div>
                                                    {!! Form::open(['route'=>['driver.update',$driver->id],'method'=>'PUT','enctype'=>'multipart/form-data'])!!}
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="driverStatus">Driver Status:</label>
                                                            <select name="driverStatus" class="form-control" id="driverStatus">
                                                                <option>Available</option>
                                                                <option>Not Available</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <input id="dr_id" type="hidden" name="dr_id">
                                                    <div class="modal-footer">
                                                        <button class="btn btn-danger btn-md btn-block text-uppercase waves-effect waves-light" style="background-color: #4c87ed; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);" type="submit">Submit</button>
                                                    </div>
                                                    {!!Form::close()!!}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif

                                </tbody>
                            </table>
                        </div>

                </div>
            </div>
                <!-- /.row -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                        <div class="slimscrollright">
                            <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span>
                                </div>
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
                            </div>
                        </div>
                        <!-- /.right-sidebar -->
                    </div>
                    <!-- /.container-fluid -->
                    <footer class="footer text-center"> 2018 &copy; Bewell Nutraceutical Corporation</footer>
                </div>
                <!-- /#page-wrapper -->
            </div>


            <!-- /#wrapper -->
            <!-- jQuery -->
            <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap Core JavaScript -->
            <script src="bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- Menu Plugin JavaScript -->
            <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
            <!--slimscroll JavaScript -->
            <script src="js/jquery.slimscroll.js"></script>
            <!--Wave Effects -->
            <script src="js/waves.js"></script>
            <!-- Custom Theme JavaScript -->
            <script src="js/custom.min.js"></script>
            <script src="js/mask.js"></script>
            <script src="../plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
            <!-- start - This is for export functionality only -->
            <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
            <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
            <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
            <!-- end - This is for export functionality only -->
            <script>
                $( document ).ready(function() {
                    var loc = $('option:selected', ".address_dropdown").html();

                    //console.log( "ready!" );
                    $("#prev_address").html(loc);
                });
            </script>
            <script>
                function  computeBoxes(){
                    return 0;
                }
                function checkSchedValidity(){
                    var total_coms = computeBoxes();
                    var boxes = document.getElementsByName('orderqty[]');

                    var max_cap = parseInt($('option:selected', $('.truck_dropdown')).attr('truck_total_cap'));
                    var cur_cap = parseInt($('#truck_cur_cap').val());

                    var date = $(".delivery_date").val();

                    var sum = 0;


                    console.log(boxes.length);
                    for(i = 0; i<boxes.length;i++){
                        sum += parseInt(boxes[i].value);
                    }
                    cur_cap += sum;
                    if(date!=null){
                        if (cur_cap<=max_cap){
                            $('#schedSubmit').click();
                        }
                        else{
                            //$('#alert').click();
                            //alert("Delivering quantity exceeds the available space.");
                            $('#alert').css('display','block');
                        }
                    }else{
                        alert("please select a date")
                    }
                }
                $(document).ready(function() {

                    $('.order_dropdown').bind('change',function() {
                        var option_locs = $('option:selected', this).attr('locs').split(";");
                        var option_id = $('option:selected', this).attr('locs_ids').split(";");
                        var prod_ids = $('option:selected', this).attr('prod_ids').split(";");
                        var prod_qty = $('option:selected', this).attr('prod_qty').split(";");
                        var order_id = $('option:selected', this).attr('value');

                        $('.address_dropdown').find('option').remove();

                        for (i = 0; i < option_locs.length; i++) {
                            if(option_locs[i]!=""){
                                $('.address_dropdown').append('<option value="'+option_id[i]+'">'+option_locs[i]+'</option>');
                                if(i===0){
                                    $('#prev_address').html(option_locs[i]);
                                }
                            }
                        }

                        $('.prod_table').find('tr').remove();
                        for (x = 0; x < prod_ids.length; x++) {
                            if(prod_ids[x]!=""){
                                $('.prod_table').append('<tr style="color:black;">'+
                                    '<td><span class="label label-info">CLOD-'+order_id+'</span></td>'+
                                    '<td>PR-'+prod_ids[x]+'</td>'+
                                    '<td>'+prod_qty[x]+' Boxes</td>'+
                                    '<input type="hidden" name="ids[]" value="'+prod_ids[x]+'">'+
                                    '<td><input style="font-size:12px;" class="form-control" placeholder="qty" id="orderqty[]" name="orderqty[]" type="number" class="orderqty"></td>'+
                                    '<td><i style="font-size:20px; color:#E53935; " class="linea linea-aerrow removeproduct" data-icon="&#xe04a;">  </td>' +
                                    '</tr>');
                            }
                        }
                    });
                    $('.driver_dropdown').bind('change',function() {
                        var driver = $('option:selected', this).html();
                        $('#prev_driver').html(driver);

                    });

                    $('.truck_dropdown').bind('change',function() {
                        var max_cap = parseInt($('option:selected', this).attr('truck_total_cap'));

                        var curr_cap = 0;
                        var delivery_date = $('.delivery_date').val();

                        var avail_cap = max_cap - curr_cap;

                        $('#truck_total_cap').html(max_cap);
                        if(delivery_date != ""){
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            $.ajax({
                                url: "{{ url('/schedule/getCapacity') }}",
                                method: 'post',
                                data: {
                                    truckID: $('option:selected', this).val(),
                                    date: delivery_date,
                                    _token: '{{csrf_token()}}'
                                },
                                success: function(result){
                                    var total_cur = parseInt(result.total_curr_cap);
                                    var avail = max_cap - total_cur;

                                    if(total_cur === 0){
                                        $('#truck_cur_cap').val(0);
                                        $('#truck_cur_cap').html("no boxes loaded.");
                                        $('#truck_avail_cap').html("all space available.");

                                        $('#truck_cur_cap').css("color","green");
                                    }
                                    else if(max_cap===total_cur){

                                        $('#truck_cur_cap').val(result.total_curr_cap);
                                        $('#truck_cur_cap').html("fully loaded");
                                        $('#truck_avail_cap').html("all space taken");

                                        $('#truck_cur_cap').css("color","red");
                                    }else{
                                        $('#truck_cur_cap').val(result.total_curr_cap);
                                        $('#truck_cur_cap').html(total_cur);
                                        $('#truck_avail_cap').html(avail);
                                    }

                                    console.log(result.success);
                                    console.log(result.total_curr_cap);
                                    console.log(result.msg);
                                }});
                        }


                    });
                    $('.sched_conc').bind('change',function() {
                        var x = $('option:selected', this).attr('value');
                        if(x === "cancel"){
                            $('#date_conclude').css('display','none');
                        }
                        else{
                            $('#date_conclude').css('display','block');
                        }

                    });
                    $('.delivery_date').bind('change',function(e) {

                        var max_cap = parseInt($('option:selected', $('.truck_dropdown')).attr('truck_total_cap'));

                        e.preventDefault();
                        var truckID = parseInt($('option:selected', $('.truck_dropdown')).attr('value'));

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: "{{ url('/schedule/getCapacity') }}",
                            method: 'post',
                            data: {
                                truckID: truckID,
                                date: $(this).val(),
                                _token: '{{csrf_token()}}'
                            },
                            success: function(result){
                                var total_cur = parseInt(result.total_curr_cap);
                                var avail = max_cap - total_cur;

                                if(total_cur === 0){
                                    $('#truck_cur_cap').val(0);
                                    $('#truck_cur_cap').html("no boxes loaded.");
                                    $('#truck_avail_cap').html("all space available.");

                                    $('#truck_cur_cap').css("color","green");
                                }
                                else if(max_cap===total_cur){

                                    $('#truck_cur_cap').val(result.total_curr_cap);
                                    $('#truck_cur_cap').html("fully loaded");
                                    $('#truck_avail_cap').html("all space taken");

                                    $('#truck_cur_cap').css("color","red");
                                }else{
                                    $('#truck_cur_cap').val(result.total_curr_cap);
                                    $('#truck_cur_cap').html(total_cur);
                                    $('#truck_avail_cap').html(avail);
                                }

                                console.log(result.success);
                                console.log(result.total_curr_cap);
                                console.log(result.msg);
                            }});

                            $('#prev_delivery_date').html($(this).val());
                    });


                    $('.myTable').DataTable();
                    $(document).ready(function() {
                        var table = $('#example').DataTable({
                            "columnDefs": [{
                                "visible": false,
                                "targets": 2
                            }],
                            "order": [
                                [2, 'asc']
                            ],
                            "displayLength": 25,
                            "drawCallback": function(settings) {
                                var api = this.api();
                                var rows = api.rows({
                                    page: 'current'
                                }).nodes();
                                var last = null;
                                api.column(2, {
                                    page: 'current'
                                }).data().each(function(group, i) {
                                    if (last !== group) {
                                        $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                        last = group;
                                    }
                                });
                            }
                        });
                        // Order by the grouping
                        $('#example tbody').on('click', 'tr.group', function() {
                            var currentOrder = table.order()[0];
                            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                                table.order([2, 'desc']).draw();
                            } else {
                                table.order([2, 'asc']).draw();
                            }
                        });
                    });
                });
                $('#example23').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });
            </script>
            <!--Style Switcher -->
            <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
            <!-- Sweet-Alert  -->
            <script src="plugins/bower_components/sweetalert/sweetalert.min.js"></script>
            <script src="plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js"></script>

            <script type="text/javascript">
                $(document).on('click', '.ajaxmodal', function() {
                    $('.modal-title').text('Update Order Status');
                    // $('#defStatus').val($(this).data('order'));
                    // $('#orderID').attr('value',$(this).data('order'));
                    $('.statusModal').modal('show');
                    // alert('1');
                });

                $(document).on('click', '.productadd', function() {
                    $('#addproduct').append("<tr>" +
                        '<td> <select name="product[]" class="form-control product">@if(isset($products))@foreach ($products as $product)<option>{{$product->pd_name}}</option>@endforeach @endif </td>' +
                        '<td><select name="gram[]" class="form-control gram"><option>500g</option><option>250g</option></select></td><td><input name="orderqty[]" type="number" value="0" class="form-control orderqty"></td>' +
                        '<td><i class="fa fa-times removeproduct"></td>' +
                        '</tr>');
                });

                $(document).on('click', '.removeproduct', function() {
                    $(this).closest('tr').remove();
                });

                $('#addproductform').submit(function() {
                    var verify = confirm("Do you wish to proceed to add the following products?");
                    return verify;
                });

                $(document).on('click', '.conclude', function() {

                    $("#sc_id").val($(this).attr('scid'));
                    $('#date_conclude').css('display','block');
                });
                $(document).on('click', '.truckeditz', function() {

                    $("#tr_id").val($(this).attr('trid'));
                    //alert($("#tr_id").val());
                });
                $(document).on('click', '.drivereditz', function() {

                    $("#dr_id").val($(this).attr('drid'));
                    //alert($("#dr_id").val());
                });
                 $(document).on('click', '.removeorder', function() {
                    var verify = confirm("Do you wish to delete this account?");

                    if (verify) {
                        $(this).closest('.deleteOrder').submit();
                    }
                    return verify;

                });

                $(document).on('click', '.statusSubmit', function() {
                    var verify = confirm("Do you wish to edit this order?");
                    return verify;
                });

            </script>
</body>

</html>