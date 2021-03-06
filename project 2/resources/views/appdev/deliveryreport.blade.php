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
      <link href="plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
      <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
      <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
      <link href="css/animate.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/colors/blue.css" id="theme" rel="stylesheet">
      <link href="plugins/bower_components/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
      <link href="plugins/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
      <link href="plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
      <style>
         .dotted {
         border:none;
         margin-top: 50px;
         border-top:1px dotted rgba(255, 0, 112, 0.55);
         color:#fff;
         background-color:#fff;
         height:2px;
         width:100%;
         }
      </style>
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
               <li> <a href={{route('schedule.index')}} class="waves-effect"><i style="color:#5F6367;" data-icon="r" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Schedule</span></a>
               </li>
               <li>
                  <a href="javascript:void(0)" class="waves-effect"><i style="color:#5F6367;" data-icon="f" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Inventory<span class="fa arrow"></span></span></a>
                  <ul class="nav nav-second-level">
                     <li> <a href={{route('product.index')}}>Product</a> </li>
                     <li> <a href={{route('supply.index')}}>Raw Material</a> </li>
                  </ul>
               </li>
               <li style="background-color: #E9F0FD;">
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
               <li><a href="faq.html" class="waves-effect"><i class="fa fa-circle-o text-success"></i> <span class="hide-menu">FAQs</span></a></li>
               <li><a href="faq.html" class="waves-effect"><i class="fa fa-circle-o text-info"></i> <span class="hide-menu">Documentation</span></a></li>
            </ul>
         </div>
      </div>
      <div id="page-wrapper">
         <div class="container-fluid" style="background-color:#F5F5F5;">
            <div class="row bg-title" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
               <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <h4 class="page-title" style="color:black;">Delivery Report</h4>
               </div>
               <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                  <ol class="breadcrumb">
                     <li><a href="#">Dashboard</a></li>
                     <li><a href="#">Report</a></li>
                     <li class="active" style="color:#4c87ed;">Supplier Report</li>
                  </ol>
               </div>
            </div>
            <div class="row" style="font-family:Helvetica,Arial,sans-serif;">
               <div class="col-sm-12">
                  <div class="white-box">
                     <h1 class="box-title " style="color:black;">GENERATE DELIVERY REPORT</h1>
                     {!!Form::open(array('route' => 'appdev.deliveryreport'))!!}
                     <div class="col-md-2" style="align-content: right;" >
                        <select name="filter" class="form-control">
                           <option value="no_filter">No Filter</option>
                           <option value="scheduled">To Deliver</option>
                           <option value="delivered">Delivered</option>
                           <option value="cancelled">Cancelled</option>
                        </select>
                     </div>
                     <div class="col-md-6" >
                        <center>
                           <div class="input-daterange input-group" id="date-range">
                              <input type="date" class="form-control dt" id="sd" name="start"/> <span class="input-group-addon bg-info b-0 text-white">to</span>
                              <input type="date" class="form-control dt" id="ed" name="end"/>
                           </div>
                        </center>
                     </div>
                     <div class="col-md-4" style="text-align: right; ">
                        <button type="submit" class="btn btn-success waves-effect waves-light" style="display: inline"><span class="btn-label"><i class="linea linea-basic" data-icon="L"></i></span>Generate Report</button>
                        <button style="background-color: #4c87ed;display: inline" class=" btn btn-success waves-effect waves-light" onclick="myFunction()" type="button"><span class="btn-label"><i class="linea linea-basic" data-icon="&#xe008;"></i></span>Print</button>
                     </div>
                     {!!Form::close() !!}
                     <div class="row">
                        <br>
                        <div id="printhead">
                           <hr class="dotted">
                           <h4  style="text-align:center; font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Bewell Nutraceuticals Corporation</b></h4>
                           <h4  style="text-align:center; font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>{{$filter}} Delivery Reports</b></h4>
                           @if($start!="")
                           <h4  style="text-align:center; font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>From {{$start}} to {{$end}}</b></h4>
                           <div class="row">
                              @if($filter!="")
                              @if($filter != "General")
                              <div class="col-md-4 text-center">
                                 <h5>Total {{$filter}} Deliveries:</h5>
                                 <h4><b>{{count($schedules)}}</b></h4>
                              </div>
                              @else
                              <div class="col-md-4 text-center">
                                 <hr class="dotted" style="margin: 0px;padding: 0px">
                                 <h5>Total Scheduled Deliveries:</h5>
                                 <h4><b>{{$filter_val['Scheduled']}}</b></h4>
                              </div>
                              <div class="col-md-4 text-center">
                                 <hr class="dotted" style="margin: 0px;padding: 0px">
                                 <h5>Total Fulfilled: </h5>
                                 <h4><b>{{$filter_val['Fulfilled']}}</b></h4>
                              </div>
                              <div class="col-md-4 text-center">
                                 <hr class="dotted" style="margin: 0px;padding: 0px">
                                 <h5>Total Cancelled: </h5>
                                 <h4><b>{{$filter_val['Cancelled']}}</b></h4>
                              </div>
                              @endif
                              @else
                              <div class="row">
                                <div class="col-md-12 text-center">    
                                    <hr>
                                    <h4 style="color:black">Reason/s on Order Cancellation:</h4>
                                    <ul class="list-group">
                                        @if(isset($reasons))
                                            @foreach($reasons as $info)
                                                <li class="list-group-item">{{$info->remark}}</li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-4 text-center">
                                    <hr class="dotted" style="margin: 0px;padding: 0px">
                                    <h5>Total Scheduled Deliveries:</h5>
                                    <h4><b>{{$filter_val['Scheduled']}}</b></h4>
                                 </div>
                                 <div class="col-md-4 text-center">
                                    <hr class="dotted" style="margin: 0px;padding: 0px">
                                    <h5>Total Fulfilled: </h5>
                                    <h4><b>{{$filter_val['Fulfilled']}}</b></h4>
                                 </div>
                                 <div class="col-md-4 text-center">
                                    <hr class="dotted" style="margin: 0px;padding: 0px">
                                    <h5>Total Cancelled: </h5>
                                    <h4><b>{{$filter_val['Cancelled']}}</b></h4>
                                 </div>
                              </div>
                              @endif
                           </div>
                           @endif
                           <hr>
                           <h5>DELIVERY ORDERS TABLE</h5>
                           <table class="table color-bordered-table info-bordered-table" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); font-family:Helvetica,Arial,sans-serif; table-align:center;">
                              <tbody id="addproduct">
                              <thead>
                                 <tr style="color:black;">
                                    <th>Tracking #</th>
                                    <th>Order #</th>
                                    <th>Truck Plate #</th>
                                    <th>Driver</th>
                                    <th>Address</th>
                                    <th>Scheduled Date</th>
                                    <th>Delivered Date</th>
                                    <th>Status</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 @if(isset($schedules))
                                 @foreach($schedules as $schedule)
                                 <tr>
                                    <td><a href="{{ route('appdev.scheduledetail', ['id' => $schedule->id]) }}">TR-{{$schedule->id}}</a></td>
                                    @if($schedule->schedType==="client")
                                    <td>CLOD-{{$schedule->orderID}}</td>
                                    @else
                                    <td>MLOD-{{$schedule->orderID}}</td>
                                    @endif
                                    <td>@if(isset($schedule->fromTruck)){{$schedule->fromTruck->plate_num}}@endif</td>
                                    <td>@if(isset($schedule->fromDriver)){{$schedule->fromDriver->name}}@endif</td>
                                    <td>@if(isset($schedule->fromLocation)){{$schedule->fromLocation->loc_address}}@endif</td>
                                    <td>{{$schedule['scd_date']}}</td>
                                    <td>
                                       @if($schedule['dateDelivered']){{$schedule['dateDelivered']}}@else N/A
                                       @if(\App\Http\Controllers\DeliveryReportController::checkOverdue($schedule->id))
                                       <i class="fa fa-circle" style="display: inline;color: red;font-size: 10px"></i>
                                       <p style="display: inline; font-size: 10px" class="text-muted">Overdue</p>
                                       @else
                                       <i class="fa fa-circle" style="display: inline;color: green;font-size: 10px"></i>
                                       <p style="display: inline; font-size: 10px" class="text-muted">On-time</p>
                                       @endif
                                       @endif
                                    </td>
                                    <td><span class="label {{\App\Http\Controllers\ScheduleController::getSchedClassColor($schedule->id)}}"
                                       >{{$schedule->scd_status}}</span></td>
                                 </tr>
                                 @endforeach
                                 @endif
                              </tbody>
                           </table>
                           <h4  style="text-align:center; font-size:14px; color:black; margin-top:20px; font-family:Helvetica,Arial,sans-serif;"><b>----------- END OF THE REPORT -----------</b></h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <footer class="footer text-center"> 2018 &copy; Bewell Nutraceutical Corporation</footer>
         </div>
      </div>
      <script>
         function myFunction() {
             var prtContent = document.getElementById("printhead");
             var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
             WinPrint.document.write(prtContent.innerHTML);
             WinPrint.document.close();
             WinPrint.focus();
             WinPrint.print();
             WinPrint.close();
         }
      </script>
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
      <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
      <script src="plugins/bower_components/sweetalert/sweetalert.min.js"></script>
      <script src="plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js"></script>
      <script type="text/javascript">
         $(document).on('click', '.ajaxmodal', function() {
             $('.modal-title').text('Update Order Status');
             $('.statusModal').modal('show');
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
      </script>
      <script src="plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
      <script src="plugins/bower_components/timepicker/bootstrap-timepicker.min.js"></script>
      <script src="plugins/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
      <script>
         $(".dt").change(function() {
             var startDate = document.getElementById("sd").value;
             var endDate = document.getElementById("ed").value;
             if(startDate != null && endDate!= null){
                 if ((Date.parse(endDate) <= Date.parse(startDate))) {
                     alert("End date should be greater than Start date");
                     document.getElementById("ed").value = "";
                 }
             }
         });
         // Clock pickers
         $('#single-input').clockpicker({
             placement: 'bottom',
             align: 'left',
             autoclose: true,
             'default': 'now'
         });
         $('.clockpicker').clockpicker({
             donetext: 'Done',
         }).find('input').change(function() {
             console.log(this.value);
         });
         $('#check-minutes').click(function(e) {
             // Have to stop propagation here
             e.stopPropagation();
             input.clockpicker('show').clockpicker('toggleView', 'minutes');
         });
         if (/mobile/i.test(navigator.userAgent)) {
             $('input').prop('readOnly', true);
         }
         // Colorpicker
         $(".colorpicker").asColorPicker();
         $(".complex-colorpicker").asColorPicker({
             mode: 'complex'
         });
         $(".gradient-colorpicker").asColorPicker({
             mode: 'gradient'
         });
         // Date Picker
         jQuery('.mydatepicker, #datepicker').datepicker();
         jQuery('#datepicker-autoclose').datepicker({
             autoclose: true,
             todayHighlight: true
         });
         jQuery('#date-range').datepicker({
             toggleActive: true
         });
         jQuery('#datepicker-inline').datepicker({
             todayHighlight: true
         });
         // Daterange picker
         $('.input-daterange-datepicker').daterangepicker({
             buttonClasses: ['btn', 'btn-sm'],
             applyClass: 'btn-danger',
             cancelClass: 'btn-inverse'
         });
         $('.input-daterange-timepicker').daterangepicker({
             timePicker: true,
             format: 'MM/DD/YYYY h:mm A',
             timePickerIncrement: 30,
             timePicker12Hour: true,
             timePickerSeconds: false,
             buttonClasses: ['btn', 'btn-sm'],
             applyClass: 'btn-danger',
             cancelClass: 'btn-inverse'
         });
         $('.input-limit-datepicker').daterangepicker({
             format: 'MM/DD/YYYY',
             minDate: '06/01/2015',
             maxDate: '06/30/2015',
             buttonClasses: ['btn', 'btn-sm'],
             applyClass: 'btn-danger',
             cancelClass: 'btn-inverse',
             dateLimit: {
                 days: 6
             }
         });
      </script>
   </body>
</html>