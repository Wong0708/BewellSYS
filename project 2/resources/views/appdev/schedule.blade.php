
<?php use App\Http\Controllers\ScheduleController;?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="_token" content="{!! csrf_token() !!}">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/bewelllogo.ico">
      <title>Bewell</title>
      <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
      <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
      <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
      <link href="css/animate.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/allah.css" rel="stylesheet">
      <link href="css/colors/blue.css" id="theme" rel="stylesheet">
      <link href="plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
   </head>
   <body class="fix-sidebar">
      <div class="preloader">
         <div class="cssload-speeding-wheel"></div>
      </div>
      <div id="wrapper">
      <nav class="navbar navbar-default navbar-static-top m-b-0">
         <div class="navbar-header" style="background:#64B5F6;  border-radius: 2px; position:relative;">
            <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
            <div class="top-left-part" style="background-color:#BBDEFB; opacity:1;"><a class="logo" href="index.html"><b><img src="plugins/images/bewelllogos.png"  width="35px" alt="home" /></b><span class="hidden-xs"><img src="plugins/images/bewelllogol.png" width="110px" alt="home" /></span></a></div>
            <ul class="nav navbar-top-links navbar-left hidden-xs">
               <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
               <li>
                  <form role="search" class="app-search hidden-xs">
                     <input type="text" style="min-width:300px; background-color:#F5F5F5;" placeholder="Search System" class="form-control"> <a href=""><i class="fa fa-search"></i></a> 
                  </form>
               </li>
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">
               <li class="dropdown">
                  <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">
                     <i class="icon-bell"></i>
                     <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                  </a>
                  <ul class="dropdown-menu dropdown-tasks animated flipInX feeds">
                     <li>
                        <strong>Notifications</strong>
                     </li>
                     <li>
                        <div class="bg-info"><i class="fa fa-bell-o text-white"></i></div>
                        Added 5 New Client Orders. <span class="text-muted">Just Now</span>
                     </li>
                     <li>
                        <div class="bg-danger"><i class="ti-user text-white"></i></div>
                        New user registered.<span class="text-muted">16 July</span>
                     </li>
                     <li>
                        <a class="text-center" href="#"> <strong>See All Notifications</strong> <i class="fa fa-angle-right"></i> </a>
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
                     </span> 
                  </div>
               </li>
               <span style=" position:absolute; bottom: 50px; width:100%; text-align: center; font-size:14px;">Powered by</span>
               <span style=" position:absolute; bottom: 30px; width:100%; text-align: center; font-size:12px;"><strong>AIMinds</strong></span>
               <span style=" position:absolute; bottom: 10px; width:100%; text-align: center; font-size:10px;">BCOFSYS - Version 1.0.1</span>
               <li><a href={{route('dashboard.index')}} class="waves-effect"><i class="linea-icon linea-aerrow fa-fw" data-icon="&#xe078;"></i> <span class="hide-menu">Dashboard</span></a></li>
               <li>
                  <a href="javascript:void(0)" class="waves-effect"><i data-icon="x" class="linea-icon linea-ecommerce fa-fw"></i> <span class="hide-menu">Order<span class="fa arrow"></span></span></a>
                  <ul class="nav nav-second-level">
                     <li> <a href={{route('clientorder.index')}}>Client</a> </li>
                     <li> <a href={{route('manufacturerorder.index')}}>Manufacturer</a> </li>
                     <li> <a href={{route('supplierorder.index')}}>Supplier</a> </li>
                  </ul>
               </li>
               <li style="background-color: #E9F0FD;"> <a href={{route('schedule.index')}} class="waves-effect"><i style="color:#4c87ed;" data-icon="r" class="linea-icon linea-basic fa-fw"></i> <span style="color:#4c87ed;" class="hide-menu">Schedule</span></a>
               </li>
               <li>
                  <a href="javascript:void(0)" class="waves-effect"><i style="color:#5F6367;" data-icon="f" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Inventory<span class="fa arrow"></span></span></a>
                  <ul class="nav nav-second-level">
                     <li> <a href={{route('product.index')}}>Product</a> </li>
                     <li> <a href={{route('supply.index')}}>Raw Material</a> </li>
                  </ul>
               </li>
               @if(Auth::user()->user_id==1)
               <li>
                  <a href="javascript:void(0)" class="waves-effect"><i style="color:#5F6367;" data-icon="R" class="linea-icon linea-ecommerce fa-fw"></i> <span class="hide-menu">Report<span class="fa arrow"></span></span></a>
                  <ul class="nav nav-second-level">
                     <li> <a href={{route('salesreport.index')}}>Sales</a> </li>
                     <li> <a href={{route('deliveryreport.index')}}>Delivery</a> </li>
                     <li> <a href={{route('manufacturerreport.index')}}>Manufacturer</a> </li>
                     <li> <a href={{route('supplierreport.index')}}>Supplier</a> </li>
                  </ul>
               </li>
               <li style="border-bottom:1px solid #E8EAED;">
                  <a href="javascript:void(0)" class="waves-effect"><i style="color:#5F6367;" data-icon="V" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Account<span class="fa arrow"></span></span></a>
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
                  <h4 class="page-title" style="color:black;">Schedule</h4>
               </div>
               <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                  <ol class="breadcrumb">
                     <li><a href="#">Dashboard</a></li>
                     <li class="active" style="color:#4c87ed;">Schedule</li>
                  </ol>
               </div>
            </div>



            <!--tite
            
            manufacturer modal
            
            -->
            <div class="modal fade" id="manufacturerOrderModal" tabindex="-1" role="dialog" aria-labelledby="addManuOrder">
                    <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="exampleModalLabel1" style="color:black; font-family:Helvetica,Arial,sans-serif;">Add Manufacturer Order Schedule</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
        
                                    <!--client order #-->
                                    <label for="client" class="control-label" style="color:black; font-family:Helvetica,Arial,sans-serif;"><b>Order #:</b></label>
                                    <br>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Choose one order among the list to add a schedule. <b style="color:#E53935;">*Required</b></span>
                                    <select name="clientOrderList2" class="form-control" id="clientOrderList2" style="margin-bottom:10px;">
                                        <option selected disabled>Choose a manufacturer order</option>
                                        @if(isset($manufacturer_orders))
                                            @foreach($manufacturer_orders as $order)
                                                <option data-clientid={{$order->manufacturerID}} data-orderid={{$order->id}} data-name=@if(isset($order->fromManufacturer)){{$order->fromManufacturer->mn_name}} @endif value="">{{$order->id}} : @if(isset($order->fromManufacturer)){{$order->fromManufacturer->mn_name}}@endif</option>
                                            @endforeach
                                        @endif
                                    </select>
        
                                    <!--client address -->
                                    <label for="clientLocation2" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Address:</b></label>
                                    <br>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Choose one delivery address for the schedule. <b style="color:#E53935;">*Required</b></span>
        
                                    <select name="clientLocation2" class="form-control" id="clientLocation2" style="margin-bottom:10px;">
                                        <option selected disabled>N/A</option>
                                    </select>
        
                                    <!--contact person -->
                                    <label for="contactPerson2" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Contact Person:</b></label>
                                    <br>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Choose a contact person for the delivery. <b style="color:#E53935;">*Required</b></span>
                                    <select name="contactPerson2" class="form-control manuf_address_dropdown" id="contactPerson2" style="margin-bottom:10px;">
                                        <option selected disabled>N/A</option>
                                    </select>
        
                                    <!--delivery date -->
                                    <label for="deliveryDate2" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Delivery Date:</b></label>
                                    <br>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Choose a date to schedule a delivery. <b style="color:#E53935;">*Required</b></span>
                                    <input id="deliveryDate2" type="date" class="form-control" name="deliveryDate2" value="">
        
                                    <!--truck plate # -->
                                    <label for="truckPlateNumber2" class="control-label" style="margin-top:10px; color:black; margin-top:20px; font-family:Helvetica,Arial,sans-serif;"><b>Truck Plate Number:</b></label>
                                    <br>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the car's plate number. Ex: NSA-2134. <b style="color:#E53935;">*Required</b></span>
                                    <select name="truckPlateNumber2" class="form-control truck_dropdown" id="truckPlateNumber2" style="margin-bottom:10px;">
                                        @if(isset($trucks))
                                            <option selected disabled>Choose a truck</option>
                                            @foreach($trucks as $truck)
                                                <option data-id={{$truck->id}}>{{$truck->plate_num}} | {{$truck->car_model}}</option>
                                            @endforeach
                                        @endif
                                    </select>
        
                                    <!--driver # -->
                                    <label for="truckDriver2" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Driver:</b></label>
                                    <br>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Choose a driver to deliver the order. <b style="color:#E53935;">*Required</b></span>
                                    <select id="truckDriver2" name="truckDriver2" class="form-control driver_dropdown" style="margin-bottom:10px;">
                                        <option selected disabled>Choose a driver</option>
                                        @if(isset($drivers))
                                            @foreach($drivers as $driver)
                                                <option data-id={{$driver->id}}>{{$driver->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
        
                                    <!--truck delivery order # -->
                                    <div class="white-box" style="background-color:#F5F5F5; margin-top:10px;">
                                        <h4 style="text-align:center; font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Truck Delivery Order/s</b></h4>
                                        <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: This section assign orders to the desired truck. <b style="color:#E53935;">*Required</b></span>
                                        <br>
                                        <div class="row">
                                            <center>
                                                <div class="col-md-4">
                                                <h4 style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Total Capacity:</b></h4>
                                                </div>
                                                <div class="col-md-4">
                                                <h4  style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Current Capacity: </b></h4>
                                                </div>
                                                <div class="col-md-4">
                                                <h4  style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Available Capacity: </b></h4>
                                                </div>
                                            </center>
                                        </div>
                                        <div class="row">
                                            <center>
                                                <div class="col-md-4">
                                                    <p id="truckTotalCapacity2">N/A</p>
                                                </div>
                                                <div class="col-md-4">
                                                <b>
                                                    <p id="truckCurrentCapacity2">N/A - select a date</p>
                                                </b>
                                                </div>
                                                <div class="col-md-4">
                                                    <p id="truckAvailableCapacity2">N/A</p>
                                                </div>
                                            </center>
                                        </div>
        
                                        <!--table for truck delivery # -->
                                        
                                        <div class="table-responsive" style="margin-top:10px;">
                                            <table class="table color-bordered-table info-bordered-table" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); font-family:Helvetica,Arial,sans-serif;">
                                                <thead>
                                                <tr style="font-size:12px; font-weight:700; ">
                                                    <th>Order #</th>
                                                    <th>Code</th>
                                                    <th>Remaining Qty (Boxes)</th>
                                                    <th>Deliver Qty (Boxes)</th>
                                                    <th><i class="fa fa-gear"></i></th>
                                                </tr>
                                                </thead>
                                                <tbody id="clientProductList2" class="manuf_prod_table">
                                                </tbody>
                                            </table>
                                        </div>
                                        <hr>
                                        <center>
                                            <h2  style="font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Truck Delivery Schedule Summary</b></h2>
                                        </center>
                                        <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: This is the referenced delivery list for the truck delivery.</span>
                                        <table class="table full-color-table full-info-table hover-table" data-height="250" data-mobile-responsive="true" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); margin-top:10px; font-family:Helvetica,Arial,sans-serif;">
                                            <thead>
                                                <tr style="font-size:12px; font-weight:700;">
                                                <th>Schedule #</th>
                                                <th>Date</th>
                                                <th>Driver</th>
                                                <th>Address</th>
                                                <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody id="scheduleSummaryList2"></tbody>
                                        </table>
                                        <h2>
                                            <center><span class="control label" id="alert_client" style="display: none; color:red">Delivering quantity exceeds the available space</span></center>
                                        </h2>
                                    </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button id="submitOrderSchedule2" class="btn btn-danger btn-md btn-block text-uppercase waves-effect waves-light" style="background-color: #4c87ed; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
            </div>
            

            <!--tite
            
            client modal
            
            -->
            <div class="modal fade" id="clientOrderModal" tabindex="-1" role="dialog" aria-labelledby="addManuOrder">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="exampleModalLabel1" style="color:black; font-family:Helvetica,Arial,sans-serif;">Add Client Order Schedule</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">

                            <!--client order #-->
                            <label for="client" class="control-label" style="color:black; font-family:Helvetica,Arial,sans-serif;"><b>Order #:</b></label>
                            <br>
                            <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Choose one order among the list to add a schedule. <b style="color:#E53935;">*Required</b></span>
                            <select name="clientOrderList" class="form-control" id="clientOrderList" style="margin-bottom:10px;">
                                <option selected disabled>Choose a client order</option>
                                @if(isset($client_orders))
                                    @foreach($client_orders as $order)
                                        <option data-clientid={{$order->clientID}} data-orderid={{$order->id}} data-name=@if(isset($order->fromClient)){{$order->fromClient->cl_name}} @endif value="">{{$order->id}} : @if(isset($order->fromClient)){{$order->fromClient->cl_name}}@endif</option>
                                    @endforeach
                                @endif
                            </select>

                            <!--client address -->
                            <label for="clientLocation" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Address:</b></label>
                            <br>
                            <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Choose one delivery address for the schedule. <b style="color:#E53935;">*Required</b></span>

                            <select name="clientLocation" class="form-control" id="clientLocation" style="margin-bottom:10px;">
                                <option selected disabled>N/A</option>
                            </select>

                            <!--contact person -->
                            <label for="contactPerson" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Contact Person:</b></label>
                            <br>
                            <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Choose a contact person for the delivery. <b style="color:#E53935;">*Required</b></span>
                            <select name="contactPerson" class="form-control manuf_address_dropdown" id="contactPerson" style="margin-bottom:10px;">
                                <option selected disabled>N/A</option>
                            </select>

                            <!--delivery date -->
                            <label for="deliveryDate" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Delivery Date:</b></label>
                            <br>
                            <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Choose a date to schedule a delivery. <b style="color:#E53935;">*Required</b></span>
                            <input id="deliveryDate" type="date" class="form-control" name="deliveryDate" value="">

                            <!--truck plate # -->
                            <label for="truckPlateNumber" class="control-label" style="margin-top:10px; color:black; margin-top:20px; font-family:Helvetica,Arial,sans-serif;"><b>Truck Plate Number:</b></label>
                            <br>
                            <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the car's plate number. Ex: NSA-2134. <b style="color:#E53935;">*Required</b></span>
                            <select name="truckPlateNumber" class="form-control truck_dropdown" id="truckPlateNumber" style="margin-bottom:10px;">
                                @if(isset($trucks))
                                    <option selected disabled>Choose a truck</option>
                                    @foreach($trucks as $truck)
                                        <option data-id={{$truck->id}}>{{$truck->plate_num}} | {{$truck->car_model}}</option>
                                    @endforeach
                                @endif
                            </select>

                            <!--driver # -->
                            <label for="truckDriver" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Driver:</b></label>
                            <br>
                            <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Choose a driver to deliver the order. <b style="color:#E53935;">*Required</b></span>
                            <select id="truckDriver" name="truckDriver" class="form-control driver_dropdown" style="margin-bottom:10px;">
                                <option selected disabled>Choose a driver</option>
                                @if(isset($drivers))
                                    @foreach($drivers as $driver)
                                        <option data-id={{$driver->id}}>{{$driver->name}}</option>
                                    @endforeach
                                @endif
                            </select>

                            <!--truck delivery order # -->
                            <div class="white-box" style="background-color:#F5F5F5; margin-top:10px;">
                                <h4 style="text-align:center; font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Truck Delivery Order/s</b></h4>
                                <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: This section assign orders to the desired truck. <b style="color:#E53935;">*Required</b></span>
                                <br>
                                <div class="row">
                                    <center>
                                        <div class="col-md-4">
                                        <h4 style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Total Capacity:</b></h4>
                                        </div>
                                        <div class="col-md-4">
                                        <h4  style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Current Capacity: </b></h4>
                                        </div>
                                        <div class="col-md-4">
                                        <h4  style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Available Capacity: </b></h4>
                                        </div>
                                    </center>
                                </div>
                                <div class="row">
                                    <center>
                                        <div class="col-md-4">
                                            <p id="truckTotalCapacity">N/A</p>
                                        </div>
                                        <div class="col-md-4">
                                        <b>
                                            <p id="truckCurrentCapacity">N/A - select a date</p>
                                        </b>
                                        </div>
                                        <div class="col-md-4">
                                            <p id="truckAvailableCapacity">N/A</p>
                                        </div>
                                    </center>
                                </div>

                                <!--table for truck delivery # -->
                                
                                <div class="table-responsive" style="margin-top:10px;">
                                    <table class="table color-bordered-table info-bordered-table" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); font-family:Helvetica,Arial,sans-serif;">
                                        <thead>
                                        <tr style="font-size:12px; font-weight:700; ">
                                            <th>Order #</th>
                                            <th>Code</th>
                                            <th>Remaining Qty (Boxes)</th>
                                            <th>Deliver Qty (Boxes)</th>
                                            <th><i class="fa fa-gear"></i></th>
                                        </tr>
                                        </thead>
                                        <tbody id="clientProductList" class="manuf_prod_table">
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <center>
                                    <h2  style="font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Truck Delivery Schedule Summary</b></h2>
                                </center>
                                <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: This is the referenced delivery list for the truck delivery.</span>
                                <table class="table full-color-table full-info-table hover-table" data-height="250" data-mobile-responsive="true" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); margin-top:10px; font-family:Helvetica,Arial,sans-serif;">
                                    <thead>
                                        <tr style="font-size:12px; font-weight:700;">
                                        <th>Schedule #</th>
                                        <th>Date</th>
                                        <th>Driver</th>
                                        <th>Address</th>
                                        <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody id="scheduleSummaryList"></tbody>
                                </table>
                                <h2>
                                    <center><span class="control label" id="alert_client" style="display: none; color:red">Delivering quantity exceeds the available space</span></center>
                                </h2>
                            </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button id="submitOrderSchedule" class="btn btn-danger btn-md btn-block text-uppercase waves-effect waves-light" style="background-color: #4c87ed; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--KIM-->




            <!--truck edit modal -->
            <div  class="modal fade" id="editTruckModal" role="dialog">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"></button>
                        <center >
                           <b>
                              <h2 class="modal-title" style="display: inline;">Edit Truck Status</h2>
                           </b>
                        </center>
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

            <!--conclude sched modal 
               tite
               append
               --> 
               
            <div class="modal fade" id="concludeScheduleModal" role="dialog">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"></button>
                        <center >
                           <b>
                              <h2 class="modal-title" style="display: inline;">Conclude Schedule
                                 <i class="fa fa-calendar"></i>
                              </h2>
                           </b>
                        </center>
                     </div>
                     <div class="modal-body">
                        <div class="form-group">
                           <input type="hidden" name="sc_type" id="sc_type" value="">
                           <label for="truckStatus">Conclusion</label>
                           <select id="conclusionList" name="schedule_conclusion" style="font-family: 'FontAwesome', 'Open Sans';font-size: 21px;" class="form-control sched_conc" id="sched_conc">
                              <option value="fulfill" style="">&#xf274; Fulfill Delivery</option>
                              <option value="cancel">&#xf273; Cancel Delivery</option>
                           </select>
                           <label for="truckStatus">Remarks:</label>
                           <textarea id="scheduleRemarks" class="form-control" class="form-control" placeholder="Write about your transaction details" rows="5" name="remarks"></textarea>
                        </div>
                     </div>
                     <input id="sc_id" type="hidden" name="id">
                     <div class="modal-footer">
                        <button id="concludeButton"class="btn btn-danger btn-md btn-block text-uppercase waves-effect waves-light" style="background-color: #4c87ed; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);" type="submit">Submit</button>
                     </div>
                  </div>
               </div>
            </div>



            <div class="modal fade" id="concludeScheduleModal2" role="dialog">
                    <div class="modal-dialog">
                       <div class="modal-content">
                          <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal"></button>
                             <center >
                                <b>
                                   <h2 class="modal-title" style="display: inline;">Conclude Schedule
                                      <i class="fa fa-calendar"></i>
                                   </h2>
                                </b>
                             </center>
                          </div>
                          <div class="modal-body">
                             <div class="form-group">
                                <input type="hidden" name="sc_type" id="sc_type" value="">
                                <label for="truckStatus">Conclusion</label>
                                <select id="conclusionList2" name="schedule_conclusion" style="font-family: 'FontAwesome', 'Open Sans';font-size: 21px;" class="form-control sched_conc" id="sched_conc">
                                   <option value="fulfill" style="">&#xf274; Fulfill Delivery</option>
                                   <option value="cancel">&#xf273; Cancel Delivery</option>
                                </select>
                                <label for="truckStatus">Remarks:</label>
                                <textarea id="scheduleRemarks2" class="form-control" class="form-control" placeholder="Write about your transaction details" rows="5" name="remarks"></textarea>
                             </div>
                          </div>
                          <input id="sc_id" type="hidden" name="id">
                          <div class="modal-footer">
                             <button id="concludeButton2"class="btn btn-danger btn-md btn-block text-uppercase waves-effect waves-light" style="background-color: #4c87ed; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);" type="submit">Submit</button>
                          </div>
                       </div>
                    </div>
                 </div>

            <div class="modal fade" id="cancelledScheduleModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"></button>
                            <center >
                                <h2 class="modal-title" style="display: inline;">Re-Schedule Date
                                </h2>
                            </center>
                        </div>
                        <div class="modal-body">
                            <label for="date">Pick a date:</label>
                            <input id="rescheddate" type="date" class="form-control"/>
                        </div>
                        <input id="sc_id" type="hidden" name="id">
                        <div class="modal-footer">
                            <button id="reschedbutton"class="btn btn-danger btn-md btn-block text-uppercase waves-effect waves-light" style="background-color: #4c87ed; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);" type="submit">Submit</button>
                        </div>
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
                     </div>
                     <div class="modal-footer">
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
                           <input style="margin-top:10px;" class="form-control" name="max_box" type="number" min="0" max="999999999999999"/>
                           <label for="client" class="control-label" style="margin-top:10px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Availability:</b></label>
                           <br>
                           <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the weekly availability of the driver. Ex: M-W-F. <b style="color:#E53935;">*Required</b></span>
                           <input style="margin-top:10px;" class="form-control" name="availability" type="text"/>
                        </div>
                     </div>
                     <div class="modal-footer">
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
               <center>
                  <div id="snackbar">{{Session::get('success')}}</div>
               </center>
               @endif
               <div class="col-sm-12">
                  <div class="white-box" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                     <h3 class="box-title m-b-0" style="color:black;">LIST OF ALL SCHEDULES</h3>
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
                                    <tbody id="scheduleList">
                                            @if(isset($client_schedules))
                                                @foreach($client_schedules as $schedule)
                                                    <tr style="color:black;">
                                                        <th><a href="sched_det/{{$schedule->id}}">{{$schedule->id}}</a></th>
                                                        <th>{{$schedule->orderID}}</th>
                                                        <th>@if(isset($schedule->fromTruck)){{$schedule->fromTruck->plate_num}}@else N/A @endif</th>
                                                        <th>@if(isset($schedule->fromDriver)){{$schedule->fromDriver->name}}@else N/A @endif</th>
                                                        <th>@if(isset($schedule->fromLocation)){{$schedule->fromLocation->loc_address}}@else N/A @endif</th>
                                                        <th>{{$schedule->scd_date}}</th>
                                                        <th>@if(!empty($schedule->dateDelivered)){{$schedule->dateDelivered}}@else N/A @endif</th>
                                                        <th>{{$schedule->scd_status}}</th>
                                                        <th>@if($schedule->scd_status=='Scheduled')<i data-id={{$schedule->id}} style="color:#4c87ed;" class="fa fa-edit editSchedule"/>@elseif($schedule->scd_status=='Cancelled')<i data-id={{$schedule->id}} style="color:#4c87ed;" class="fa fa-reply-all editCancelled"/>  @elseif($schedule->scd_status=='Delivered') <a href="sched_det/{{$schedule->id}}"><i data-id={{$schedule->id}} style="color:#4c87ed;" class="fa fa-calendar"/></a>@endif</th>
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
                              data-toggle="modal" data-target="#manufacturerOrderModal"
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
                                    <tbody id="scheduleList">
                                        @if(isset($manufacturer_schedules))
                                            @foreach($manufacturer_schedules as $schedule)
                                                <tr style="color:black;">
                                                    <th><a href="sched_det/{{$schedule->id}}">{{$schedule->id}}</a></th>
                                                    <th>{{$schedule->orderID}}</th>
                                                    <th>{{$schedule->fromTruck->plate_num}}</th>
                                                    <th>{{$schedule->fromDriver->name}}</th>
                                                    <th>{{$schedule->fromLocation->loc_address}}</th>
                                                    <th>{{$schedule->scd_date}}</th>
                                                    <th>@if(!empty($schedule->dateDelivered)){{$schedule->dateDelivered}}@else N/A @endif</th>
                                                    <th>{{$schedule->scd_status}}</th>
                                                    <th>@if($schedule->scd_status=='Scheduled')<i data-id={{$schedule->id}} style="color:#4c87ed;" class="fa fa-edit editSchedule2"/>@elseif($schedule->scd_status=='Cancelled')<i data-id={{$schedule->id}} style="color:#4c87ed;" class="fa fa-reply-all editCancelled"/>  @elseif($schedule->scd_status=='Delivered') <a href="sched_det/{{$schedule->id}}"><i data-id={{$schedule->id}} style="color:#4c87ed;" class="fa fa-calendar"/></a>@endif</th>
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
               {{-- <a class="mytooltip" href="javascript:void(0)"><i class="fa fa-question-circle"></i><span class="tooltip-content3">Click this button to place a new company driver! </span> </a> </div> </i>Add Order <span class="tooltip-content3">You can easily navigate the city by car.</span> </a> --}}
               <p class="text-muted m-b-30"></p>
               <div class="table-responsive">
               <table class="table table-striped myTable">
               <thead>
               <tr style="color:black;">
               <th>Driver #</th>
               <th>License #</th>
               <th>Name</th>
               <th>Contact #</th>
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
            <footer class="footer text-center"> 2018 &copy; Bewell Nutraceutical Corporation</footer>
         </div>
      </div>
      <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
      <script src="bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
      <script src="js/jquery.slimscroll.js"></script>
      <script src="js/waves.js"></script>
      <script src="js/custom.min.js"></script>
      <script src="js/mask.js"></script>
      <script src="../plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
      <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
      <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

      <!--start jet-->

    <script type="text/javascript">
        $(document).on('click', '#submitOrderSchedule', function(e) {
            var verify = confirm("Do you want to submit this schedule?");
            if(verify==true){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                })

                e.preventDefault(); 
                
                var orders=[];
                for(var i=0; i<$('#clientProductList').find('tr').length;i++){
                    orders.push([$('#inputNum'+i).val(),$('#inputNum'+i).data('productid')]);
                }


                var formData = {//pota
                    orderID: $('#clientOrderList').find('option:selected').data('orderid'),
                    clientID: $('#clientOrderList').find('option:selected').data('clientid'),
                    locationID: $('#clientLocation').find('option:selected').data('id'),
                    contactPerson: $('#contactPerson').find('option:selected').val(),
                    deliveryDate: $('#deliveryDate').val(),
                    truckID: $('#truckPlateNumber').find('option:selected').data('id'),
                    driverID: $('#truckDriver').find('option:selected').data('id'),
                    orders: orders,

                }

                $.ajax({
                    type: "POST",
                    url: 'liveAddScheduleUpdate',
                    data: formData,
                    success: function(data){
                        console.log(data);
                        $('#clientOrderModal').modal('hide');
                        location.reload();
                    },   
                    error: function (data) {
                        console.log('Data Error:', data);
                    }
                });
                
            }
            return false;
        });
    </script>

    <script type="text/javascript">
        $(document).on('click', '.removeAddOrder', function() {
            var verify = confirm("Do you want to delete this order?");
            if(verify==true){
                $(this).closest('tr').remove();
                
            }
            return false;
        });
    </script>

    <script type="text/javascript">
        $(document).on('click', '.editSchedule', function() {
            $('#concludeScheduleModal').modal('show')
            $('#concludeButton').attr('data-id',$(this).data('id'));
        });
        $(document).on('click', '.editSchedule2', function() {
            $('#concludeScheduleModal2').modal('show')
            $('#concludeButton2').attr('data-id',$(this).data('id'));
            $('#concludeButton2').attr('data-id',$(this).data('id'));
        });

        $(document).on('click', '.editCancelled', function() {
            $('#cancelledScheduleModal').modal('show')
            $('#reschedbutton').attr('data-id',$(this).data('id'));
        });
        $(document).on('click', '#reschedbutton', function(e) {
            var verify = confirm("Do you want to update the order?");
            if(verify==true){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                })

                e.preventDefault(); 
                var formData = {
                    deliveryDate: $('#rescheddate').val(),
                    scheduleID: $(this).data('id'),
                }//bobomojet

                $.ajax({
                    type: "POST",
                    url: 'liveCancelledScheduleUpdate',
                    data: formData,
                    success: function(data){
                        console.log(data);
                        $('#cancelledScheduleModal').modal('hide');
                        location.reload();
                    },   
                    error: function (data) {
                        console.log('Data Error:', data);
                    }
                });
            }
            return false;
        });

        $(document).on('click', '#concludeButton', function(e) {
         
            var verify = confirm("Do you want to update the order?");
            if(verify==true){
                if($('#conclusionList').val()=='fulfill'){
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    })

                    e.preventDefault(); 
                    var formData = {
                        scheduleID: $(this).data('id'),
                        remarks:$('#scheduleRemarks').text(),
                    }//tangina

                    $.ajax({
                        type: "POST",
                        url: 'liveFulfillDeliveryUpdate',
                        data: formData,
                        success: function(data){
                            console.log(data);
                             $('#concludeScheduleModal').modal('hide')
                            location.reload();

                        },   
                        error: function (data) {
                            console.log('Data Error:', data);
                        }
                    });
                }else if($('#conclusionList').val()=='cancel'){
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    })

                    e.preventDefault(); 
                    var formData = {
                        scheduleID: $(this).data('id'),
                        remarks:$('#scheduleRemarks').text(),
                    }

                    $.ajax({
                        type: "POST",
                        url: 'liveCancelDeliveryUpdate',
                        data: formData,
                        success: function(data){
                            console.log(data);
                            $('#concludeScheduleModal').modal('hide')
                            location.reload();

                        },   
                        error: function (data) {
                            console.log('Data Error:', data);
                        }
                    });
                }
            }
            return false;
        });

         $(document).on('click', '#concludeButton2', function(e) {
         
         var verify = confirm("Do you want to update the order?");
         if(verify==true){
             if($('#conclusionList2').val()=='fulfill'){
                 $.ajaxSetup({
                     headers: {
                         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                     }
                 })

                 e.preventDefault(); 
                 var formData = {
                     scheduleID: $(this).data('id'),
                     remarks:$('#scheduleRemarks2').text(),
                 }

                 $.ajax({
                     type: "POST",
                     url: 'liveFulfillDeliveryUpdate2',
                     data: formData,
                     success: function(data){
                         console.log(data);
                          $('#concludeScheduleModal2').modal('hide')
                         location.reload();

                     },   
                     error: function (data) {
                         console.log('Data Error:', data);
                     }
                 });
             }else if($('#conclusionList2').val()=='cancel'){
                 $.ajaxSetup({
                     headers: {
                         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                     }
                 })

                 e.preventDefault(); 
                 var formData = {
                     scheduleID: $(this).data('id'),
                     remarks:$('#scheduleRemarks2').text(),
                 }

                 $.ajax({
                     type: "POST",
                     url: 'liveCancelDeliveryUpdate',
                     data: formData,
                     success: function(data){
                         console.log(data);
                         $('#concludeScheduleModal2').modal('hide')
                         location.reload();

                     },   
                     error: function (data) {
                         console.log('Data Error:', data);
                     }
                 });
             }
         }
         return false;
     });
        
    </script>

      <script type="text/javascript">
        $(document).on('change', '#truckPlateNumber', function (e) {
            if($('#deliveryDate').val()!=null && $('#truckPlateNumber').val()!=null){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                })

                e.preventDefault(); 
                var formData = {
                    truckPlateNumber: $('#truckPlateNumber').val(),
                    deliveryDate: $('#deliveryDate').val(),
                }

                $.ajax({
                    type: "POST",
                    url: 'liveTruckCapacityUpdate',
                    data: formData,
                    success: function(data){
                        console.log(data);
                        $('#truckTotalCapacity').html(data.total);
                        $('#truckCurrentCapacity').html('<b style="color:green;">'+data.current+'</b>');
                        $('#truckAvailableCapacity').html(data.available);
                    },   
                    error: function (data) {
                        console.log('Data Error:', data);
                    }
                });
            }
        });

        $(document).on('change', '#deliveryDate', function (e) {
            if($('#truckPlateNumber').val()!=null && $('#deliveryDate').val()!=null){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                })

                e.preventDefault(); 

                var formData = {
                    truckPlateNumber: $('#truckPlateNumber').val(),
                    deliveryDate: $('#deliveryDate').val(),
                }//tite

                $.ajax({
                    type: "POST",
                    url: 'liveTruckCapacityUpdate',
                    data: formData,
                    success: function(data){
                        console.log(data);
                        $('#truckTotalCapacity').html(data.total);
                        $('#truckCurrentCapacity').html('<b style="color:green;">'+data.current+'</b>');
                        $('#truckAvailableCapacity').html(data.available);
                    },   
                    error: function (data) {
                        console.log('Data Error:', data);
                    }
                });
            }

            //SECTION HERE TRUCK DELIVERY SUMMARY

            if($('#clientLocation').val()!=null){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                })

                e.preventDefault(); 

                var formData = {
                    deliveryDate: $('#deliveryDate').val(),
                    locationID: $('#clientLocation').find('option:selected').data('id'),
                }//tite

                $.ajax({
                    type: "POST",
                    url: 'liveTruckScheduleSummary',
                    data: formData,
                    success: function(data){
                        console.log(data);
                        for(var i=0;i<data.schedules.length;i++){//hello
                            $('#scheduleSummaryList').append(
                                '<tr><td id="orderNum'+i+'">'+(i+1)+'</td><td id="scheduleDate'+i+'">'+data.schedules[i][0]+'</td><td id="driver'+i+'"><span class="label label-success">'+data.schedules[i][1]+'</span></td>'+
                                '<td id="location'+i+'">'+data.schedules[i][2]+'</td><td id="status'+i+'"><span class="label label-success">'+data.schedules[i][3]+'</span></td></tr>');
                        }
                    },   
                    error: function (data) {
                        console.log('Data Error:', data);
                    }
                });
            }
        });
      </script>

      <script type="text/javascript">
         $(document).on('change', '#clientOrderList', function (e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            })

            e.preventDefault(); 

            var formData = {
                clientName:$(this).find('option:selected').data('name'),
                clientID:$(this).find('option:selected').data('clientid'),
                orderID:$(this).find('option:selected').data('orderid'),
            }
            
            var tdEdit = '#clientLocation';
            var tdEdit2 = '#contactPerson';

            $.ajax({
                type: "POST",
                url: 'liveClientAddressUpdate',
                data: formData,
                success: function(data){
                    if(data.status ==  1){
                        console.log(data);
                        $(tdEdit).find('option').remove();
                        $(tdEdit2).find('option').remove();
                        var dataAppend = '<option selected disabled>Choose a client location</option>';
                        var dataAppend2 = '<option selected disabled>Choose a contact person</option>';;
                        for (var i = 0; i < data.clientLocation.length ; i++){
                            dataAppend = dataAppend+'<option data-id="'+data.clientLocation[i].id+'">'+data.clientLocation[i].loc_address+'</option>';
                            dataAppend2 = dataAppend2+'<option data-id="'+data.clientLocation[i].id+'">'+data.clientLocation[i].loc_contactperson+'</option>';
                        }
                        $('#clientLocation').append(dataAppend);
                        $('#contactPerson').append(dataAppend2);
                        $('#deliveryDate').val(data.orderDeadline);//added this line by: PrivateAirJET

                    }else{
                        $(tdEdit).find('option').remove();
                        $(tdEdit2).find('option').remove();
                        var dataAppend = '<option selected disabled>N/A</option>';
                        $('#clientLocation').append(dataAppend);
                        $('#contactPerson').append(dataAppend);
                    }
                    
                    //SECTION FOR CLIENT ORDERS

                    for(var i =0;i<data.clientorders.length;i++){
                        $('#clientProductList').append(
                            '<tr><td id="orderNum'+i+'">'+(i+1)+'</td><td id="productCode'+i+'">'+data.clientorders[i][2]+'</td><td id="remaining'+i+'">'+data.clientorders[i][3]+'</td><td id="input'+i+'"><input data-productid="'+data.clientorders[i][4]+'" id="inputNum'+i+'" max="'+data.clientorders[i][3]+'" value="0" type="number" min="1" style="font-size:12px;" class="form-control" placeholder=""></td>'+
                            '<td><i style="font-size:20px; color:#E53935; " class="linea linea-aerrow removeAddOrder" data-icon="&#xe04a;"></td></tr>');
                    }
                },   
                error: function (data) {
                    console.log('Data Error:', data);
                }
            });
        });
        
      </script>


      <!--end jet-->



      <script>
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
             $('#example tbody').on('click', 'tr.group', function() {
                 var currentOrder = table.order()[0];
                 if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                     table.order([2, 'desc']).draw();
                 } else {
                     table.order([2, 'asc']).draw();
                 }
             });
         });
      </script>
      <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
      <script src="plugins/bower_components/sweetalert/sweetalert.min.js"></script>
      <script src="plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js"></script>
      </script>
      

      <script type="text/javascript">
        $(document).on('change', '#clientOrderList2', function (e) {
           $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
               }
           })

           e.preventDefault(); 

           var formData = {
               clientName:$(this).find('option:selected').data('name'),
               clientID:$(this).find('option:selected').data('clientid'),
               orderID:$(this).find('option:selected').data('orderid'),
           }
           
           var tdEdit = '#clientLocation2';
           var tdEdit2 = '#contactPerson2';

           $.ajax({
               type: "POST",
               url: 'liveClientAddress2Update',
               data: formData,
               success: function(data){
                       console.log(data);
                       $(tdEdit).find('option').remove();
                       $(tdEdit2).find('option').remove();
                       var dataAppend = '<option selected disabled>Choose a client location</option>';
                       var dataAppend2 = '<option selected disabled>Choose a contact person</option>';;
                        dataAppend = dataAppend+'<option data-id="'+data.clientLocation+'">'+data.clientLocation+'</option>';
                        dataAppend2 = dataAppend2+'<option data-id="'+data.clientLocation+'">'+data.contactPerson+'</option>';
                       $('#clientLocation2').append(dataAppend);
                       $('#contactPerson2').append(dataAppend2);
                   
                   //SECTION FOR CLIENT ORDERS
                   for(var i =0;i<data.clientorders.length;i++){
                       $('#clientProductList2').append(
                           '<tr><td id="xorderNum'+i+'">'+(i+1)+'</td><td id="xproductCode'+i+'">'+data.clientorders[i][2]+'</td><td id="xremaining'+i+'">'+data.clientorders[i][3]+'</td><td id="input'+i+'"><input data-productid="'+data.clientorders[i][4]+'" id="xinputNum'+i+'" max="'+data.clientorders[i][3]+'" value="0" type="number" min="1" style="font-size:12px;" class="form-control" placeholder=""></td>'+
                           '<td><i style="font-size:20px; color:#E53935; " class="linea linea-aerrow removeAddOrder" data-icon="&#xe04a;"></td></tr>');
                   }
               },   
               error: function (data) {
                   console.log('Data Error:', data);
               }
           });
       });
       
     </script>







      <script type="text/javascript">
        $(document).on('click', '#submitOrderSchedule2', function(e) {
            var verify = confirm("Do you want to submit this schedule?");
            if(verify==true){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                })

                e.preventDefault(); 
                
                var orders=[];
                for(var i=0; i<$('#clientProductList2').find('tr').length;i++){
                    orders.push([$('#xinputNum'+i).val(),$('#xinputNum'+i).data('productid')]);
                }


                var formData = {//pota
                    orderID: $('#clientOrderList2').find('option:selected').data('orderid'),
                    clientID: $('#clientOrderList2').find('option:selected').data('clientid'),
                    locationID: $('#clientLocation2').find('option:selected').data('id'),
                    contactPerson: $('#contactPerson2').find('option:selected').val(),
                    deliveryDate: $('#deliveryDate2').val(),
                    truckID: $('#truckPlateNumber2').find('option:selected').data('id'),
                    driverID: $('#truckDriver2').find('option:selected').data('id'),
                    orders: orders,

                }

                $.ajax({
                    type: "POST",
                    url: 'liveAddScheduleUpdate2',
                    data: formData,
                    success: function(data){
                        console.log(data);
                        $('#manufacturerOrderModal').modal('hide');
                        location.reload();
                    },   
                    error: function (data) {
                        console.log('Data Error:', data);
                    }
                });
                
            }
            return false;
        });
    </script>






