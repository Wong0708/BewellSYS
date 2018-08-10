<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="_token" content="{!! csrf_token() !!}">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/bewelllogo.ico">
    <title>Bewell</title>
    <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/colors/blue.css" id="theme" rel="stylesheet">

    <link href="../plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
</head>

<body class="fix-sidebar">
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top m-b-0">
                <div class="navbar-header" style="background:#64B5F6;  border-radius: 2px; position:relative;"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                    <div class="top-left-part" style="background-color:#BBDEFB; opacity:1;"><a class="logo" href="index.html"><b><img src="../plugins/images/bewelllogos.png"  width="35px" alt="home" /></b><span class="hidden-xs"><img src="../plugins/images/bewelllogol.png" width="110px" alt="home" /></span></a></div>
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
                                    <a class="text-center" href="#"> <strong>See All Notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"><img src="../plugins/images/jet.jpg" alt="user-img" width="36" class="img-circle"><b style="color:white; font-family:Helvetica,Arial,sans-serif;" class="hidden-xs">
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
        <!-- Left navbar-header -->
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
                        <li><a href={{route('dashboard.index')}} class="waves-effect"><i class="linea-icon linea-aerrow fa-fw" data-icon="&#xe078;"></i> <span class="hide-menu">Dashboard</span></a></li>
                        <li style="background-color: #E9F0FD;"> <a href="javascript:void(0)" class="waves-effect"><i style="color:#4c87ed;" data-icon="x" class="linea-icon linea-ecommerce fa-fw"></i> <span class="hide-menu" style="color:#4c87ed;">Order<span class="fa arrow"></span></span></a>
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
                        @if(Auth::user()->access==1)
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
                    <h4 class="page-title" style="color:black;">Order Details: {{$order->id}}</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Order</a></li>
                            <li class="active" style="color:#4c87ed;">Client</li>
                        </ol>
                    </div>
                </div>
                <!--
                    SECTION KEYWORD/S: ADD PAYMENT MODAL
                    Prepared By: John Edel B. Tamani
                -->
                <!--START OF THE PAYMENT MODAL-->
                <div class="modal fade" id="addOrderPaymentModal" tabindex="-1" role="dialog" aria-labelledby="addClientOrder">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button"class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" style="color:black; font-family:Helvetica,Arial,sans-serif;">Add Payment</h4>
                            </div>
                            <input type="hidden" id="orderIDPayment" name="orderIDPayment" value={{$order->id}}>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="paymentType" class="control-label" style="color:black; font-family:Helvetica,Arial,sans-serif;"><b>Payment Type:</b></label>
                                    <select name="paymentType" class="form-control" id="paymentType" style="margin-bottom:10px;" required>
                                        <option selected disabled>Choose a payment type</option>
                                        <option>Cash</option>
                                    </select>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Choose a payment type for your order. <b style="color:#E53935;">*Required</b></span>
                                    <br>
                                    
                                    <label for="paymentAmount" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Payment Amount:</b></label>
                                    <input type="number" min="0" name="paymentAmount" class="form-control" id="paymentAmount" style="margin-bottom:10px;" required/>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the total amount for the payment of the order. <b style="color:#E53935;">*Required</b></span>
                                    <h4 style="margin-top:20px;" id="paymentBalance">
                                    <b>Total Payment Balance:</b> PHP <span id="grandTotal"></span>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button id="submitOrderPayment" class="btn btn-danger btn-md btn-block text-uppercase waves-effect waves-light" style="background-color: #4c87ed; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END OF THE PAYMENT MODAL-->
            
                <div class="row">
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <div class="white-box text-center bg-purple">
                            <h1 id="paymentStatus" class="text-white counter">{{$order->clod_pstatus}}</h1>
                                <p class="text-white">Payment Status</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <div class="white-box text-center bg-info">
                                <h1 class="text-white counter">{{$order->clod_status}}</h1>
                                <p class="text-white">Delivery Status</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <div class="white-box text-center">
                            <h1 id="orderDeadlineStatus" dclass="counter">{{$order->expectedDate}}</h1>
                                <p class="text-muted">Order Deadline</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <div class="white-box text-center bg-success">
                            <h1 class="text-white counter">@if(isset($order->clod_completed)){{$order->clod_completed}}@else N/A @endif</h1>
                                <p class="text-white">Date Completed</p>
                            </div>
                        </div>
                    </div>
                    
                
                <!--SECTION KEYWORD/S: ORDER, MODAL 
                    Prepared By: John Edel B. Tamani
                -->
                <div id='orderDeadlineModal' class="modal fade" tabindex="-1" role="dialog" aria-labelledby="ordermodallabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Update Order Deadline</h4> 
                            </div>
                            <div class="modal-body">
                                    <label for="exp_date" class="control-label" style="color:black; font-family:Helvetica,Arial,sans-serif;"><b>Expected Date:</b></label>
                                    <input type="date" class="form-control" id="exp_date" name="exp_date"> 
                                    <input type="hidden" id="previousexpdate" name="previousexpdate" value=''>

                            </div>
                        
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button style="background-color:#4c87ed;" type="button" id="updateOrderStatus" class="btn btn-danger waves-effect waves-light">Update</button>
                            </div>
                        </div>
                    <input type="hidden" id="orderModalIDUpdateStatus" name="orderModalIDUpdateStatus" value={{$order->id}}>
                    </div>
                </div>
                  <div class="col-lg-6 col-sm-6">
                      <div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h4 style="color:black; margin-bottom:7px;">Order Functions</h4>
                                    <div class="list-group" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                    {{-- Commented Out for future purposes By: John Edel B. Tamani
                                        <button type="button" class="list-group-item"><span><i style="color:#1565C0; margin-right:5px;" data-icon="&#xe00b;" class="linea-icon linea-basic"></i></span>Update Payment Status</button> --}}
                                    <button id="orderDeadlineButton" data-expecteddate={{$order->expectedDate}} type="button" class="list-group-item"><span><i style="color:#1565C0; margin-right:5px;" data-icon="r" class="linea-icon linea-basic"></i></span>Update Order Deadline</button>
                                    {{-- <button type="button" class="list-group-item"><span><i style="color:#1565C0; margin-right:5px;" data-icon="|" class="linea-icon linea-basic"></i></span>Update Delivery Status</button> --}}
                                    {{-- <button type="button" class="list-group-item"><span><i style="color:#1565C0; margin-right:5px;" data-icon="&#xe00b;" class="linea-icon linea-basic"></i></span><a href={{route('manufacturerorder.index')}}>Manage Manufacturer Order</a></button>
                                        <button type="button" class="list-group-item"><span><i style="color:#1565C0; margin-right:5px;" data-icon="f" class="linea-icon linea-basic"></i></span><a href={{route('supplierorder.index')}}>Manage Supplier Order</a></button>
                                        <button type="button" class="list-group-item"><span><i style="color:#1565C0; margin-right:5px;" data-icon="r" class="linea-icon linea-basic"></i></span><a href={{route('schedule.index')}}>Manage Schedule</a></button>
                                        <button type="button" class="list-group-item"><span><i style="color:#1565C0; margin-right:5px;" data-icon="O" class="linea-icon linea-basic"></i></span><a href={{route('clientorder.index')}}>View Orders List</a></button> --}}
                                    
                                    </div>
                                </div>
                      </div>

                      <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                
                                    <div class="white-box" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                        <h3 class="box-title m-b-0" style="color:black;">Client Details</h3>
                                        <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: This section contains the contact information of the client.</span>
                                        <div class="row" style="margin-top:10px; ">
                                                <div class="col-md-6 col-xs-6 b-r"> <strong>Client</strong>
                                                    <br>
                                                <p class="text-muted">{{$order->fromClient->cl_name}}</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 b-r"> <strong>Email</strong>
                                                    <br>
                                                    <p class="text-muted">{{$order->fromClient->cl_email}}</p>
                                                </div>
                                            </div>
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="white-box" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                    <h3 class="box-title m-b-0" style="color:black;">Order Payment Record</h3>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: This section contains the payment updates for the client order/s.</span><br>
                                    @if(!isset($order->clod_completed))<button id="addPaymentButton" style="margin-top:10px; " class="btn btn-success waves-effect waves-light" type="button"><span class="btn-label"><i data-icon="1" class="linea linea-ecommerce"></i></span>Add Payment</button>@endif
                                    <p class="text-muted m-b-30"></p>
                                    <div class="table-responsive">
                                            <table id="orderPaymentListTable" class="table table-striped">
                                                <thead>
                                                    <tr style="color:black;">
                                                    <th>#</th>
                                                    <th>Date</th>
                                                    <th>Order #</th>
                                                    <th>Payment Type</th>
                                                    <th>Payment Amount</th>
                                                    <th><i class="fa fa-gear"></th>
                                                </tr>
                                            </thead>
                                            <tbody id="paymentOrderTable">
                                                <?php 
                                                    $count= 1;
                                                    if(isset($order->fromClientOrderPayment)){
                                                        foreach($order->fromClientOrderPayment as $orderInfo){
                                                            echo '<tr>'.
                                                                '<td>'.$count.'</td>'.
                                                                '<td>'.$orderInfo->payment_date.'</td>'.
                                                                '<td>'.$orderInfo->orderID.'</td>'.
                                                                '<td>'.$orderInfo->payment_type.'</td>'.
                                                                '<td>'.$orderInfo->totalAmount.'</td>'.
                                                                '<td>'.
                                                                    //Commented out By: John Edel B. Tamani 
                                                                    // Edit Function for Payment
                                                                    // '<i style="color:#4c87ed;" data-payment="'.$orderInfo->totalAmount.'" data-id="'.$orderInfo->id.'" class="fa fa-edit editPayment">'. //
                                                                    '<i style="margin-left:5px; color:#E53935;" data-id="'.$orderInfo->id.'"  class="fa fa-trash-o removePayment">'.
                                                                    '</td>'.
                                                            '</tr>';
                                                            $count = $count + 1;
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--SECTION KEYWORD/S: EDIT PAYMENT ORDER, MODAL-->
                        {{-- <div id='editPaymentOrder' class="modal fade" tabindex="-1" role="dialog" aria-labelledby="ordermodallabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title">Status</h4> 
                                    </div>
                                    <div class="modal-body">
                                            <label for="previousPaymentAmount" id=""class="control-label">Payment Amount:</label>
                                            <input type="number" class="form-control" id="previousPaymentAmount" name="previousPaymentAmount"> 
                                    </div>
                                
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                        <button style="background-color:#4c87ed;" type="button" id="updatePaymentOrder" class="btn btn-danger waves-effect waves-light">Update</button>
                                    </div>
                                </div>
                                <input type="hidden" id="orderModalID" name="orderID" value="0">
                            </div>
                        </div> --}}
                        

                      <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                
                                    <div class="white-box" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                        <h3 class="box-title m-b-0" style="color:black;">Order Delivery Detail Record</h3>
                                        <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: This section contains the schedule for the client order/s.</span><br>
                                        <button style="margin-top:10px; " class="btn btn-info waves-effect waves-light" type="button"><span class="btn-label"><i data-icon="r" class="linea linea-basic"></i></span><a style="color:white;" href={{route('schedule.index')}}>Manage Schedule</a></button>
                                        <p class="text-muted m-b-30"></p>
                                        <div class="table-responsive">
                                                <table id="orderDeliveryList" class="table table-striped">
                                                    <thead>
                                                        <tr style="color:black;">
                                                            <th>#</th>
                                                            <th>Tracking #</th>
                                                            <th>Order #</th>
                                                            <th>Delivery Date</th>
                                                            <th>Status</th>
                                                            <th>Action <i style="margin-left:5px;" class="fa fa-gavel"></th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                    <!--DELIVERY MARKER-->
                                                    <?php 
                                                    $count= 1;
                                                    if(isset($order->fromSchedule)){
                                                        foreach($order->fromSchedule as $orderInfo){
                                                            //Clarrify This Part to Kenneth
                                                            echo '<tr>'.
                                                                '<td>'.$count.'</td>'.
                                                                '<td>'.$orderInfo->id.'</td>'.
                                                                '<td>'.$orderInfo->orderID.'</td>'.
                                                                '<td>'.$orderInfo->scd_date.'</td>'.
                                                                '<td><span class="label label-success">'.$orderInfo->scd_status.'</span></td>'.
                                                                '<td><a href="/sched_det/'.$orderInfo->id.'"><i style="color:#4c87ed;"class="fa fa-calendar"></a></td>'.
                                                            '</tr>';
                                                            $count = $count + 1;
                                                        }
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    
                                        <div class="white-box" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                            <h3 class="box-title m-b-0" style="color:black;">Order Update Logs</h3>
                                            <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: This section contains all updates on this order.</span>
                                            <p class="text-muted m-b-30"></p>
                                        <hr>
                                        <h3 style="font-weight:700; font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;">Order Details: {{$order->id}}</h3>
                                            <div class="table-responsive">
                                                    <table id="orderNotificationList" class="table table-striped">
                                                        <thead>
                                                            <tr style="color:black;">
                                                                <th>#</th>
                                                                <th>User</th>
                                                                <td>Query Type</td>
                                                                <th>Notification</th>
                                                                <th>Timestamp</th>
                                                              
                                                    </thead>
                                                    <tbody>
                                                        @foreach($orderLogs as $log)
                                                                <tr>
                                                                    <td>{{$log->query_id}}</td>
                                                                    <td>{{$log->fromUser->name}}</td>
                                                                    <td>{{$log->query_type}}</td>
                                                                    <td><span class="label label-info">{{$log->notification}}</span></td>
                                                                    <td>{{$log->query_date}}</td>
                                                                </tr> 
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                    </div>
                    
                <div class="col-lg-6 col-sm-6">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                        <div class="white-box" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                            <h3 class="box-title m-b-0" style="color:black;">Order Details Record</h3>
                            <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: This section contains the payment updates for the client order/s.</span><br>
                            <button id="addClientOrder"style="margin-top:10px; " class="btn btn-info waves-effect waves-light" type="button"><span class="btn-label"><i data-icon="O" class="linea linea-basic"></i></span><a style="color:white;" href={{route('clientorder.index')}}>Manage Order List</a></button>
                            <p class="text-muted m-b-30"></p>
                            <hr>
                        <h3 style="font-weight:700; font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;">Order Details: {{$order->id}}</h3>
                            <div class="table-responsive">
                                <table id="orderDetailList" class="table table-striped">
                                    <thead>
                                        <tr style="color:black;">
                                            <th>#</th>
                                            <th>Order #</th>
                                            <th>Product Name</th>
                                            <th>SKU</th>
                                            <th>Total</th>
                                            <th>Remaining</th>
                                            <th>Received</th>
                                            {{-- <th><i class="fa fa-gear"></th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $count= 1;
                                            if(isset($order->fromClientOrderDetail)){
                                                foreach($order->fromClientOrderDetail as $orderInfo){
                                                    echo '<tr>'.
                                                        '<td>'.$count.'</td>'.
                                                        '<td>'.$orderInfo->orderID.'</td>'.
                                                        '<td>'.$orderInfo->fromProduct->pd_name.'</td>'.
                                                        '<td>'.$orderInfo->fromProduct->pd_sku.'</td>'.
                                                        '<td>'.$orderInfo->cldt_qty.'</td>'.
                                                        '<td>'.($orderInfo->cldt_qty-$orderInfo->received).'</td>'.
                                                        '<td>'.$orderInfo->received.'</td>'.

                                                        // '<td>'.
                                                            //Commented out By: John Edel B. Tamani 
                                                            // Edit Function for Payment
                                                            // '<i style="color:#4c87ed;" data-payment="'.$orderInfo->totalAmount.'" data-id="'.$orderInfo->id.'" class="fa fa-edit editPayment">'. //
                                                            // '<i style="margin-left:5px; color:#E53935;" data-id="'.$orderInfo->id.'"  class="fa fa-trash-o removePayment">'.
                                                            // '</td>'.
                                                    '</tr>';
                                                    $count = $count + 1;
                                                }
                                            }
                                        ?>
                                        {{-- Commented Out Old Implementation of Client Order Detail
                                            @if(isset($$order->fromClientOrderDetail))
                                            @foreach($order->fromClientOrderDetail as $orderInfo)
                                                <tr>
                                                    <td>{{$orderInfo->id}}</td>
                                                    <td>{{$orderInfo->fromProduct->pd_code}}</td>
                                                    <td>{{$orderInfo->fromProduct->pd_name}}</td>
                                                    <td>{{$orderInfo->fromProduct->sku}}</td>
                                                    <td>{{$orderInfo->cldt_qty}}</td> --}}
                                                    {{-- <td>
                                                        <i style="color:#4c87ed;" class="fa fa-edit">
                                                        <i style="margin-left:5px; color:#E53935;" class="fa fa-trash-o removeorder">
                                                    </td> --}}
                                                {{-- </tr>
                                            @endforeach
                                        @endif --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                    {{-- 
                        SECTION KEYWORD/S: CUSTOMER INVOICE
                        Prepared By: John Edel B. Tamani
                    --}}
                        <div class="white-box" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                            <h3 class="box-title m-b-0" style="color:black;">Order Sales Report</h3>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: This is section the sales report for the client order/s.</span>
                                    <br>
                            <button id="printCustomerInvoice" style="margin-top:10px;" class="btn btn-success waves-effect waves-light" type="button"><span class="btn-label"><i class="linea linea-basic" data-icon="&#xe00b;"></i></span>Print Customer Invoice</button>                        
                            <hr>
                            <h3 style="font-weight:700; font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;">Order Details: {{$order->orderID}}</h3>
                            
                            <table id="customerInvoiceTable" class="table table-bordered">
                                <thead style="color:black;">
                                    <tr style="color:black;">
                                        <th>#</th>
                                        <th>Order #</th>
                                        <th>Product Name</th>
                                        <th>Product Code</th>
                                        <th>Unit Price</th>
                                        <th>Qty</th>
                                        <th>Total Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $count= 1;
                                        if(isset($order->fromClientOrderDetail)){
                                            foreach($order->fromClientOrderDetail as $orderInfo){
                                                echo '<tr>'.
                                                    '<td>'.$count.'</td>'.
                                                    '<td>'.$orderInfo->orderID.'</td>'.
                                                    '<td>'.$orderInfo->fromProduct->pd_name.'</td>'.
                                                    '<td>'.$orderInfo->fromProduct->pd_code.'</td>'.
                                                    '<td>'.$orderInfo->fromProduct->pd_price.'</td>'.
                                                    '<td>'.$orderInfo->cldt_qty.'</td>'.
                                                    '<td>'.$orderInfo->cldt_qty*$orderInfo->fromProduct->pd_price.'</td>'.
                                                '</tr>';
                                                $count = $count + 1;
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <hr>
                        </div> 
                    </div>
                </div>
            </div>
            
            {{--Commented for future purposes By: John Edel B. Tamani
                <hr>
                <div class="row">
                <div style="margin-left:7px; display:inline-block; height:auto; width:45%;">
                <h4 style=" border-bottom: 1px solid black; margin-top:10px; font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif; text-transform:uppercase;"><b>Summary of Sales Details </b></h4>
                <h5  style="margin-top:10px; font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif; text-transform:uppercase;"><b>Customer: Mercury Drug Corporation </b></h5>
                <h5 style="margin-top:10px; font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif; text-transform:uppercase;"><b>Grand Total Gross Price ₱10,000.00 </b></h5>
                <h5  style="margin-top:10px; font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif; text-transform:uppercase;"><b>Total Discount: ₱10,000.00 </b></h5>
                <h5 style="margin-top:10px; font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif; text-transform:uppercase;"><b>Grand Total Net Price: ₱100.00 </b></h5>
                <hr>
                <h5 style="margin-top:10px; font-size:16px; color:#43A047; font-family:Helvetica,Arial,sans-serif; text-transform:uppercase;"><b>Total Profit Gain: ₱50,000.00 </b></h5>
                </div>


                <div style="border-left: 1px solid black; padding-left:5px; display:inline-block; height:auto; width:45%; margin-top:0;">
                        <h4 style="border-bottom: 1px solid black; margin-top:10px; font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif; text-transform:uppercase;"><b>Summary of Order Details </b></h4>
                        <h5 style="margin-top:10px; font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif; text-transform:uppercase;"><b>Total Product/s Consumed: 10</b></h5>
                        <h5 style="margin-top:10px; font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif; text-transform:uppercase;"><b>Total Material/s Consumed: 50</b></h5>
                        <h5 style="margin-top:10px; font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif; text-transform:uppercase;"><b>Total Product/s Ordered: 30</b></h5>
                        <h5 style="margin-top:10px; font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif; text-transform:uppercase;"><b>Total Material/s Ordered: 20</b></h5>
                        <hr>
                        <h5 style="margin-top:10px; font-size:16px; color:#E53935; font-family:Helvetica,Arial,sans-serif; text-transform:uppercase;"><b>Total Cost: ₱20,000.00 </b></h5>
                </div> 
            --}}
        </div>
                
    </div>
    <footer class="footer text-center"> 2018 &copy; Bewell Nutraceutical Corporation</footer>
            </div>
            </div>


            <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
            <script src="../bootstrap/dist/js/bootstrap.min.js"></script>
            <script src="../../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
            <script src="../js/jquery.slimscroll.js"></script>
            <script src="../js/waves.js"></script>
            <script src="../js/custom.min.js"></script>
            <script src="../js/mask.js"></script>
            <script src="../plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
            <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
            <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

            <!--
                SECTION KEYWORD/S: APPLICATION JET SCRIPT
                Prepared By: John Edel B. Tamani
            -->

            
            <script type="text/javascript">
                //jump
                $(document).on('click','#printCustomerInvoice',function(){
                    var divToPrint=document.getElementById('customerInvoiceTable')
                    
                    var newWindow=window.open('','Print-Window');
                    newWindow.document.open();
                    newWindow.document.write(
                        '<html>'+
                            '<body onload="window.print()">'+
                                divToPrint.outerHTML+
                            '</body>'+
                        '</html>');
                    newWindow.document.close();
                    setTimeout(function(){
                        newWindow.close();
                    },10);
                });
            </script>
            
            <script type="text/javascript">
                $(document).on('click','#orderDeadlineButton',function(e){
                    $('#exp_date').val($(this).data('expecteddate'));
                    $('#previousexpdate').val($(this).data('expecteddate'));
                    $('#orderDeadlineModal').modal('show');
                });

                $(document).on('click','#updateOrderStatus',function(e){
                    var verify = confirm("Do you want to update the order?");
                    if(verify==true){

                        //Logic to check if similar date
                        if($('#previousexpdate').val()!=$('#exp_date').val()){
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                }
                            })

                            e.preventDefault(); 

                            var formData = {
                                expectedDate: $('#exp_date').val(),
                                id: $('#orderModalIDUpdateStatus').val(),

                            }
                            
                            var type = "POST"; 
                            var orderID = $('#orderModalIDUpdateStatus').val();
                            var process_url = '/ajaxUpdateOrderStatus';

                            $.ajax({
                                type: type,
                                url: process_url,
                                data: formData,
                                dataType: 'json',
                                success: function (data) {
                                    $("#orderDeadlineStatus").text(data.expdate);
                                    $('#orderDeadlineModal').modal('hide');
                                },
                                error: function (data) {
                                    console.log('Data Error:', data);
                                }
                            });
                        }else{
                            alert('Invalid Input Update Order Status is the Same! Please Try Again!');
                        }
                    }
                });
                
            </script>

            <script type="text/javascript">
                $(document).on('click','.removePayment',function(e){
                    var verify = confirm("Do you want to cancel the payment?");

                    if(verify == true){
                        //REASON WILL JOIN THE LOG FOR CLIENTPAYMENT LOGS
                        //UPDATED BY: JOHN EDEL B. TAMANI
                        var reason = prompt("Please enter the reason for the cancellation?");
                        if (reason != null || reason != "") {
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                }
                            })

                            e.preventDefault(); 
                            var formData = {
                                id: $(this).data('id'),
                                reason: reason,
                                value: $(this).data('payment'),
                            }
                            
                            var toEdit = this;

                            $.ajax({
                                type: "POST",
                                url:  '/ajaxDeletePayment',
                                data: formData,
                                success: function(data){
                                    console.log(data);
                                    $(toEdit).closest('tr').remove();

                                    //AJAX TO UPDATE THE ORDER STATUS
                                    //By: John Edel B. Tamani
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                        }
                                    })

                                    e.preventDefault(); 
                                    var formData = {
                                        id:$('#orderIDPayment').val(),
                                        funcNum:1,
                                    }
                                    
                                    $.ajax({
                                        type: "POST",
                                        url:  '/ajaxUpdatePaymentStatus',
                                        data: formData,
                                        success: function(data){
                                            console.log(data);
                                            $('#paymentStatus').text(data.status);                                                
                                        },   
                                        error: function (data) {
                                            console.log('Data Error:', data);
                                        }
                                    });
                                    
                                    $('#paymentStatus').text('Pending');
                                },   
                                error: function (data) {
                                    console.log('Data Error:', data);
                                }
                            });
                        }
                    }

                        return false;
                    
                    //Commented out By: John Edel B. Tamani
                    //For Future Purposes!
                    // $('#previousPaymentAmount').val($(this).data('payment'));
                    // $('#updatePaymentOrder').val($(this).data('id'));
                    // $('#editPaymentOrder').modal('show');
                });
            </script>  
            
            {{-- 
                 //Commented out By: John Edel B. Tamani
                //For Future Purposes!
                <script type="text/javascript">
                $(document).on('click','#updatePaymentOrder',function(e){
                    var verify = confirm("Do you want to update the order?");

                    if(verify == true){
                        
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                            }
                        })

                        e.preventDefault(); 
                        var formData = {
                            id: $(this).val(),
                            paymentAmount: $('#previousPaymentAmount').val(),
                        }
                        
                        $.ajax({
                            type: "POST",
                            url:  '/ajaxUpdatePayment',
                            data: formData,
                            success: function(data){
                                console.log(data);
                                $('#editPaymentOrder').modal('hide');
                            },   
                            error: function (data) {
                                console.log('Data Error:', data);
                            }
                        });
                    }
                    return false;
                });
            </script>             --}}


            <script type="text/javascript">
                $(document).on('click','#addPaymentButton',function(e){
                    var total = $('#grandTotal').text();
                    
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    })

                    e.preventDefault(); 
                    var formData = {
                    orderID: $('#orderIDPayment').val(),
                    }
                    
                    $.ajax({
                        type: "POST",
                        url:  '/ajaxBalancePayment',
                        data: formData,
                        success: function(data){
                            console.log(data);
                            if(data.totalBalance>0){
                                $('#paymentAmount').attr('max',data.totalBalance);
                                $('#grandTotal').text(data.totalBalance.toFixed(2));//Additional Feature: Put comma or number format  to payment balance;
                                $('#addOrderPaymentModal').modal('show');
                            }else{
                                alert('Invalid Action Order is Fully Paid!');
                            }
                        },   
                        error: function (data) {
                            console.log('Data Error:', data);
                        }
                    });
                   
                });
            </script>
            <script type="text/javascript">
                $(document).on('click','#submitOrderPayment',function(e){
                    var verify =confirm('Do you want to submit the payment for the order?');
                    if($('#paymentAmount').val()<=parseInt($('#grandTotal').text())){//validation for payment.
                        if(verify == true){
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                }
                            })

                            e.preventDefault(); 
                            var formData = {
                            paymentType: $('#paymentType').val(),
                            paymentAmount: $('#paymentAmount').val(),
                            orderID:$('#orderIDPayment').val(),
                            }
                            
                            $.ajax({
                                type: "POST",
                                url:  '/ajaxAddPayment',
                                data: formData,
                                success: function(data){
                                    console.log(data);
                                    var count = $('#paymentOrderTable').children('tr').length;
                                    $('#paymentOrderTable').append('<tr><td>'+(count+1)+'</td><td>'+data.orderDate+'<td>'+data.orderID+'</td><td>'+data.type+'</td><td>'+data.payment+'</td><td>'+
                                    '<i style="margin-left:5px; color:#E53935;" data-id="'+data.id+'" data-payment="'+data.payment+'" class="fa fa-trash-o removePayment"></td></tr>');
                                    $('#addOrderPaymentModal').modal('hide');
                                    if(data.totalBalance==0){
                                        //AJAX TO UPDATE THE ORDER
                                        //By: John Edel B. Tamani
                                        $.ajaxSetup({
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                            }
                                        })

                                        e.preventDefault(); 
                                        var formData = {
                                            id:data.orderID,
                                            funcNum:2,
                                        }
                                        
                                        $.ajax({
                                            type: "POST",
                                            url:  '/ajaxUpdatePaymentStatus',
                                            data: formData,
                                            success: function(data){
                                                console.log(data);
                                                $('#paymentStatus').text(data.status);                                                
                                            },   
                                            error: function (data) {
                                                console.log('Data Error:', data);
                                            }
                                        });
                                    }
                                },   
                                error: function (data) {
                                    console.log('Data Error:', data);
                                }
                            });
                        }
                        return false;
                    }else{
                        alert('Please Try Again! Invalid Input for Payment Amount!');
                    }
                });
            
            </script>

            <script>
                $(document).ready(function() {
                    $('#orderDetailList').DataTable();
                    $(document).ready(function() {
                        var table = $('#orderDetails').DataTable({
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
                        $('#orderDetails tbody').on('click', 'tr.group', function() {
                            var currentOrder = table.order()[0];
                            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                                table.order([2, 'desc']).draw();
                            } else {
                                table.order([2, 'asc']).draw();
                            }
                        });
                    });
                });

                $(document).ready(function() {
                    $('#orderPaymentListTable').DataTable();
                    $(document).ready(function() {
                        var table = $('#paymentList').DataTable({
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
                        $('#paymentList tbody').on('click', 'tr.group', function() {
                            var currentOrder = table.order()[0];
                            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                                table.order([2, 'desc']).draw();
                            } else {
                                table.order([2, 'asc']).draw();
                            }
                        });
                    });
                });

                  $(document).ready(function() {
                    $('#orderNotificationList').DataTable();
                    $(document).ready(function() {
                        var table = $('#orderNotification').DataTable({
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
                        $('#orderNotification tbody').on('click', 'tr.group', function() {
                            var currentOrder = table.order()[0];
                            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                                table.order([2, 'desc']).draw();
                            } else {
                                table.order([2, 'asc']).draw();
                            }
                        });
                    });
                });



                 $(document).ready(function() {
                    $('#orderDeliveryList').DataTable();
                    $(document).ready(function() {
                        var table = $('#orderDelivery').DataTable({
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
                        $('#orderDelivery tbody').on('click', 'tr.group', function() {
                            var currentOrder = table.order()[0];
                            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                                table.order([2, 'desc']).draw();
                            } else {
                                table.order([2, 'asc']).draw();
                            }
                        });
                    });
                });
            </script>
            <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
            <script src="../plugins/bower_components/sweetalert/sweetalert.min.js"></script>
            <script src="../plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js"></script>
</body>

</html>
