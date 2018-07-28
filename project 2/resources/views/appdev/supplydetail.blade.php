<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/bewelllogo.ico">
    <title>Bewell</title>
    <!-- Bootstrap Core CSS -->
    <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="../css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="../css/colors/blue.css" id="theme" rel="stylesheet">

    <link href="../plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
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
                    <div class="top-left-part" style="background-color:#BBDEFB; opacity:1;"><a class="logo" href="index.html"><b><img src="../plugins/images/bewelllogos.png"  width="35px" alt="home" /></b><span class="hidden-xs"><img src="../plugins/images/bewelllogol.png" width="110px" alt="home" /></span></a></div>
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
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"><img src="../plugins/images/jet.jpg" alt="user-img" width="36" class="img-circle"><b style="color:white; font-family:Helvetica,Arial,sans-serif;" class="hidden-xs">
                                
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
                        <li> <a href="javascript:void(0)" class="waves-effect"><i style="color:#5F6367;" data-icon="x" class="linea-icon linea-ecommerce fa-fw"></i> <span class="hide-menu">Order<span class="fa arrow"></span></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href={{route('clientorder.index')}}>Client</a> </li>
                                <li> <a href={{route('manufacturerorder.index')}}>Manufacturer</a> </li>
                                <li> <a href={{route('supplierorder.index')}}>Supplier</a> </li>
                            </ul>
                        </li>
                        <li> <a href={{route('schedule.index')}} class="waves-effect"><i style="color:#5F6367;" data-icon="r" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Schedule</span></a>
                            {{-- <ul class="nav nav-second-level">
                                <li> <a href="javascript:void(0)">Client</a> </li>
                                <li> <a href="javascript:void(0)">Manufacturer</a> </li>
                                <li> <a href="javascript:void(0)">Supplier</a> </li>
                            </ul> --}}
                        </li>
                        <li style="background-color: #E9F0FD;"> <a href="javascript:void(0)" class="waves-effect"><i  style="color:#4c87ed;" data-icon="f" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu" style="color:#4c87ed;">Inventory<span class="fa arrow"></span></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href={{route('product.index')}}>Product</a> </li>
                            <li> <a href={{route('supply.index')}}>Raw Material</a> </li>
                            </ul>
                        </li>
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
                    <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                        <h4 class="page-title" style="color:black;">Material Details: {{'RM-'.$supply1->id.' | '.$supply1->sp_name}}</h4>
                    </div>
                    <div class="col-lg-6 col-sm-4 col-md-4 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Inventory</a></li>
                            <li class="active" style="color:#4c87ed;">Raw Material</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <!--MODAL STARTS HERE-->
                <div class="modal fade" id="clientOrderModal" tabindex="-1" role="dialog" aria-labelledby="addClientOrder">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="exampleModalLabel1" style="color:black; font-family:Helvetica,Arial,sans-serif;">Add Order/s</h4>
                                <br>
                            </div>
                            {!! Form::open(array('route'=>'clientorder.store','id'=>'addproductform'))!!}
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="white-box" style="background-color:#F5F5F5; margin-top:10px;">
                                        <h4  style="font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Manufacturer Material Order/s</b></h4>
                                        <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Select the manufacturer's material order based on the list.</span>
                                        <br>
                                        <label for="order" class="control-label"> <button style="margin-top:10px; font-size:12px; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); font-family:Helvetica,Arial,sans-serif; width:130px; height:30px;"class="btn btn-success btn-rounded waves-effect waves-light productadd" type="button"><span class="btn-label"><i class="fa fa-plus-square"></i></span>Add Material</button></label>
                                        <div class="table-responsive" style="margin-top:10px;">
                                        <table class="table color-bordered-table info-bordered-table" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); font-family:Helvetica,Arial,sans-serif;">
                                            <thead>
                                                <tr style="font-size:12px; font-weight:700; ">

                                                    {{--
                                                    <th></th> --}}
                                                    {{-- <th>Product Code</th> --}}
                                                    <th>Order #</th>
                                                    <th>Material Name</th>
                                                    <th>SKU</th>
                                                    {{--
                                                    <th>Grams</th> --}} {{--
                                                    <th>Price</th> --}} {{--
                                                    <th>Current Qty</th> --}}
                                                    <th>Order Amount (Boxes)</th>
                                                    <th><i class="fa fa-gear"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="addproduct">
                                                            
                                                                <tr style="color:black;">
                                                                        {{-- @if(isset($products)) --}}
                                                                        {{-- <td>PR-0001</td> --}}
                                                                        <td><span class="label label-info">1</span></td>
                                                                        <td> <select style="font-size:12px;" style="font-size:12px;" class="form-control" name="product[]" class="product"><option>BeWell-C</option> </td>
                                                                        <td>
                                                                            <select style="font-size:12px;" class="form-control" name="gram[]" class="gram">
                                                                                <option>1000 grams</option>
                                                                                <option>500 grams</option>
                                                                                <option>250 grams</option>
                                                                            </select>
                                                                        </td>
                                                                        <td><input style="font-size:12px;" class="form-control" data-mask="9,999 ONLY" placeholder="" name="orderqty[]" type="text" class="orderqty"></td>
                                                                        <td><i style="font-size:20px; color:#E53935; " class="linea linea-aerrow removeproduct" data-icon="&#xe04a;">  </td>
                                                                </tr>
                                                            <tr style="color:black;">
                                                                    {{-- @if(isset($products)) --}}
                                                                    {{-- <td>PR-0001</td> --}}
                                                                    <td><span class="label label-info">2</span></td>
                                                                    <td> <select style="font-size:12px;" style="font-size:12px;" class="form-control" name="product[]" class="product"><option>LiverGuard</option> </td>
                                                                    <td>
                                                                        <select style="font-size:12px;" class="form-control" name="gram[]" class="gram">
                                                                            <option>1000 grams</option>
                                                                            <option>500 grams</option>
                                                                            <option>250 grams</option>
                                                                        </select>
                                                                    </td>
                                                                    <td><input style="font-size:12px;" readonly class="form-control" data-mask="9,999 ONLY" placeholder="" name="orderqty[]" type="text" class="orderqty"></td>
                                                                    <td><i style="font-size:20px; color:#E53935; " class="linea linea-aerrow removeproduct" data-icon="&#xe04a;">  </td>
                                                            </tr>

                                                            <tr style="color:black;">
                                                                    {{-- @if(isset($products)) --}}
                                                                    {{-- <td>PR-0001</td> --}}
                                                                    <td><span class="label label-info">3</span></td>
                                                                    <td> <select style="font-size:12px;" class="form-control" name="product[]" class="product"><option>BC-Calcium</option> </td>
                                                                    <td>
                                                                        <select style="font-size:12px;" class="form-control" name="gram[]" class="gram">
                                                                            <option>1000 grams</option>
                                                                            <option>500 grams</option>
                                                                            <option>250 grams</option>
                                                                        </select>
                                                                    </td>
                                                                    <td><input style="font-size:12px;" class="form-control" data-mask="9,999 ONLY" placeholder="" name="orderqty[]" type="text" class="orderqty"></td>
                                                                    <td><i style="font-size:20px; color:#E53935; " class="linea linea-aerrow removeproduct" data-icon="&#xe04a;">  </td>
                                                            </tr>

                                                            
                                                        </tbody>
                                                    </table>
                                                {{-- <h4  style="margin-top:20px; font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif; text-transform:uppercase;"><b>Ordered Products: 1 product/s only</b></h4>
                                                <h4  style="font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif; text-transform:uppercase;"><b> </b></h4> --}}
                                                <h4  style="margin-top:10px; font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif; text-transform:uppercase;"><b>Total Price: ₱100.00 </b></h4>
                                                </div>
                                                <hr>
                                                    <h4  style="font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Material Inventory Support</b></h4>
                                                    {{-- <h3 class="box-title">Product Inventory Support</h3> --}}
                                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: This is the referenced inventory list for the manufacturer's ordered material/s.</span>
                                                    
                                                    <table class="table full-color-table full-info-table hover-table" data-height="250" data-mobile-responsive="true" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); margin-top:10px; font-family:Helvetica,Arial,sans-serif;">
                                                            <thead>
                                                                <tr style="font-size:12px; font-weight:700;">
                                                                    <th>Order #</th>
                                                                    {{--
                                                                    <th></th> --}}
                                                                    <th>Product Code</th>
                                                                    <th>Available</th>
                                                                    {{--
                                                                    <th>Grams</th> --}} {{--
                                                                    <th>Price</th> --}} {{--
                                                                    <th>Current Qty</th> --}}
                                                                    <th>Unit Price</th>
                                                                    <th>Status</th>
                                                                    {{-- <th><i class="fa fa-gear"></th> --}}
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="addproduct">
                                                                            
                                                                            <tr style="font-size:12px;">
                                                                               <td>1</td>
                                                                               <td>PR-0001</td>
                                                                               <td><span class="label label-success">70</span></td>
                                                                               <td>₱100.00</td>
                                                                               <td><span class="label label-success">On-stock</span></td>
                                                                            </tr>

                                                                            <tr style="font-size:12px;">
                                                                                <td>2</td>
                                                                                <td>PR-0002</td>
                                                                                <td><span class="label label-danger">0</span></td>
                                                                                <td>₱70.00</td>
                                                                                <td><span class="label label-danger">No Stock</span></td>
                                                                            </tr>

                                                                            <tr style="font-size:12px;">
                                                                                    <td>3</td>
                                                                                    <td>PR-0003</td>
                                                                                    <td><span class="label label-success">20</span></td>
                                                                                    <td>₱120.00</td>
                                                                                    <td><span class="label label-success"> Available</span></td>
                                                                                </tr>
                
                                                                            
                                                                        </tbody>
                                                                    </table>
                                                                    
                                                </div>
                                                
                                                <label for="client" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Payment Status:</b></label>
                                                <select name="client" class="form-control" id="client" style="margin-bottom:10px;">
                                                                @if(isset($clients))
                                                                    @foreach ($clients as $client)
                                                                        <option>{{$client->cl_name}}</option>
                                                                    @endforeach
                                                                @endif
                                                                
                                                </select>
                                                <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Choose the manufacturer's payment status on their ordered material/s. <b style="color:#E53935;">*Required</b></span>
                                            </br>
                                        <label for="client" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Paid Amount:</b></label>
                                        </br>
                                        <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the current paid amount of the manufacturer. <b style="color:#E53935;">*Required</b></span>
                                        <input style="margin-top:10px; " type="text" class="form-control" data-mask="PHP 9,999,999.00 ONLY"/>
                                        <h4  style="margin-top:10px; font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif; text-transform:uppercase;"><b>Grand Total: ₱100.00 </b></h4>
                                               
                                        </div>

                                    {{-- <h1>Total:</h1> --}}
                                        
                                </div>
                                <div class="modal-footer">
                                    {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> --}}
                                    <button id="submitorder" class="btn btn-danger btn-md btn-block text-uppercase waves-effect waves-light" style="background-color: #4c87ed; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);" type="submit">Submit</button>
                                </div>
                            {!!Form::close()!!}
                            
                        </div>
                    </div>
                </div>

                {{-- <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="sysmodal2">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="exampleModalLabel1">Edit Order</h4> </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="recipient-name" class="control-label">Customer</label>
                                            <input type="dropdown" class="form-control" id="recipient-name1"> </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div> --}}


                
                        {{-- <div id="statusModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"></button>
                                        <h4 class="modal-title"></h4>
                                    </div>
                                    <div class="modal-body">
                                            <div class="form-group">
                                                <label for="orderStatus">Order Status:</label>
                                                <select name="orderStatus" class="form-control" id="orderStatus">
                                                    <option>Processing</option>
                                                    <option>Scheduled</option>
                                                    <option>Delivering</option>
                                                    <option>Delivered</option>
                                                    <option>Complete</option>
                                                    <option>Cancelled</option>
                                                </select>
                                            </div>

                                            <input id="orderID" type="hidden" name="orderID">
                                            
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-warning" data-dismiss="modal">
                                                <span class='glyphicon glyphicon-remove'></span> Close
                                            </button>
                                            <button type="submit" class="btn btn-danger">
                                                    <span class='glyphicon glyphicon-remove'></span> Submit
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> --}}
                    
                <!--MODAL ENDS HERE-->

                <div class="row">
                        <div class="col-md-4 col-xs-12 col-sm-6">
                            <div class="white-box text-center bg-purple">
                                <h1 class="text-white counter">120</h1> <!-- select * from supplier_orders where material id = this material -->
                                <p class="text-white">Total On-order Material/s</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12 col-sm-6">
                            <div class="white-box text-center bg-info">
                                <h1 class="text-white counter">231</h1> <!-- (select sp_qty from bewelldb.supply) - (select sum(items_sent) from manufacturer_order_details where raw material = this material and status != delivering or delivered) -->
                                <p class="text-white">Total Available Material/s</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12 col-sm-6">
                            <div class="white-box text-center">
                                <h1 class="counter">81</h1> <!-- select sum(items_sent) from manufacturer_order_details where status != delivering or delivered) --> 
                                <p class="text-muted">Total Allocated Material/s</p>
                            </div>
                        </div>
                        {{-- <div class="col-md-3 col-xs-12 col-sm-6">
                            <div class="white-box text-center bg-success">
                                <h1 class="text-white counter">₱3,000.00</h1>
                                <p class="text-white">Total Investment Cost</p>
                            </div>
                        </div> --}}
                    </div>
                    
              
                  <div class="col-lg-6 col-sm-6">
                      <div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h4 style="color:black; margin-bottom:7px;">Order Functions</h4>
                                    <div class="list-group" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                        <button type="button" class="list-group-item"><span><i style="color:#1565C0; margin-right:5px;" data-icon="@" class="linea-icon linea-basic"></i><a href={{route('clientorder.index')}}></span>Manage Client Order</button>
                                        <button type="button" class="list-group-item"><span><i style="color:#1565C0; margin-right:5px;" data-icon="@" class="linea-icon linea-basic"></i><a href={{route('manufacturerorder.index')}}></span>Manage Manufacturer Order</button>
                                        <button type="button" class="list-group-item"><span><i style="color:#1565C0; margin-right:5px;" data-icon="f" class="linea-icon linea-basic"></i><a href={{route('supplierorder.index')}}></span>Manage Supplier Order</button>
                                    </div>
                                </div>
                      </div>

                      {{-- <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                
                                    <div class="white-box" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                        <h3 class="box-title m-b-0" style="color:black;">Manufacturer Details</h3>
                                        <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: This section contains the contact information of the manufacturer.</span>
                                        <div class="row" style="margin-top:10px; ">
                                                <div class="col-md-6 col-xs-6 b-r"> <strong>Manufacturer</strong>
                                                    <br>
                                                    <p class="text-muted">Acadia Pharmaceuticals</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 b-r"> <strong>Contact Number</strong>
                                                    <br>
                                                    <p class="text-muted">+63 945 326 7890</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 b-r"> <strong>Email</strong>
                                                    <br>
                                                    <p class="text-muted">Acadia Pharmaceuticals@gmail.com</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6"> <strong>Location</strong>
                                                    <br>
                                                    <p class="text-muted">17 Venus Ave Tagum City, Philippines</p>
                                                </div>
                                            </div>
                                    </div>
                            </div>
                        </div> --}}
                      {{-- <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                
                                    <div class="white-box" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                        <h3 class="box-title m-b-0" style="color:black;">Order Payment Report</h3>
                                        <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: This section contains the payment updates for the manufacturer order/s.</span><br>
                                        
                                    <button style="margin-top:10px; " class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#clientOrderModal" type="button"><span class="btn-label"><i data-icon="1" class="linea linea-ecommerce"></i></span>Add Payment</button>
                                        <p class="text-muted m-b-30"></p>
                                        <div class="table-responsive">
                                                <table id="myTable2" class="table table-striped">
                                                    <thead>
                                                        <tr style="color:black;">
                                                            <th>#</th>
                                                            <th>Order #</th>
                                                            <th>Grand Total</th>
                                                            <th>Paid</th>
                                                            <th>Balance</th>
                                                            <th>Status</th>
                                                            <th><i class="fa fa-gear"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                            <tr>
                                                                <td>1</td>
                                                                <td>MLOD-0001</td>
                                                                <td>₱49,291</td>
                                                                <td>₱20,000 </td>
                                                                <td>₱29,291</td>
                                                                
                                                                <td><span class="label label-warning">Unpaid</span></td>
                                                                <td>
                                                                        <i style="color:#4c87ed;" class="fa fa-edit">
                
                                                                                <i style="margin-left:5px; color:#E53935;" class="fa fa-trash-o removeorder">
                                                                        
                                                                    </td>
                                                             
                                                               
                                                            </tr> 
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                    <div class="white-box" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                        
                                        {{-- <h3 class="box-title">Ordered Products</h3> --}}
                                        <h3 class="box-title m-b-0" style="color:black;">List of Material/s</h3>
                                        <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: This is section contains all the inventory material/s. </span>
                                        <br>
                                        <button style="margin-top:10px;"  class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#clientOrderModal" type="button"><span class="btn-label"><i class="fa fa-plus-square-o"></i></span>Add Supply</button>
                                        {{-- <p class="text-muted m-b-30"></p> --}}
                                        <hr>
                                        <h3 style="font-weight:700; font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;">Order Details: CLOD-1</h3>
                                        <div class="table-responsive">
                                                <table id="myTable" class="table table-striped">
                                                    <thead>
                                                        <tr style="color:black;">
                                                            <th>Supply #</th>
                                                            <th>Code</th>
                                                            <th>Qty (Boxes)</th>
                                                            <th>Spoilage Date</th>
                                                            <th>Status</th>
                                                            <th><i class="fa fa-gear"></th>
                                                            
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                            <tr>
                                                                {{-- <td>PR-0001</td> --}}
                                                                <td>SP-0001</td>
                                                                <td>BC-C500G</td>
                                                                <td>100</td>
                                                                <td>2018-05-25</td>
                                                                <td><span class="label label-success">Processing</span></td>
                                                                <td>
                                                                        <i style="color:#4c87ed;" class="fa fa-edit">
                
                                                                                {{-- {!! Form::open(['route'=>['clientorder.destroy',$order->id],'method'=>'DELETE','enctype'=>'multipart/form-data','class'=>'deleteOrder']) !!} --}}
                                                                                <i style="margin-left:5px; color:#E53935;" class="fa fa-trash-o removeorder">
                                                                                {{-- {!!Form::close()!!} --}}
                                                                        
                                                                    </td>
                                                               
                                                            </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                </div>
                         
                        <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    
                                        <div class="white-box" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                            <h3 class="box-title m-b-0" style="color:black;">Material Update History</h3>
                                            <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: This section contains all updates on this material.</span>
                                            <p class="text-muted m-b-30"></p>
                                        {{-- <hr> --}}
                                            <h3 style="font-weight:700; font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;">Material Details: {{'RM-'.$supply1->id}}</h3>
                                            <div class="table-responsive">
                                                    <table id="myTable4" class="table table-striped">
                                                        <thead>
                                                            <tr style="color:black;">
                                                                <th>#</th>
                                                                <th>User</th>
                                                                <th>Update</th>
                                                                {{-- <th>Notification</th> --}}
                                                                <th>Timestamp</th>
                                                                {{-- <th></th> --}}
                                                                {{-- <th></th> --}}
                                                                {{-- <th><i class="fa fa-gear"></th> --}}
                                                                {{-- <th><i class="fa fa-gear"></th> --}}
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       
                                                                <tr>
                                                                    {{-- <td><a href={{route('clientorder.show',$order->id)}}>{{'CLOD-'.$order->id}}</a></td>
                
                                                                    <td>{{$order->fromClient->cl_name}}</td>
                                                                    <td>{{$order->clod_date}}</td> 
                                                                    <td>2018-04-17</td> 
                                                                    <td>2018-04-17</td>  --}}
                
                                                                    {{-- <td><span class="label label-info">1</span></td> --}}
                                                                    <td>1</td>
                                                                    <td>PrivateAirJET</td>
                                                                    <td><span class="label label-info">Added 5 New Client Orders.</span></td>
                                                                    <td>2018-04-18 09:42:37</td>
                                                                    {{-- <td>Just Now!</td> --}}
                                                                 
                                                                   
                                                                </tr> 
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
                                    
                                    {{-- <h3 class="box-title">Ordered Products</h3> --}}
                                    <h3 class="box-title m-b-0" style="color:black;">Material Assignment/s</h3>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: This is the section that assigns supplies to a specific material incentory. </span>
                                    <br>
                                    <button style="margin-top:10px;"  class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#clientOrderModal" type="button"><span class="btn-label"><i class="fa fa-plus-square-o"></i></span>Assign Supply</button>
                                    {{-- <p class="text-muted m-b-30"></p> --}}
                                    <hr>
                                    <h3 style="font-weight:700; font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;">Order Details: CLOD-1</h3>
                                    <div class="table-responsive">
                                            <table id="myTable" class="table table-striped">
                                                <thead>
                                                    <tr style="color:black;">
                                                        <th>Material #</th>
                                                        <th>Supply #</th>
                                                        <th>Qty (Boxes)</th>
                                                        <th>On-Hand</th>
                                                        <th>Available</th>
                                                        <th>Allocated</th>
                                                        <th>Spoilage Date</th>
                                                        {{-- <th>Status</th> --}}
                                                        <th><i class="fa fa-gear"></th>
                                                        
                                                </tr>
                                            </thead>
                                            <tbody>
                                                        <tr>
                                                            <td>RW-0001</td>
                                                            <td>SP-0001</td>
                                                            <td>400</td>
                                                            <td>200</td>
                                                            <td>100</td>
                                                            <td>100</td>
                                                            <td>2018-05-25</td>
                                                            {{-- <td><span class="label label-success">Processing</span></td> --}}
                                                            <td>
                                                                    <i style="color:#4c87ed;" class="fa fa-edit">
            
                                                                            {{-- {!! Form::open(['route'=>['clientorder.destroy',$order->id],'method'=>'DELETE','enctype'=>'multipart/form-data','class'=>'deleteOrder']) !!} --}}
                                                                            <i style="margin-left:5px; color:#E53935;" class="fa fa-trash-o removeorder">
                                                                            {{-- {!!Form::close()!!} --}}
                                                                    
                                                                </td>
                                                           
                                                        </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            </div>
                    <div class="row">
                    <div class="col-lg-12">
                    <div class="white-box" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                        <h3 class="box-title m-b-0" style="color:black;">Material-Supply Report</h3>
                                <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: This is the section to generate supplies report.</span>
                                <br>
                        <button style="margin-top:10px;" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#clientOrderModal" type="button"><span class="btn-label"><i class="linea linea-basic" data-icon="&#xe00b;"></i></span>Print Material-Supply Report (MSR)</button>          
                        {{-- <button style="margin-top:10px;" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#clientOrderModal" type="button"><span class="btn-label"><i class="linea linea-basic" data-icon="|"></i></span>Update Raw Material Inventory</button>                         --}}
                                      
                        {{-- <p class="text-muted m-b-30"></p>
                         --}}
                         <hr>
                         <h3 style="font-weight:700; font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;">Material Details: RW-0001</h3>
                         
                           <table class="table table-bordered">
                               <thead style="color:black;">
                                   <tr style="color:black;">
                                        <th>#</th>
                                       <th>Supply #</th>
                                       <th>Qty (Boxes)</th>
                                       <th>On-Hand</th>
                                       <th>Available</th>
                                       {{-- <th>Allocated</th> --}}
                                       {{-- <th>Gross Total Price</th> --}}
                                       {{-- <th>Discount</th> --}}
                                       {{-- <th>Grand Total Price</th> --}}
                                       {{-- <th>Profit</th> --}}
                                   </tr>
                               </thead>
                               <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>SP-0001</td>
                                        <td>300</td>
                                        <td>200</td>
                                        <td>150</td>
                                        <td>200</td>
                                    </tr>
                                    <tr>
                                            <td>1</td>
                                            <td>SP-0001</td>
                                            <td>300</td>
                                            <td>200</td>
                                            <td>150</td>
                                            <td>200</td>
                                        </tr> <tr>
                                                <td>1</td>
                                                <td>SP-0001</td>
                                                <td>300</td>
                                                <td>200</td>
                                                <td>150</td>
                                                <td>200</td>
                                            </tr> <tr>
                                                    <td>1</td>
                                                    <td>SP-0001</td>
                                                    <td>300</td>
                                                    <td>200</td>
                                                    <td>150</td>
                                                    <td>200</td>
                                                </tr>

                               </tbody>
                           </table>
                           <hr>
                           
        </div>
                           
                    </div>
                </div>
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
                                    {{--
                                    <ul class="m-t-20 chatonline">
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
                    <footer class="footer text-center"> 2018 &copy; Bewell Nutraceutical Corporation</footer>
                </div>
                <!-- /#page-wrapper -->
            </div>


            <!-- /#wrapper -->
            <!-- jQuery -->
            <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap Core JavaScript -->
            <script src="../bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- Menu Plugin JavaScript -->
            <script src="../../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
            <!--slimscroll JavaScript -->
            <script src="../js/jquery.slimscroll.js"></script>
            <!--Wave Effects -->
            <script src="../js/waves.js"></script>
            <!-- Custom Theme JavaScript -->
            <script src="../js/custom.min.js"></script>
            <script src="../js/mask.js"></script>
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
                $(document).ready(function() {
                    $('#myTable').DataTable();
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
                $(document).ready(function() {
                    $('#myTable2').DataTable();
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

                  $(document).ready(function() {
                    $('#myTable4').DataTable();
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



                 $(document).ready(function() {
                    $('#myTable3').DataTable();
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
            <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
            <!-- Sweet-Alert  -->
            <script src="../plugins/bower_components/sweetalert/sweetalert.min.js"></script>
            <script src="../plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js"></script>

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

                $(document).on('click', '.removeorder', function() {
                    $( ".deleteOrder" ).submit();
                    var verify = confirm("Do you wish to delete this order?");
                    return verify;

                });

                $(document).on('click', '.statusSubmit', function() {
                    var verify = confirm("Do you wish to edit this order?");
                    return verify;
                });

                  $(document).on('click', '#submitorder', function() {
                    var verify = confirm("Do you wish to add this order to this client?");
                    return verify;
                });

                // $(document).on('click', '.statusSubmit', function() {
                //     var verify = confirm("Do you wish to update the status of this order?");
                //     return verify;

                //     if(verify){

                //     }
                // });

                // $('.updatestatusform').submit(function() {
                //     var verify = confirm("Do you wish to update the status of this order?");
                //     return verify;
                // });
            </script>
</body>

</html>