<script type="text/javascript">
    $(document).on('change', '#truckPlateNumber2', function (e) {
        if($('#deliveryDate2').val()!=null){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            })

            e.preventDefault(); 

            var formData = {
                truckPlateNumber: $('#truckPlateNumber2').val(),
                deliveryDate: $('#deliveryDate2').val(),
            }//tite

            $.ajax({
                type: "POST",
                url: 'liveTruckCapacityUpdate2',
                data: formData,
                success: function(data){
                    console.log(data);
                    $('#truckTotalCapacity2').html(data.total);
                    $('#truckCurrentCapacity2').html('<b style="color:green;">'+data.current+'</b>');
                    $('#truckAvailableCapacity2').html(data.available);

                },   
                error: function (data) {
                    console.log('Data Error:', data);
                }
            });
        }
    });

    $(document).on('change', '#deliveryDate2', function (e) {
        if($('#truckPlateNumber2').val()!=null){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            })

            e.preventDefault(); 

            var formData = {
                truckPlateNumber: $('#truckPlateNumber2').val(),
                deliveryDate: $('#deliveryDate2').val(),
            }//tite

            $.ajax({
                type: "POST",
                url: 'liveTruckCapacityUpdate2',
                data: formData,
                success: function(data){
                    console.log(data);
                    $('#truckTotalCapacity2').html(data.total);
                    $('#truckCurrentCapacity2').html('<b style="color:green;">'+data.current+'</b>');
                    $('#truckAvailableCapacity2').html(data.available);
                },   
                error: function (data) {
                    console.log('Data Error:', data);
                }
            });
        }

        //SECTION HERE TRUCK DELIVERY SUMMARY

        if($('#clientLocation2').val()!=null){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            })

            e.preventDefault(); 

            var formData = {
                deliveryDate: $('#deliveryDate2').val(),
                locationID: $('#clientLocation2').find('option:selected').data('id'),
            }//tite

            $.ajax({
                type: "POST",
                url: 'liveTruckScheduleSummary2',
                data: formData,
                success: function(data){
                    console.log(data);

                    for(var i=0;i<data.schedules.length;i++){//hello
                        $('#scheduleSummaryList2').append(
                            '<tr><td id="xorderNum'+i+'">'+(i+1)+'</td><td id="xscheduleDate'+i+'">'+data.schedules[i][0]+'</td><td id="xdriver'+i+'"><span class="label label-success">'+data.schedules[i][1]+'</span></td>'+
                            '<td id="xlocation'+i+'">'+data.schedules[i][2]+'</td><td id="xstatus'+i+'"><span class="label label-success">'+data.schedules[i][3]+'</span></td></tr>');
                    }
                },   
                error: function (data) {
                    console.log('Data Error:', data);
                }
            });
        }
    });
  </script>

   </body>
</html>