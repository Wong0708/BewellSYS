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
                                <li> <a href={{route('deliveryreport.index')}}>Delivery</a> </li>
                                <li> <a href={{route('manufacturerreport.index')}}>Manufacturer</a> </li>
                                <li> <a href={{route('supplierreport.index')}}>Supplier</a> </li>
                            </ul>
                        </li>
    
                        <li style="border-bottom:1px solid #E8EAED; background-color: #E9F0FD;"> <a href="javascript:void(0)" class="waves-effect"><i style="color:#4c87ed;" data-icon="V" class="linea-icon linea-basic fa-fw"></i> <span style="color:#4c87ed;" class="hide-menu">Account<span class="fa arrow"></span></span></a>
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
                        <h4 class="page-title" style="color:black;">User Accounts</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Account</a></li>
                            <li class="active" style="color:#4c87ed;">User</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <!--MODAL STARTS HERE-->
                <div class="modal fade" id="userAccountModal" tabindex="-1" role="dialog" aria-labelledby="addUser">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="exampleModalLabel1" style="color:black; font-family:Helvetica,Arial,sans-serif;">Add User Account</h4>
                            </div>
                            {!! Form::open(array('route'=>'useraccount.store','id'=>'addproductform'))!!}
                            <div class="modal-body">
                                <div class="form-group">
                                        <label for="client" class="control-label" style="color:black; font-family:Helvetica,Arial,sans-serif;"><b>Name:</b></label>
                                        <input type="text" class="form-control" name = "name[]" required/>
                                        <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Type the name of the desired product.</span>
                                    <br>
                                    


                                    <label for="client" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Username:</b></label>
                                    <input type="text" class="form-control" name = "username[]" required/>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Type the desired username of the user. Must be at least 6 Characters long.</span>
                                    <br>
                                   
                                    <label for="client" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Password:</b></label>
                                    <input type="password" class="form-control" name = "password[]" required/>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Type the password of the user. Must be at least 8 Characters long.</span>
                                   
                                    <br>

                                    <label for="client" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>E-mail:</b></label>
                                    <input type="email" class="form-control" name = "email[]" required/>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Type the e-mail address of the user.</span>
                                   
                                    <br>

                                    <label for="client" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Contact Number:</b></label>
                                    <input type="number" class="form-control" name = "contact[]" required/>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Type the password of the user. Must be at least 8 Characters long.</span>
                                   
                                    <br>
                                               
                                    <label for="client" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Department:</b></label>
                                    <select name="department[]" class="form-control department" name = "department" required>
                                        <option value="1">Logistics Head</option>
                                        <option value="0">Logistics Department</option>
                                    </select>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Select the department in the company of the user.</span>
                                   
                                    <br>
                                    
                                    <label for="client" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Role/Job:</b></label>
                                    <input type="text" class="form-control" name = "role[]" required/>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Type the role/job in the company of the user.</span>
                                    <br>
                                   
                                    <label for="client" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Access Control:</b></label>
                                    <input type="text" data-mask="9" class="form-control" name = "access[]" required/>
                                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Type the access of the user. From 1 (lowest) - 5 (highest)</span>
                                   
                                    {{-- <h1>Total:</h1> --}}
                                </div>
                                </div>
                                <div class="modal-footer">
                                    {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> --}}
                                    <button class="btn btn-danger btn-md btn-block text-uppercase waves-effect waves-light" style="background-color: #4c87ed; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);" type="submit">Submit</button>
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
                
                <div class="row" style="font-family:Helvetica,Arial,sans-serif;">
                    <div class="col-sm-12">
                        <div class="white-box">
                            @if(Session::has('success'))
                                <div class="alert alert-success"> {{Session::get('success')}} </div>
                      
                              
                              @endif
                            <h3 class="box-title m-b-0" style="color:black;">LIST OF USER ACCOUNTS</h3>
                            {{-- <div class="col-sm-12" style="background-color:red;"> --}}
                                <button class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#userAccountModal" type="button"><span class="btn-label"><i class="fa fa-plus-square-o"></i></span>Add Account</button>
                                                    
                                <a class="mytooltip" href="javascript:void(0)"><i class="fa fa-question-circle"></i><span class="tooltip-content3">Click this button to create a user account! </span> </a> {{-- </div> --}} {{-- </i>Add Order <span class="tooltip-content3">You can easily navigate the city by car.</span> </a> --}}

                                <p class="text-muted m-b-30"></p>
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped">
                                        <thead>
                                            <tr style="color:black;">
                                                <th>User #</th>
                                                <th>Name</th>
                                                <th>Department</th>
                                                <th>E-mail</th>
                                                <th>Contact Number</th>
                                                <th>Access Control</th>
                                                <th>Last Updated</th>
                                                {{-- <th></th> --}}
                                                <th></th>
                                                {{-- <th><i class="fa fa-gear"></th> --}}
                                                {{-- <th><i class="fa fa-gear"></th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(isset($users))
                                                @foreach ($users as $user)
                                                <tr>
                                                    <td>{{'US-'.$user->id}}</td>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->userdept}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->contact}}</td>
                                                    <td><span class="label label-success">{{$user->accesscontrol}}</span></td>
                                                    <td>{{$user->updated_at}}</td>
                                                    <td>
                                                        <i style="color:#4c87ed;" class="fa fa-edit">

                                                                 {!! Form::open(['route'=>['useraccount.destroy',$user->id],'method'=>'DELETE','enctype'=>'multipart/form-data','class'=>'deleteOrder']) !!} 
                                                                <i style="margin-left:5px; color:#E53935;" class="fa fa-trash-o removeorder">
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

                $(document).on('click', '.removeorder', function() {
                    var verify = confirm("Do you wish to delete this user account?");
                    
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