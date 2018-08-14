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
      <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="../plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
      <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
      <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
      <link href="css/animate.css" rel="stylesheet">
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
            <div class="navbar-header" style="background:#64B5F6;  border-radius: 2px; position:relative;">
               <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
               <div class="top-left-part" style="background-color:#BBDEFB; opacity:1;"><a class="logo" href="index.html"><b><img src="../plugins/images/bewelllogos.png"  width="35px" alt="home" /></b><span class="hidden-xs"><img src="../plugins/images/bewelllogol.png" width="110px" alt="home" /></span></a></div>
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
                  <li style="background-color: #E9F0FD;">
                     <a href="javascript:void(0)" class="waves-effect"><i style="color:#4c87ed;" data-icon="x" class="linea-icon linea-ecommerce fa-fw"></i> <span class="hide-menu" style="color:#4c87ed;">Order<span class="fa arrow"></span></span></a>
                     <ul class="nav nav-second-level">
                        <li> <a href={{route('clientorder.index')}}>Client</a> </li>
                        <li> <a href={{route('manufacturerorder.index')}}>Manufacturer</a> </li>
                        <li> <a href={{route('supplierorder.index')}}>Supplier</a> </li>
                     </ul>
                  </li>
                  <li> <a href={{route('schedule.index')}} class="waves-effect"><i style="color:#5F6367;" data-icon="r" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Schedule</span></a>
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
                  <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
                     <h4 class="page-title" style="display:inline;color:black;">Schedule Details: TR- / </h4>
                     <i class="fa fa-circle" style="display: inline;color:"></i>
                     <p style="display: inline" class="text-muted">  </p>
                  </div>
                  <div class="col-lg-7 col-sm-8 col-md-8 col-xs-12">
                     <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li class="active" style="color:#4c87ed;">Schedule</li>
                     </ol>
                  </div>
               </div>
               <div  class="modal fade" id="concludeSchedModal" role="dialog">
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
                        {!! Form::open(['route'=>['schedule.update',1],'method'=>'PUT','enctype'=>'multipart/form-data'])!!}
                        <div class="modal-body">
                           <div class="form-group">
                              <input type="hidden" name="sc_type" id="sc_type" value="">
                              <label for="truckStatus">Conclusion</label>
                              <input name="schedule_conclusion" class="form-control sched_conc" id="sched_conc" type="text" value=""readonly>
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
               <div class="col-lg-6 col-sm-6">
                  <div class="row">
                     <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="list-group" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                           <button type="button" class="list-group-item" disabled>
                           <span><i style="color:#1565C0; margin-right:5px;" data-icon="&#xe016;" class="linea-icon linea-basic"></i></span>
                           <b>Order Number: </b>
                           @if($order->schedType="Client")
                                CLOD-{{$order->id}}
                           @elseif($order->schedType="Manufacturer")
                                MLOD-{{$order->id}}
                           @endif
                           </button>
                           <button type="button" class="list-group-item" disabled>
                           <span><i style="color:#1565C0; margin-right:5px;" data-icon="r" class="linea-icon linea-elaborate"></i></span>
                           <b>Scheduled Date: {{$order->scd_date}}</b>
                           </button>
                           <button type="button" class="list-group-item" disabled>
                           <span><i style="color:#1565C0; margin-right:5px;" data-icon="&#xe026;" class="linea-icon linea-elaborate"></i></span>
                           <b>Date Delivered: @if(isset($order->dateDelivered)){{$order->dateDelivered}}@endif</b>
                           </button>
                           <button type="button" class="list-group-item" disabled>
                           <span><i style="color:#1565C0; margin-right:5px;" data-icon="Z" class="linea-icon linea-basic"></i></span>
                           <b>Location: @if(isset($order->locationID)){{$order->fromlocation->loc_address}}@endif</b>
                           </button>
                           <button type="button" class="list-group-item" disabled>
                           <span><i style="color:#1565C0; margin-right:5px;" data-icon="Z" class="icon-user"></i></span>
                           <b>Contact Person: {{$order->contactPerson}} </b>
                           </button>
                           <button type="button" class="list-group-item" disabled>
                           <span><i style="color:#1565C0; margin-right:5px;" data-icon="Z" class="icon-phone"></i></span>
                           <b>Contact Number: {{$order->fromLocationNumber->loc_contactnumber}} </b>
                           </button>
                           <button type="button" class="list-group-item" disabled>
                           <b> Schedule Remark: {{$order->remark}}</b>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 col-sm-12">
                        <div class="white-box" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                           <h3 class="box-title m-b-0" style="color:black;">Delivery of Ordered Material/s</h3>
                           <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: This is section contains all the specified order/s for delivery to 
                                @if($order->schedType="Client")
                                Client.
                                @elseif($order->schedType="Manufacturer")
                                Manufacturer.
                                @endif 
                        </span>
                           <hr>
                           <h3 style="font-weight:700; font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;">Order Details for
                                @if($order->schedType="Client")
                                the Client Order/s.
                                @elseif($order->schedType="Manufacturer")
                                the Manufaturer Order/s.
                                @endif 
                           </h3>
                           <div class="table-responsive">
                              <table id="myTable" class="table table-striped">
                                 <thead>
                                    <tr style="color:black;">
                                       <th>Product Code</th>
                                       <th>Name</th>
                                       <th>SKU</th>
                                       <th>Deliver Qty(Boxes)</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @if(isset($order->fromScheduleDetail))
                                        @foreach($order->fromScheduleDetail as $info)
                                            <tr>
                                                <td>{{$info->fromProduct->pd_code}}</td>
                                                <td>{{$info->fromProduct->pd_name}}</td>
                                                <td>{{$info->fromProduct->pd_sku}}</td>
                                                <td>{{$info->delivered_qty}}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-sm-6">
                  <div class="row">
                     <div class="col-md-6 col-xs-12 col-sm-6">
                        <button style=" width: 100%"  class="btn btn-info waves-effect waves-light conclude"
                           data-toggle="modal"
                           data-target="#concludeSchedModal"
                           type="button">
                        <span class="btn-label"><i class="fa fa-calendar-check-o"></i></span>
                        Fulfill Schedule
                        </button>
                     </div>
                     <div class="col-md-6 col-xs-12 col-sm-6">
                        <button style=" width: 100%"  class="btn btn-danger waves-effect waves-light conclude"
                           data-toggle="modal"
                           data-target="#concludeSchedModal"
                           type="button">
                        <span class="btn-label"><i class="fa fa-calendar-times-o"></i></span>
                        Cancel Schedule
                        </button>
                     </div>
                     <div class="col-md-6 col-xs-12 col-sm-6">
                        <div class="white-box text-center bg-success">
                        <h1 class="text-white counter">{{$order->fromDriver->name}}</h1>
                           <p class="text-white">Driver</p>
                        </div>
                     </div>
                     <div class="col-md-6 col-xs-12 col-sm-6">
                        <div class="white-box text-center bg-info">
                            <h1 class="text-white counter">{{$order->fromTruck->plate_num}} | {{$order->fromTruck->car_model}}</h1>
                            <p class="text-white">Truck</p>
                        </div>
                     </div>
                  </div>
                  {{-- 
                    COMMENTED OUT BY: JOHN EDEL B. TAMANI
                    
                    <div class="row">
                     <div class="col-lg-12">
                        <div class="white-box" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                           <h3 class="box-title m-b-0" style="color:black;">Order Delivery Summary</h3>
                           <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: This is the section to show summary delivery.</span>
                           <br>
                           <button style="margin-top:10px;" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#clientOrderModal" type="button"><span class="btn-label"><i class="linea linea-basic" data-icon="&#xe00b;"></i></span>Print Order Delivery Report (ODR)</button>
                           <hr>
                           <h3 style="font-weight:700; font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;">Schedule Details: TR-</h3>
                           <table class="table table-bordered">
                              <thead style="color:black;">
                                 <tr style="color:black;">
                                    <th>Model</th>
                                    <th>Truck Plate #</th>
                                    <th>Driver</th>
                                    <th>Delivery Date</th>
                                    <th>Qty (Boxes)</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                 </tr>
                              </tbody>
                           </table>
                           <hr>
                        </div>
                     </div>
                  </div> --}}
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
      <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
      <script src="../plugins/bower_components/sweetalert/sweetalert.min.js"></script>
      <script src="../plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js"></script>
   </body>
</html>