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
            @if(Auth::user()->access==1)
                <li> <a href="javascript:void(0)" class="waves-effect"><i style="color:#5F6367;" data-icon="R" class="linea-icon linea-ecommerce fa-fw"></i> <span class="hide-menu">Report<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li> <a href={{route('salesreport.index')}}>Sales</a> </li>
                        <li> <a href={{route('inventoryreport.index')}}>Delivery</a> </li>
                        <li> <a href={{route('inventoryreport.index')}}>Manufacturer</a> </li>
                        <li> <a href={{route('inventoryreport.index')}}>Supplier</a> </li>
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