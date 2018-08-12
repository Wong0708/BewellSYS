<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="_token" content="{!! csrf_token() !!}">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/bewelllogo.ico">
    <title>Bewell</title>
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <link href="plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
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
                                <a class="text-center" href="#"> <strong>See All Notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"><img src="plugins/images/jet.jpg" alt="user-img" width="36" class="img-circle"><b style="color:white; font-family:Helvetica,Arial,sans-serif;" class="hidden-xs">
                            <b>
                                @if(Auth::user()->access==1)
                                   Logistics Head
                                @endif

                            </b>
                        </a>

                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li><a href="#"><i class="ti-user"></i> Manage Account</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href={{route( 'logout.index')}}><i class="fa fa-power-off"></i> Logout</a></li>
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
                        <h4 class="page-title" style="color:black;">Client Orders</h4>
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
                    SECTION KEYWORD/S: MODAL, CLIENT, ADD, ORDER.
                    Prepared By: John Edel B. Tamani
                -->
                
                <!--START OF ADD ORDER MODAL-->
                <div class="modal fade" id="clientOrderModal" tabindex="-1" role="dialog" aria-labelledby="addClientOrder">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="exampleModalLabel1" style="color:black; font-family:Helvetica,Arial,sans-serif;">Add Orders</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">


                                    <label for="client" class="control-label" style="color:black; font-family:Helvetica,Arial,sans-serif;"><b>Client:</b></label>
                                    <select name="client" class="form-control" id="clientList" style="margin-bottom:10px;">
                                        <option selected disabled>Choose a client</option>
                                        @if(isset($clients)) 
                                            @foreach ($clients as $client)
                                                <option>{{$client->cl_name}}</option>
                                            @endforeach 
                                        @endif
                                    </select>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Choose one client among the list to add an order. <b style="color:#E53935;">*Required</b></span>
                                    <br>
                                    <label for="client" class="control-label" style="color:black; font-family:Helvetica,Arial,sans-serif;"><b>P.O Price:</b></label>
                                    <input type="number" name="POprice" class="form-control" placeholder="Enter PO Price" id="POprice">
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Add alloted budget for purchase. Leave blank for no value <b style="color:cornflowerblue;">*Optional</b></span>
                                    <br>
                                    {{--
                                        Commented By: John Edel B. Tamani
                                        Purpose: ADDRESS FOR CLIENT
                                        <label for="clientLocation" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Address:</b></label>
                                    <select name="clientLocation" class="form-control" id="clientLocation" style="margin-bottom:10px;">
                                        <option selected disabled>N/A</option>
                                    </select>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Choose one client among the list to add an order. <b style="color:#E53935;">*Required</b></span>
                                    <br> --}}

                                    <label for="orderExpDate" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Expected Date:</b></label>
                                    <input type="date" name="orderExpDate" class="form-control" id="orderExpDate" style="margin-bottom:10px;"/>
                                       
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Choose the client's expected date of delivery. <b style="color:#E53935;">*Required</b></span>

                                    <div class="white-box" style="background-color:#F5F5F5; margin-top:10px;">

                                        <h4 style="font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Client Product Order/s</b></h4>
                                        <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Select the client's product order based on the list. <b style="color:#E53935;">*Required</b></span>
                                        <br>
                                        <label for="order" class="control-label">
                                            <button id="addOrder" style="margin-top:10px; font-size:12px; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); font-family:Helvetica,Arial,sans-serif; min-width:130px; height:30px;" class="btn btn-success btn-rounded waves-effect waves-light" type="button"><span class="btn-label"><i class="fa fa-plus-square"></i></span>Add Product</button>
                                        </label>
                                        <div class="table-responsive" style="margin-top:10px;">
                                            <table class="table color-bordered-table info-bordered-table" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); font-family:Helvetica,Arial,sans-serif;">
                                                <thead>
                                                    <tr style="font-size:12px; font-weight:700; ">
                                                        <th>Order #</th>
                                                        <th>Product Name</th>
                                                        <th>SKU</th>
                                                        <th>Order Amount (Boxes)</th>
                                                        <th><i class="fa fa-gear"></th>
                                                    </tr>
                                                </thead>
                                                <tbody id="orderList">
                                                    <tr style="color:black;" id="orderListNum1">
                                                        @if(isset($products))
                                                            <td><span id="countAddOrder" class="label label-info"></span></td>
                                                            
                                                                <td> 
                                                                    <select style="font-size:12px;" class="form-control orderName">
                                                                        <option selected>Choose a product </option>
                                                                        @foreach ($products as $product)
                                                                            <option>{{$product->pd_name}}</option>
                                                                        @endforeach 
                                                                    </select>
                                                                </td>
                                                                <td> 
                                                                    <select style="font-size:12px;" class="form-control orderSKU">
                                                                        <option selected>N/A </option>
                                                                        <!--OLD IMPLEMENTATION MANUAL MODE-->
                                                                        {{-- <option selected>Choose product SKU </option>
                                                                        @foreach ($products as $product)
                                                                            <option>{{$product->pd_sku}}</option>
                                                                        @endforeach  --}}
                                                                    </select>
                                                                </td>
                                                        @endif 
                                                        
                                                        <td><input value="0" type="number" min="1" style="font-size:12px;" class="form-control orderInventory addable" price="x" placeholder=""></td>
                                                        <td><i style="font-size:20px; color:#E53935; " class="linea linea-aerrow removeAddOrder" data-icon="&#xe04a;"></td>
                                                    </tr>
                                                </tbody>
                                                    </table>
                                            <h4  style="margin-top:10px; font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif; text-transform:uppercase;"><b style="display: inline">Total Price:</b>  <p id="totalOrderAmount" style="display: inline"></p></h4>
                                                </div>
                                                <hr>
                                                    <h4  style="font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Product Inventory Support</b></h4>
                                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: This is the referenced inventory list for the client's ordered product/s.</span>

                                                    <table class="table full-color-table full-info-table hover-table" data-height="250" data-mobile-responsive="true" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); margin-top:10px; font-family:Helvetica,Arial,sans-serif;">
                                                            <thead>
                                                                <tr style="font-size:12px; font-weight:700;">
                                                                    <th>Order #</th>
                                                                    <th>Product Code</th>
                                                                    <th>Available</th>
                                                                    <th>Unit Price</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="clientOrderSupport"></tbody>
                                                    </table>

                                                </div>

                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button id="submitOrderList" class="btn btn-danger btn-md btn-block text-uppercase waves-effect waves-light" style="background-color: #4c87ed; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);" type="submit">Submit</button>
                                </div>
                        </div>
                    </div>
                </div>
                <!--END OF ADD ORDER MODAL-->

                <div class="row" style="font-family:Helvetica,Arial,sans-serif;">
                    <div class="col-sm-12">
                        <div class="white-box" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                            
                            <div class="alert alert-success" id="activityUpdate"></div>

                            <h3 class="box-title m-b-0" style="color:black;">LIST OF CLIENT ORDERS</h3>
                            <button class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#clientOrderModal" type="button"><span class="btn-label"><i class="fa fa-plus-square-o"></i></span>Add Order</button>

                            <p class="text-muted m-b-30"></p>
                            <div class="table-responsive">
                                <table id="orderListTable" class="table table-striped">
                                    <thead>
                                        <tr style="color:black;">
                                            <th>Order #</th>
                                            <th>Client</th>
                                            <th>Order Date</th>
                                            <th>Expected Date</th>
                                            <th>Date Completed</th>
                                            <th>Payment Status</th>
                                            
                                            {{-- 
                                                //Commented Out By: John Edel B. Tamani
                                                // For Future Purposes
                                                <th>Delivery Date</th> 
                                            --}}
                                            
                                            <th>Delivery Status</th>
                                            <th>Last Updated</th>
                                            <th><i class="fa fa-gear"></th>
                                        </tr>
                                    </thead>
                                    <tbody style="font-weight:400;"><!--BUG EXIST HERE CANNOT FIND WHAT IS THE CAUSE OF THE FONT-WEIGHT TO 700. OUTSIDE OF THE CSS SELECTOR-->
                                        <!--
                                            SECTION KEYWORD/S: CLIENT, ORDERS, TABLE.
                                            Prepared By: John Edel B. Tamani.
                                        -->

                                        <?php 
                                            //Debugging Tool Developed by Jet for PHP tags.
                                                #echo "<script>console.log( 'Debug Objects: " . <PHP Variable Here> . "' );</script>";
                                            
                                            if(isset($orders)){
                                                //Start of Foreach Loop.
                                                foreach ($orders as $order){
                                                    echo 
                                                        '<tr id="order'.$order->id.'">'.
                                                        '<td id="orderID'.$order->id.'"><a href="clientorder/'.$order->id.'">'.$order->id.'</a></td>'.
                                                        '<td id="client'.$order->id.'">';

                                                    if(!empty($order->fromClient)){
                                                        echo $order->fromClient->cl_name;
                                                    }else{
                                                        echo 'N/A';
                                                    }

                                                    echo 
                                                        '</td>'.
                                                        '<td id="createdDate'.$order->id.'">'.$order->created_at->format('y-m-d').'</td>'.
                                                        '<td id="expectedDate'.$order->id.'">'.$order->expectedDate.'</td>'.
                                                        '<td id="dateCompleted'.$order->id.'">';

                                                    if(!empty($order->clod_completed)){
                                                        echo $order->clod_completed;
                                                    }else{
                                                        echo 'N/A';
                                                    }
                                                    
                                                    echo 
                                                        '</td>'.
                                                        '<td id="paymentStatus'.$order->id.'">';

                                                    if($order->clod_pstatus=='Complete'){
                                                        echo '<span class="label label-success">'.$order->clod_pstatus.'</span></td>';
                                                    }else{
                                                        echo '<span class="label label-info">'.$order->clod_pstatus.'</span></td>';
                                                    }

                                                    echo 
                                                        '<td id="deliveryStatus'.$order->id.'">';

                                                    if($order->clod_status=='Delivered'){
                                                        echo '<span class="label label-success">'.$order->clod_status.'</span></td>';
                                                    }else{
                                                        echo '<span class="label label-info">'.$order->clod_status.'</span></td>';
                                                    }
                                                    
                                                    //OLD IMPLEMENTATION
                                                    //Commented Out By: John Edel B. Tamani
                                                    // For Future Purposes
                                                    // echo 
                                                    //     '</td>'.r
                                                    //     '<td id="deliveryDate'.$order->id.'">';
                                                    // if(!empty($order->fromOneSchedule)){
                                                    //     $order->fromOneSchedule->scd_date;
                                                    // }else{
                                                    //     echo 'N/A';
                                                    // }

                                                    echo 
                                                        // '</td>'.//For future purposes
                                                        '<td id="updatedDate'.$order->id.'">'.$order->updated_at.'</td>'.
                                                        '<td id="setting'.$order->id.'">'.
                                                        '<a href="/clientorder/'.$order->id.'" <i style="color:#4c87ed;" class="fa fa-edit editOrder">'.

                                                        //Commented Out By: John Edel B. Tamani
                                                        // For Future purposes of Edit 
                                                        // '<i style="color:#4c87ed;" data-orderid='.$order->id.' data-expecteddate='.$order->expectedDate.' class="fa fa-edit editOrder">'.
                                                        '<i style="margin-left:5px; color:#E53935;" data-orderid='.$order->id.' class="fa fa-trash-o removeOrder">'.
                                                        '</td>'.
                                                        '</tr>';
                                                } 
                                                //End of Foreach Loop.
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!--SECTION KEYWORD/S: ORDER, MODAL 
                    Commented Out For future purposes By: John Edel B. Tamani
                -->
                {{-- <div id='ordermodal' class="modal fade" tabindex="-1" role="dialog" aria-labelledby="ordermodallabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Update Order Deadline</h4> 
                            </div>
                            <div class="modal-body">
                                    <label for="exp_date" class="control-label" style="color:black; font-family:Helvetica,Arial,sans-serif;"><b>Expected Date:</b></label>
                                
                                    <input type="date" class="form-control" id="exp_date" name="exp_date"> 
                            </div>
                        
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button style="background-color:#4c87ed;" type="button" id="updateOrder" class="btn btn-danger waves-effect waves-light">Update</button>
                            </div>
                        </div>
                        <input type="hidden" id="orderModalID" name="orderID" value="0">
                    </div>
                </div> --}}
                

        
                <footer class="footer text-center"> 2018 &copy; Bewell Nutraceutical Corporation</footer>
            </div>
        </div>

    <!--
        SECTION KETWORD/S: APPLICATION SCRIPTS
        Prepared By: John Edel B. Tamani
    -->
    
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/waves.js"></script>ƒ
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
    <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="plugins/bower_components/sweetalert/sweetalert.min.js"></script>
    <script src="plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js"></script>

    <!--SECTION KETWORD/S: INITIALIZE, APPLICATION, VARIABLE SCRIPTS-->
    <script type='text/javascript'>
        $('#activityUpdate').hide();

        var count = 1;
        $('#countAddOrder').html(count);

        //SECTION KEYWORD/S: REMOVE ADD ORDER
        $(document).on('click', '.removeAddOrder', function() {
            if(count==1){
                alert('Sorry you cannot remove this order!')
            }else{
                var verify = confirm("Do you want to delete this material?");
                if(verify==true){
                    var thisVal = $(this).closest('tr').find('td').find('span').text();
                    count = count - 1;
                    count2 = count2 - 1;
                    if($(this).closest('tr').prev('tr').length){
                        for(var i =  parseInt(thisVal) ; i<= count; i=i+1 ){
                            //BUG LOCATED HERE
                            //By: John Edel B. Tamani
                            //Purpose: To update the number of the order in the list.

                            console.log('THISVAL:'+i);
                            console.log('COUNT:'+count);
                            $('#orderListNum'+(i+1)).find('td').find('span').html(i);
                            $('#orderListNum'+(i+1)).prop('id','#orderListNum'+i);// toggle also the product inventory support
                        }
                        $(this).closest('tr').remove();
                    }
                    $('#supportNum'+$(this).closest('tr').find('td').find('span').text()).remove();
                }
                return false;
            }
        });

        //SECTION KEYWORD/S: ADD ORDER 
        $(document).on('click', '#addOrder', function() {
            count = count + 1;
            $('#orderList').append(
                '@if(isset($products))<tr id="orderListNum'+count+'" style="color:black;">'+ 
                '<td><span class="label label-info" id="countAddOrder">'+count+'</span></td> ' +
                '<td> <select style="font-size:12px;" class="form-control orderName"><option selected> Choose a product</option>@foreach ($products as $product)<option>{{$product->pd_name}}</option> @endforeach</select> </td>' +
                '<td><select style="font-size:12px;" class="form-control orderSKU"><option selected>N/A</option></td>'+
                '<td><input type="text" style="font-size:12px;" price="x" class="form-control addable" placeholder=""></td> ' +
                '<td><i style="font-size:20px; color:#E53935; " class="linea linea-aerrow removeAddOrder" data-icon="&#xe04a;"></td> ' +
                '</tr>@endif');
        });
    </script>


    {{-- SECTION COMMENTED OUT FOR FUTURE PURPOSES 
         Prepared By: John Edel B. Tamani
        <script type='text/javascript'>
        $(document).on('click','.editOrder',function(){
            $('#exp_date').val($(this).data('expecteddate'));
            $('#orderModalID').val($(this).data('orderid'));
            $('#ordermodal').modal('show');

            Learning/s Reference for JQuery.
            Prepared By: John Edel B. Tamani
            $('#something').prop("readonly", true); -> To disable an input.
            $('.something').prop("disabled",true); -> To disable a button.
        });
    </script> --}}

    <!--SECTION KEYWORD/S: SUBMIT ORDER LIST-->
    <script type='text/javascript'>
        $('#submitOrderList').on('click','',function(e) {

            var po_price = parseFloat($('#POprice').val());
            var total_price = parseFloat($('#totalOrderAmount').html());


            if($('#orderListNum1').find('td:first').next().next().find('select').val()!='N/A' && $('#orderListNum1').find('td:first').next().next().next().find('input').val()!=0){

                var verify = confirm("Do you wish to add the following order/s?");

                //VARIABLE PRE-PROCESSING
                var orders = [];
                var order =  [];
                for(var i=1;i<=count;i=i+1){
                    order.push($('#orderListNum'+i).find('td:first').next().find('select').val(),$('#orderListNum'+i).find('td:first').next().next().find('select').val(),$('#orderListNum'+i).find('td:first').next().next().next().find('input').val())
                    orders.push(order);
                    order = [];
                }
                console.log(orders);

                var clientDetail = [];
                var client = [];
                client.push($('#clientList').val(),$('#orderExpDate').val());
                clientDetail.push(client);

                console.log(clientDetail);

                if(verify === true){
                    if($('#POprice').val() === ""){

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                            }
                        });
                        e.preventDefault();
                        var formData = {
                            orderList:orders,
                            clientInfo:clientDetail,
                        }
                        var tdEdit = '#clientLocation';
                        $.ajax({
                            type: "POST",
                            url: 'liveClientAddOrderUpdate',
                            data: formData,
                            success: function(data){
                                $('#activityUpdate').html('An order has been successfully added to the list!');
                                $('#activityUpdate').show();
                                console.log('Data Error:', data);
                                $("#orderListTable").find('tbody').find('input').val('');
                                $('#clientOrderModal').modal('hide');
                                location.reload();
                            },
                            error: function (data) {
                                console.log('Data Error:', data);
                            }
                        });

                    }
                    else{
                        if ((total_price/po_price)-1 <= 0.1){
                             $.ajaxSetup({
                             headers: {
                             'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                             }
                             });
                             e.preventDefault();
                             var formData = {
                             orderList:orders,
                             clientInfo:clientDetail,
                             }
                             var tdEdit = '#clientLocation';
                             $.ajax({
                             type: "POST",
                             url: 'liveClientAddOrderUpdate',
                             data: formData,
                             success: function(data){
                             $('#activityUpdate').html('An order has been successfully added to the list!');
                             $('#activityUpdate').show();
                             console.log('Data Error:', data);
                             $("#orderListTable").find('tbody').find('input').val('');
                             $('#clientOrderModal').modal('hide');
                             location.reload();
                             },
                             error: function (data) {
                             console.log('Data Error:', data);
                             }
                             });

                        }
                        else{
                            alert('Total price exceeds PO price by over 10% !');
                        }
                    }
                }

                return false;
            }else{
                alert('Sorry there are no order/s placed yet!')
            }
        });
    </script>

    <!--SECTION KEYWORD/S:CLIENT, LIST, INVENTORY, SUPPORT, MODAL-->
    <script type='text/javascript'>
        //  Commented By: John Edel B. Tamani
        //  $(document).on('change', '#clientList', function (e) {
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        //         }
        //     })

        //     e.preventDefault(); 

        //     var formData = {
        //         clientName:$(this).val(),
        //     }
            
        //     var tdEdit = '#clientLocation';

        //     $.ajax({
        //         type: "POST",
        //         url: 'liveClientAddressUpdate',
        //         data: formData,
        //         success: function(data){
        //             if(data.status ==  1){
        //                 console.log(data);
        //                 $(tdEdit).find('option').remove();
        //                 var dataAppend = '<option selected disabled>Choose client location</option>';
                        
        //                 for (var i = 0; i < data.clientLocation.length ; i++){
        //                     dataAppend = dataAppend+'<option>'+data.clientLocation[i].loc_address+'</option>';
        //                 }
        //                 $('#clientLocation').append(dataAppend);
        //             }else{
        //                 $(tdEdit).find('option').remove();
        //                 var dataAppend = '<option selected disabled>N/A</option>';
        //                 $('#clientLocation').append(dataAppend);
        //             }
        //         },   
        //         error: function (data) {
        //             console.log('Data Error:', data);
        //         }
        //     });
        // });
        
        //SECTION KEYWORD/S: ORDER NAME TABLE
        $(document).on('change', '.orderName', function (e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            })

            e.preventDefault(); 

            var formData = {
                productName:$(this).val(),
            }
            
            var tdEdit = this;
            var tdEdit2 = $(this).closest('tr').find('td').find('span').text();

            $.ajax({
                type: "POST",
                url: 'liveClientOrderNameUpdate',
                data: formData,
                success: function(data){
                    console.log(data);

                    if($('#supportNum'+tdEdit2).length){ //Used length to check if the variable exists
                        $('#supportNum'+tdEdit2).remove();
                        count2 = count2 - 1;
                    }
                    $(tdEdit).closest('td').next().find('select').find('option').remove();
                    var dataAppend = '<option selected disabled>Choose product SKU</option>';

                    for (var i = 0; i < data.product.length; i++){
                        dataAppend = dataAppend+'<option>'+data.product[i].pd_sku+'</option>';
                    }
                    $(tdEdit).closest('td').next().find('select').append(dataAppend);
                },   
                error: function (data) {
                    console.log('Data Error:', data);
                }
            });
        });

        //SECTION KEYWORD/S: ORDER SKU TABLE
        var count2 = 1;
        $(document).on('change', '.orderSKU', function (e) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            e.preventDefault(); 

            var formData = {
                productName:$(this).closest('td').prev().find('select').val(),
                productSKU:$(this).val(),
            }
            
            var tdEdit = this;
            var tdEdit2 = $(this).closest('tr').find('td').find('span').text();

            $.ajax({
                type: "POST",
                url: 'liveClientOrderSKUUpdate',
                data: formData,
                success: function(data){
                    console.log(data);

                    $(tdEdit).closest('td').next().find('input').attr('price',data.price);
                    console.log("price: " + $(tdEdit).closest('td').next().find('input').attr('price'));

                    if($('#supportNum'+tdEdit2).length){ //Used length to check if the variable exists
                        $('#supportNum'+tdEdit2).remove();
                        count2 = count2 - 1;
                    }
                    $(tdEdit).closest('td').next().next().find('input').val('');
                    if(data.status == 1){
                        $(tdEdit).closest('td').next().find('input').prop("readonly", false);
                        // $(tdEdit).closest('td').next().find('input').attr('placeholder',data.inventory); Inventory quantity

                        $('#clientOrderSupport').append(
                            '<tr id="supportNum'+count2+'"style="font-size:12px;"><td>'+count2+'</td><td>'+data.productCode+'</td><td><span class="label label-success">'+data.inventory+'</span></td>'+
                            '<td>₱ '+data.price+'</td><td><span class="label label-success">In-Stock</span></td></tr>');
                    }else if(data.status == 2){
                        $(tdEdit).closest('td').next().find('input').prop("readonly", false);
                        // $(tdEdit).closest('td').next().find('input').attr('placeholder',data.inventory); Inventory quantity
                        $('#clientOrderSupport').append(
                            '<tr id="supportNum'+count2+'"style="font-size:12px;"><td>'+count2+'</td><td>'+data.productCode+'</td><td><span class="label label-success">'+data.inventory+'</span></td>'+
                            '<td>₱ '+data.price+'</td><td><span class="label label-warning">Re-stock</span></td></tr>');
                    }else {
                        $(tdEdit).closest('td').next().find('input').val('');
                        $(tdEdit).closest('td').next().find('input').prop("readonly", true);
                        $('#clientOrderSupport').append(
                            '<tr id="supportNum'+count2+'"style="font-size:12px;"><td>'+count2+'</td><td>'+data.productCode+'</td><td><span class="label label-success">'+data.inventory+'</span></td>'+
                            '<td>₱ '+data.price+'</td><td><span class="label label-danger">No Stock</span></td></tr>');
                    }
                    count2 = count2 + 1;
                },
                error: function (data) {
                    console.log('Data Error:', data);
                }
            });

            
        });

        //SECTION KEWORD/S: REMOVE ORDER.
        $(".removeOrder").click(function (e) {
            var verify = confirm("WARNING! Order will be Deleted Permanently! Do you wish to continue?");
            if(verify ==true){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                })
           
                var orderID = $(this).data('orderid');

                $.ajax({
                    type: "DELETE",
                    url: window.location.pathname + '/' + orderID,
                    success: function (data) {
                        $("#order" + orderID).remove();
                        $('#activityUpdate').html('An order has been successfully deleted!');
                        $('#activityUpdate').show();
                        count2 = count2 - 1;
                    },
                    error: function (data) {
                        $("#activityUpdate").toggleClass('alert-success alert-danger');
                        $('#activityUpdate').html('Failed to process request an error occured!');
                        $("#activityUpdate").toggleClass('alert-danger alert-success');
                        $('#activityUpdate').show();
                        console.log('Data Error:', data);
                    }
                });
            }
            return false;
        });

        $(document).on('change', '.addable', function (e) {

            var inputs = document.getElementsByClassName('addable');
            var sum = 0;
            for(ctr = 0;ctr< inputs.length;ctr++){
                var price  = inputs[ctr].getAttribute('price');
                if(price === "x"){
                    alert("no sku selected!");
                }else{
                    sum+= parseFloat(inputs[ctr].value) * parseFloat(price);
                }
            }
            //sum = new Intl.NumberFormat().format(sum);
            $("#totalOrderAmount").html(sum);
            console.log("total "+sum);

        });
    </script>

    <!--SECTION KEYWORD/S: MODAL, UPDATE, ORDER, AJAX, SCRIPT-->
    {{-- <script type='text/javascript'>
       $("#updateOrder").click(function (e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            })

            e.preventDefault(); 

            var formData = {
                expectedDate: $('#exp_date').val(),
            }
            
            var type = "PUT"; 
            var orderID = $('#orderModalID').val();
            var process_url = window.location.pathname + '/' + orderID;

            //Variables of formData for live updating.
            var expectedDate = $('#exp_date').val();

            $.ajax({
                type: type,
                url: process_url,
                data: formData,
                dataType: 'json',
                success: function (data) {
                    $("#expectedDate" + orderID).html(expectedDate);
                    $('#ordermodal').modal('hide')
                 
                    $('#activityUpdate').html('An order has been successfully updated!');
                    $('#activityUpdate').show();
                },
                error: function (data) {
                    $("#activityUpdate").toggleClass('alert-success alert-danger');
                    $('#activityUpdate').html('Failed to process request an error occured!');
                    $("#activityUpdate").toggleClass('alert-danger alert-success');
                    $('#activityUpdate').show();
                    console.log('Data Error:', data);
                }
            });
        });
    </script> --}}

    <!--SECTION KEYWORD/S: DATA-TABLE -->
    <script>
        $(document).ready(function() {
            $('#orderListTable').DataTable();
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
            });
        });
    </script>

</body>

</html>