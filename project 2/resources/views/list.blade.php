<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Editable CSS -->
        <link type="text/css" rel="stylesheet" href="plugins/bower_components/jsgrid/dist/jsgrid.min.css" />
        <link type="text/css" rel="stylesheet" href="plugins/bower_components/jsgrid/dist/jsgrid-theme.min.css" />
        <!-- Menu CSS -->
        <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
        <!-- animation CSS -->
        <link href="css/animate.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- color CSS -->
        <link href="css/colors/blue.css" id="theme" rel="stylesheet">

    <body>
            <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box">
                            <h3 class="box-title">Soarting</h3>
                            <div class="col-md-2 row">
                                <select id="sortingField" class="form-control input-sm m-b-10">
                                    <option>Name</option>
                                    <option>Age</option>
                                    <option>Address</option>
                                    <option>Country</option>
                                    <option>Married</option>
                                </select>
                            </div>
                            <div id="exampleSorting"></div>
                        </div>
                    </div>
                </div>
        
        <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Menu Plugin JavaScript -->
        <script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
        <!--slimscroll JavaScript -->
        <script src="js/jquery.slimscroll.js"></script>
        <!--Wave Effects -->
        <script src="js/waves.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="js/custom.min.js"></script>
        <!-- Editable -->
        <script src="plugins/bower_components/jsgrid/db.js"></script>
        <script type="text/javascript" src="plugins/bower_components/jsgrid/dist/jsgrid.min.js"></script>
        <script src="js/jsgrid-init.js"></script>
        <!--Style Switcher -->
        <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    </body>
</html>
