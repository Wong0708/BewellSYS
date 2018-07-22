<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
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
            <nav class="navbar navbar-default navbar-static-top m-b-0" style="background-color:red;">
                <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                    <div class="top-left-part"><a class="logo" href="index.html"><b><img src="plugins/images/bewelllogos.png"  width="35px" alt="home" /></b><span class="hidden-xs"><img src="plugins/images/bewelllogol.png" width="110px" alt="home" /></span></a></div>
                    <ul class="nav navbar-top-links navbar-left hidden-xs">
                        <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                        <li>
                            <form role="search" class="app-search hidden-xs">
                                <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                        </li>
                    </ul>
                    <ul class="nav navbar-top-links navbar-right pull-right">
                        <!-- /.dropdown -->
                        <li class="dropdown">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="plugins/images/jet.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">
                                
                                @if(Auth::user()->access==1)
                                    Logistics Head
                                @endif
        
                            </b> </a>
                            <ul class="dropdown-menu dropdown-user animated flipInY">
                                <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
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
                        <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
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
                        <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="plugins/images/jet.jpg" alt="user-img" class="img-circle"> <span class="hide-menu">
                            @if(Auth::user()->access==1)
                                Administrator
                            @endif
    
                            <span class="fa arrow"></span></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li><a href="javascript:void(0)"><i class="ti-user"></i> Manage Account</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap m-t-10">--- Main Menu</li>
                        <li><a href={{route('dashboard.index')}} class="waves-effect"><i class="linea-icon linea-aerrow fa-fw" data-icon="&#xe078;"></i> <span class="hide-menu">Dashboard</span></a></li>
                        <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="x" class="linea-icon linea-ecommerce fa-fw"></i> <span class="hide-menu">Order<span class="fa arrow"></span></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href={{route('clientorder.index')}}>Client</a> </li>
                                <li> <a href={{route('manufacturerorder.index')}}>Manufacturer</a> </li>
                                <li> <a href={{route('supplierorder.index')}}>Supplier</a> </li>
                            </ul>
                        </li>
                        <li> <a href={{route('schedule.index')}} class="waves-effect"><i data-icon="r" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Schedule</span></a>
                            {{-- <ul class="nav nav-second-level">
                                <li> <a href="javascript:void(0)">Client</a> </li>
                                <li> <a href="javascript:void(0)">Manufacturer</a> </li>
                                <li> <a href="javascript:void(0)">Supplier</a> </li>
                            </ul> --}}
                        </li>
                        <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="f" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Inventory<span class="fa arrow"></span></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href={{route('productinventory.index')}}>Product</a> </li>
                            <li> <a href={{route('supplyinventory.index')}}>Supply</a> </li>
                            </ul>
                        </li>
                        <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="R" class="linea-icon linea-ecommerce fa-fw"></i> <span class="hide-menu">Reports<span class="fa arrow"></span></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href={{route('salesreport.index')}}>Sales</a> </li>
                                <li> <a href={{route('inventoryreport.index')}}>Inventory</a> </li>
                            </ul>
                        </li>
                        <li><a href={{route('logout.index')}} class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                    </ul>
                </div>
            </div>
    
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Client Orders</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Order</a></li>
                            <li class="active">Client</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <!--MODAL STARTS HERE-->
                <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="sysmodal1">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="exampleModalLabel1">Add Orders</h4> </div>
                            {!! Form::open(array('route'=>'clientorder.store'))!!}
                                <div class="modal-body">
                                        <div class="form-group">
                                                <label for="cust" class="control-label">Customer:</label>
                                                <select name="customer" class="form-control" id="cust">
                                                    {{-- @foreach ($clients as $client)
                                                        <option>{{$client->company}}</option>
                                                    @endforeach
                                                     --}}
                                                </select>
                                                <br>
                                                <label for="order" class="control-label">Orders:</label>

                                                <table class="table-bordered">
                                                    <thead>
                                                        <tr>
                                                            
                                                            <th></th>
                                                            <th>Product Name</th>
                                                            <th>SKU</th>
                                                            <th>Grams</th>
                                                            {{-- <th>Price</th> --}}
                                                            {{-- <th>Current Qty</th> --}}
                                                            <th>Order Qty</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td><input type="text" name="product1" value="Bewell-C" class="form-control" id="order" disabled></td>
                                                            <td><input type="text" name="sku1" value="Box" class="form-control" id="order" disabled></td>
                                                            <td>
                                                                <select name="grams1" style="width:100px;" class="form-control" id="grams">
                                                                    <option>500</option>
                                                                    <option>250</option>
                                                                </select>

                                                            </td>
                                                            {{-- <td><input  name="price" type="text" value="₱150" class="form-control" id="order" disabled></td> --}}
                                                            {{-- <td><input  name="inventoryqty1" type="text" value="50" class="form-control" id="order" disabled></td> --}}
                                                            <td><input  name="orderqty1" type="number" value="0" class="form-control" id="order"></td>
                                                        </tr>
                                                        <tr>
                                                                <td></td>
                                                                <td><input type="text" name="product2" value="BeNerv-B" class="form-control" id="order" disabled></td>
                                                                <td><input type="text" name="sku2" value="Box" class="form-control" id="order" disabled></td>
                                                                <td>
                                                                    <select name="grams2" class="form-control" id="grams">
                                                                        <option>500</option>
                                                                        <option>250</option>
                                                                    </select>
    
                                                                </td>
                                                                {{-- <td><input  name="price" type="text" value="₱150" class="form-control" id="order" disabled></td> --}}
                                                                {{-- <td><input  name="inventoryqty2" type="text" value="50" class="form-control" id="order" disabled></td> --}}
                                                                <td><input  name="orderqty2" type="number" value="0" class="form-control" id="order"></td>
                                                            </tr>
                                                            <tr>
                                                                    <td></td>
                                                                    <td><input type="text" name="product3" value="Bewell Plus Calcium" class="form-control" id="order" disabled></td>
                                                                    <td><input type="text" name="sku3" value="Box" class="form-control" id="order" disabled></td>
                                                                    <td>
                                                                        <select name="grams3" class="form-control" id="grams">
                                                                            <option>500</option>
                                                                            <option>250</option>
                                                                        </select>
        
                                                                    </td>
                                                                    {{-- <td><input  name="price" type="text" value="₱150" class="form-control" id="order" disabled></td> --}}
                                                                    {{-- <td><input  name="inventoryqty3" type="text" value="50" class="form-control" id="order" disabled></td> --}}
                                                                    <td><input  name="orderqty3" type="number" value="0" class="form-control" id="order"></td>
                                                                </tr>
                                                                <tr>
                                                                        <td></td>
                                                                        <td><input type="text" name="product4" value="Liverguard" class="form-control" id="order" disabled></td>
                                                                        <td><input type="text" name="sku4" value="Box" class="form-control" id="order" disabled></td>
                                                                        <td>
                                                                            <select name="grams4" class="form-control" id="grams">
                                                                                <option>500</option>
                                                                                <option>250</option>
                                                                            </select>
            
                                                                        </td>
                                                                        {{-- <td><input  name="price" type="text" value="₱150" class="form-control" id="order" disabled></td> --}}
                                                                        {{-- <td><input  name="inventoryqty4" type="text" value="50" class="form-control" id="order" disabled></td> --}}
                                                                        <td><input  name="orderqty4" type="number" value="0" class="form-control" id="order"></td>
                                                                    </tr>
                                                    </tbody>
                                                </table>
                                                
                                               
                                        </div>

                                    {{-- <h1>Total:</h1> --}}
                                        
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            {!!Form::close()!!}
                            
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="sysmodal2">
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
                    </div>



                    <div id="showModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                        <h4 class="modal-title"></h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                                {{-- <label class="control-label col-sm-2" for="id">ID:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="id_show" disabled>
                                                </div> --}}

                                                <label for="id_show">Customer:</label>
                                                <select class="form-control" id="id_show">
                                                   
                                                </select>
                                            </div>
                                            
                                          
                                        </form>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-warning" data-dismiss="modal">
                                                <span class='glyphicon glyphicon-remove'></span> Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <!--MODAL ENDS HERE-->
                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            @if(Session::has('success'))
                                <div class="alert alert-success"> {{Session::get('success')}} </div>
                      
                              
                              @endif
                            <h3 class="box-title m-b-0">LIST OF CLIENT ORDERS</h3>
                            {{-- <div class="col-sm-12" style="background-color:red;"> --}}
                                <a href="javascript:void(0)"><button class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#modal1" type="button"><span class="btn-label"><i class="fa fa-plus-square-o"></i></span>Add Order</button></a>
                                <a class="mytooltip" href="javascript:void(0)"><i class="fa fa-question-circle"></i><span class="tooltip-content3">Click this button to place an order of a customer </span> </a>
                            {{-- </div> --}}

                            {{-- </i>Add Order <span class="tooltip-content3">You can easily navigate the city by car.</span> </a> --}}
                            
                            <p class="text-muted m-b-30"></p>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($orders as $order) --}}
                                            <tr>
                                           
                                            </tr>
                                        {{-- @endforeach --}}
                                        {{-- <tr>
                                            <td><a href="#">{{"0000".}}1</a></td>
                                            <td>John Edel B. Tamani</td>
                                            <td>100</td>
                                            <td>2018/05/12</td>
                                            <td>2018/05/14</td>
                                            <td><span class="label label-danger">Delayed</span></td>
                                            <th>₱15,000</th>
                                            <td><a href="#">2018-01-19 03:14:07</a></td>
                                            <td>
                                           
                                                    <i data-phone="{{$phones}}" class="fa fa-edit ajaxmodal">
                                                    {{-- <i data-toggle="modal" data-target="#modal1" style="margin-left:5px"class="fa fa-trash-o"> --}}

                                            {{-- </td>
                                        </tr>
                                        <tr>
                                                <td><a href="#">000001</a></td>
                                                <td>John Edel B. Tamani</td>
                                                <td>100</td>
                                                <td>2018/05/12</td>
                                                <td>2018/05/14</td>
                                                <td><span class="label label-danger">Delayed</span></td>
                                                <th>₱15,000</th>
                                                <td><a href="#">2018-01-19 03:14:07</a></td>
                                                
                                                <td>
                                                    <i data-toggle="modal" data-target="#modal2" class="fa fa-edit">
                                                    <i data-toggle="modal" data-target="#modal1" style="margin-left:5px"class="fa fa-trash-o">
                                                </td>
                                        </tr> --}} 
                                       
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
            <footer class="footer text-center"> 2017 &copy; Pixel Admin brought to you by wrappixel.com </footer>
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

     {{-- <script type="text/javascript">
        $(document).on('click', '.ajaxmodal', function() {
        $('.modal-title').text('Show');
        // console.log($(this).data('phone'));
        $.each( $(this).data('phone'), function(i, n){
            console.log(n);
            $('#id_show').append("<option>"+n.phone+"</option>");
        });
        // $('#id_show').val($(this).data('phone'));
        
        $('#showModal').modal('show');
        });
     </script> --}}
</body>

</html>
