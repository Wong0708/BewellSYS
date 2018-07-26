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
    <!-- color CSS -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">

    <link href="plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">

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
                        <li> <a href={{route('schedule.index')}} class="waves-effect"><i style="color:#5F6367;" data-icon="r" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Schedule</span></a>

                        </li>
                        <li style="background-color: #E9F0FD;"> <a href="javascript:void(0)" class="waves-effect"><i style="color:#4c87ed;" data-icon="f" class="linea-icon linea-basic fa-fw"></i> <span style="color:#4c87ed;" class="hide-menu">Inventory<span class="fa arrow"></span></span></a>
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
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title" style="color:black;">Product Inventory</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Inventory</a></li>
                            <li class="active" style="color:#4c87ed;">Product</li>
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
                                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> --}}
                                    <h4 class="modal-title" id="exampleModalLabel1" style="color:black; font-family:Helvetica,Arial,sans-serif;">Add New Product/s</h4>
                                </div>
                                {!! Form::open(array('route'=>'product.store','id'=>'addproductform'))!!}
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="client" class="control-label" style="color:black; font-family:Helvetica,Arial,sans-serif;"><b>Product Name:</b></label>
                                        <input type="text" class="form-control" name="productname[]" required/>
                                        <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Type the name of the desired product.</span>
                                        
    
                                        <br>
    
                                        <label for="code" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Product Code:</b></label>
                                        <input type="text" class="form-control" data-mask="aa-a9999G" name="productcode[]" required/>
                                        <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Type the code for the desired product. Ex: BC-C1000G</span>
                                         <br>
                                        <label for="sku" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Material SKU:</b></label>
                                        <input type="text" class="form-control" data-mask="9999 GRAMS" name="SKU[]" required/>
                                        <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Type the SKU for the desired product. Ex: 1000 GRAMS</span>

                                        <div class="white-box" style="background-color:#F5F5F5; margin-top:10px;">
                                            <h4  style="font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Product Initial Inventory Detail/s</b></h4>
                                            <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: This section initialize the inventory of the desired product.</span>
                                            <br>
                                            <!-- Add RM button -->
                                            <label for="order" class="control-label"> <button style="margin-top:10px; font-size:12px; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); font-family:Helvetica,Arial,sans-serif; width:130px; height:30px;"class="btn btn-success btn-rounded waves-effect waves-light productadd" type="button"><span class="btn-label"><i class="fa fa-plus-square"></i></span>Add Material</button></label>
                                            <a class="mytooltip" href="javascript:void(0)"><i class="fa fa-question-circle"></i><span class="tooltip-content3">Click this button to add a raw material for this product! </span> </a>
                                            <table class="table-bordered" data-height="250" data-mobile-responsive="true" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); font-family:Helvetica,Arial,sans-serif; margin-top:10px; width:100%;">
                                                <thead>
                                                    <tr>

                                                        {{--<th></th> --}}
                                                        <th style="color:black; font-family:Helvetica,Arial,sans-serif;">Raw Material Name</th>
                                                        <th style="color:black; font-family:Helvetica,Arial,sans-serif;">SKU</th>
                                                        {{--<th>Grams</th> --}} 
                                                        {{--<th>Price</th> --}} 
                                                        {{--<th>Current Qty</th> --}}
                                                        <th style="color:black; font-family:Helvetica,Arial,sans-serif;">Quantity</th>
                                                        <th><i class="fa fa-gear"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="addproduct">
                                                                
                                                                <tr>
                                                                    @if(isset($supply))
                                                                    {{-- <td></td> --}}
                                                                    <td> <select name="material[]" class="form-control material" required>@foreach ($supply as $supplies)<option>{{$supplies->sp_name}}</option>@endforeach </td>
                                                                    <td> <select name="gram[]" class="form-control gram" required>
                                                                    @foreach ($supply as $supplies)<option>{{$supplies->sp_sku}}</option>@endforeach @endif </td>
                                                                    <td><input name="quantity[]" type="number" value="0" class="form-control quantity" min="1"></td>
                                                                    <td><i class="fa fa-times removeproduct"></td>
                                                                </tr> 
                                                            </tbody>
                                            </table>
                                            <div class="table-responsive" style="margin-top:10px;">
                                            <table class="table color-bordered-table info-bordered-table" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); font-family:Helvetica,Arial,sans-serif;">
                                                <thead>
                                                    <tr style="font-size:12px; font-weight:700; ">
    
                                                        {{--
                                                        <th></th> --}}
                                                        {{-- <th>Product Code</th> --}}
                                                                {{-- <th></th> --}}
                                                                <th>Inventory</th>
                                                                <th>Value</th>
                                                                {{--
                                                                <th>Grams</th> --}} {{--
                                                                <th>Price</th> --}} {{--
                                                                <th>Current Qty</th> --}}
                                                                {{-- <th>Order Amount (Boxes)</th> --}}
                                                                {{-- <th><i class="fa fa-gear"></th> --}}
                                                            </tr>
                                                            </thead>
                                                            <tbody id="addproduct" style="font-size:12px;">
                                                                
                                                                <tr>
                                                                    <td>On-Hand</td>
                                                                    <td><input type="text" class="form-control" name="onhand[]" data-mask="9999"/></td>
                                                                </tr>
    
                                                                <tr>
                                                                    <td>On-order</td>
                                                                    <td><input type="text" class="form-control" name="onorder[]" data-mask="9999"/></td>
                                                                </tr>
                                                            
                                                                <tr>
                                                                    <td>Allocated</td>
                                                                    <td><input type="text" class="form-control" name="allocated[]" data-mask="9999"/></td>
                                                                </tr>
    
                                                                <tr>
                                                                    <td>Available</td>
                                                                    <td><input type="text" class="form-control" name="available[]" data-mask="9999"/></td>
                                                                </tr>
    
                                                                {{--<tr>
                                                                    <td>Min</td>
                                                                    <td><input type="text" class="form-control" name="minimum[]" data-mask="9999"/></td>
                                                                </tr>--}}
    
                                                                <tr>
                                                                    <td>Max</td>
                                                                    <td><input type="text" class="form-control" name="maximum[]" data-mask="9999"/></td>
                                                                </tr>
    
                                                                <tr>
                                                                    <td>ROP</td>
                                                                    <td><input type="text" class="form-control" name="ROP[]" data-mask="9999"/></td>
                                                                </tr>
    
                                                                <tr>
                                                                    <td>Price</td>
                                                                    <td><input type="text" class="form-control" name="price[]" data-mask="9999"/></td>
                                                                </tr>
        
    
                                                                
                                                            </tbody>
                                                        </table>
                                                    {{-- <h4  style="margin-top:20px; font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif; text-transform:uppercase;"><b>Ordered Products: 1 product/s only</b></h4>
                                                    <h4  style="font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif; text-transform:uppercase;"><b> </b></h4> --}}
                                                    {{-- <h4  style="margin-top:10px; font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif; text-transform:uppercase;"><b>Total Price: ₱100.00 </b></h4> --}}
                                                    </div>
                                                        
                                                                        
                                                    </div>
                                                    
                                                   
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
               

                        <div id="statusModal" class="modal fade" role="dialog">
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
                        </div>
                <!-- Productdetail modal -->
                <div id="moreModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"></button>
                                <center ><b><h2 class="modal-title" style="display: inline;" id="itemName"></h2></b></center>
                            </div>
                            <div class="modal-body">
                                <span class="text-muted" id="updated" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;"></span>
                                <br><br>

                                <label for="client" class="control-label" style="color:black; font-family:Helvetica,Arial,sans-serif;"><b>Product Status:</b></label>
                                <input type="text" class="form-control" id="productStatus" value="" readonly/>

                                <label for="client" class="control-label" id="expiryLabel" style="color:black; display: inline; font-family:Helvetica,Arial,sans-serif;"><b>Expiration Date:</b></label>

                                <a class="mytooltip" href="javascript:void(0)" style="display: inline;">
                                    <i class="fa fa-question-circle"></i><span class="tooltip-content3" id="expiryTip">
                                        Expiry Date: </span>
                                </a>
                                <input type="text" class="form-control" id="expiryDate" value="" readonly/>
                                <div class="row" style="margin-top: 40px">
                                    <div class="col-md-4 col-xs-12 col-sm-6">
                                        <div class="white-box text-center bg-purple">
                                            <h1 class="text-white counter">120</h1>
                                            <p class="text-white">Total On-order Material/s</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12 col-sm-6">
                                        <div class="white-box text-center bg-info">
                                            <h1 class="text-white counter">231</h1>
                                            <p class="text-white">Total Available Material/s</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12 col-sm-6">
                                        <div class="white-box text-center bg-success">
                                            <h1 class="text-white counter">81</h1>
                                            <p class="text-white">Total Allocated Material/s</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning" data-dismiss="modal">
                                    <span class='glyphicon glyphicon-remove'></span> Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--MODAL ENDS HERE-->
                <div class="row" style="font-family:Helvetica,Arial,sans-serif;">
                    <div class="col-sm-12">
                        <div class="white-box">
                            @if(Session::has('success'))
                                <div class="alert alert-success"> {{Session::get('success')}} </div>
                      
                              
                              @endif
                            <h3 class="box-title m-b-0" style="color:black;">LIST OF ALL PRODUCTS INVENTORY</h3>
                            {{-- <div class="col-sm-12" style="background-color:red;"> --}}
                                <button class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#clientOrderModal" type="button"><span class="btn-label"><i class="fa fa-plus-square-o"></i></span>Add Product</button>
                                                    

                                <p class="text-muted m-b-30"></p>
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped">
                                        <thead>
                                            <tr style="color:black;">
                                                <th>Product #</th>
                                                <th>Item Code</th>
                                                <th>Product Name</th>
                                                <th>SKU</th>
                                                <th>On-hand</th>
                                                <th>On-order</th>
                                                <th>Allocated</th>
                                                <th>Available</th>
                                                <th>Max</th>
                                                <th>ROP</th>
                                                <th>Price</th>
                                                <th></th>
                                                <th></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(isset($products))
                                            @foreach ($products as $product)
                                            <tr>
                                                <td><a>{{'PR-'.$product->id}}</a></td>
                                                <td><a href="" class="itemStat" data-toggle="modal" data-target="#moreModal"
                                                       data-prodname="{{$product->pd_name}}"
                                                       data-updated="{{$product->updated_at}}"
                                                       data-expiry="{{$product->pd_expiryDate}}"
                                                       data-status="{{$product->pd_status}}"
                                                       data-datediff="{{$product->datediff}}">
                                                        {{$product->pd_code}}
                                                    </a></td>
                                                <td>{{$product->pd_name}}</td>
                                                <td>{{$product->pd_sku}}</td>
                                                <td>{{$product->pd_qty}}</td>
                                                <td>100</td>
                                                <td>100</td>
                                                <td>100</td>
                                                <td>{{$product->pd_maxQty}}</td>
                                                <td>{{$product->pd_reorder}}</td>
                                                <td>{{'₱'.$product->pd_price}}</td>
                                                <td>
                                                    <i pdid="{{$product->id}}" style="color:#4c87ed;" data-toggle="modal" data-target="#editModal" class="fa fa-edit editz">
                                                </td>
                                                <td>
                                                    {!! Form::open(['route'=>['product.destroy',$product->id],'method'=>'DELETE','enctype'=>'multipart/form-data','class'=>'deleteOrder']) !!}
                                                    <i style="margin-left:5px; color:#E53935;" class="fa fa-trash-o removeorder" ></i>
                                                    {!!Form::close()!!}
                                                </td>
                                                {{-- <td>  --}}
                                            </tr>
                                            <!-- edit modal -->
                                            <div  class="modal fade" id="editModal" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"></button>
                                                            <center ><b><h2 class="modal-title" style="display: inline;">Edit Product Status</h2></b></center>
                                                    </div>
                                                    {!! Form::open(['route'=>['product.update',$product->id],'method'=>'PUT','enctype'=>'multipart/form-data'])!!}
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="productStatuss">Product Status:</label>
                                                            <select name="productStatuss" class="form-control" id="productStatuss">
                                                                <option>In Stock</option>
                                                                <option>Out of Stock</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <input id="pd_id" type="hidden" name="pd_id">
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

                $('.itemStat').click(function () {
                    var datediff = parseInt($(this).data('datediff'));

                    $('#itemName').html($(this).data('prodname'));
                    $('#updated').html("Last updated at "+$(this).data('updated'));
                    $('#productStatus').val($(this).data('status'));
                    /*if($('#productStatus') == "In Stock")
                    {
                        $('#productStatus').css('color', 'green');
                    }
                    else if($('#productStatus') == "Out of Stock")
                    {
                        $('#productStatus').css('color', 'red');
                    }*/
                    $('#expiryDate').val($(this).data('expiry'));
                    
                    if(datediff<0){
                        $('#expiryTip').html("This item is expired.");
                        $('#expiryLabel').css('color', 'red');
                    }
                    else if(datediff>0 && datediff<=3){
                        $('#expiryTip').html("This item is nearly expired. Expiration in"+ datediff +" days");
                        $('#expiryLabel').css('color', 'blue');
                    }
                    else if(datediff>=4){
                        $('#expiryTip').html("This item is in good condition.");
                        $('#expiryLabel').css('color', 'green');
                    }
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
                        '<td> <select name="material[]" class="form-control material" required>@if(isset($supply))@foreach ($supply as $supplies)<option>{{$supplies->sp_name}}</option>@endforeach</td>' +
                        '<td><select name="gram[]" class="form-control gram" required>@foreach ($supply as $supplies)<option>{{$supplies->sp_sku}}</option>@endforeach @endif</td>'+'<td><input name="quantity[]" type="number" value="0" class="form-control quantity" min = "1"></td>' +
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
                $(document).on('click', '.editz', function() {
                    
                    $("#pd_id").val($(this).attr('pdid'));
                    alert($("#pd_id").val());
                });
                 $(document).on('click', '.removeorder', function() {
                    var verify = confirm("Do you wish to delete this product account?");
                    
                    if (verify) { 
                        $(this).closest('.deleteOrder').submit();
                    }
                    return verify;

                });

                $(document).on('click', '.statusSubmit', function() {
                    var verify = confirm("Do you wish to edit this order?");
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