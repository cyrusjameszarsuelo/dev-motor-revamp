<!-- Navbar -->
<div class="top-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6 text-center">
                <a href="/" class="logo">MOTOR</a>
            </div>
            <div class="col-lg-3">
                {{-- <!-- SEARCH FORM -->
                <form class="form-inline ml-0 ml-md-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form> --}}
                <form action="simple-results.html">
                    <div class="input-group">
                        <input type="search" class="form-control form-control-md" placeholder="Search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-md btn-default">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container-fluid">
        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index3.html" class="nav-link"><i class="fa fa-home"></i> Dashboard</a>
                </li>
                <li class="nav-divider"></li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fa fa-briefcase"></i> Broker</a>
                </li>
                <li class="nav-divider"></li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-list" aria-hidden="true"></i> Policy</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="#" class="dropdown-item">Policy Holder</a></li>
                        <li><a href="#" class="dropdown-item">Download EDI</a></li>
                        <li><a href="#" class="dropdown-item">Paid Account</a></li>
                        <li><a href="#" class="dropdown-item">Upload CSV</a></li>
                        <li><a href="#" class="dropdown-item">Upload CSV AXA</a></li>
                        <li><a href="#" class="dropdown-item">Upload Claim CSV</a></li>
                        <li><a href="#" class="dropdown-item">Upload Debit Credit CSV (Create only)</a></li>
                    </ul>
                </li>
                <li class="nav-divider"></li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fa fa-check-square" aria-hidden="true"></i> Claim</a>
                </li>
                <li class="nav-divider"></li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-book" aria-hidden="true"></i> Report</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="#" class="dropdown-item">MI Report </a></li>
                        <li><a href="#" class="dropdown-item">MID Report</a></li>
                        <li><a href="#" class="dropdown-item">EDI Report</a></li>
                        <li><a href="#" class="dropdown-item">Policy Dump Report</a></li>
                        <li><a href="#" class="dropdown-item">Premium Report</a></li>
                        <li><a href="#" class="dropdown-item">Premium Report by Scheme</a></li>
                        <li><a href="#" class="dropdown-item">Blink Report</a></li>
                        <li><a href="#" class="dropdown-item">Not Reconciled</a></li>
                        <li><a href="#" class="dropdown-item">Broker Statements Report</a></li>
                        <li class="dropdown-divider"></li>
                        <!-- Level two dropdown-->
                        <li class="dropdown-submenu dropdown-hover">
                            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"
                                class="dropdown-item dropdown-toggle">Broker</a>
                            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                <li>
                                    <a href="#" class="dropdown-item">List of Brokers</a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item">Index</a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item">Index Summary</a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item">Individual Summary</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Level two -->
                        <li class="dropdown-divider"></li>
                        <li><a href="#" class="dropdown-item">Motor Underwriting</a></li>
                    </ul>
                </li>
                <li class="nav-divider"></li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-user" aria-hidden="true"></i> Accounts</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="#" class="dropdown-item">Chart of Accounts</a></li>
                    </ul>
                </li>
                <li class="nav-divider"></li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-cogs" aria-hidden="true"></i> Utilities</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="#" class="dropdown-item">Product Category</a></li>
                        <li><a href="#" class="dropdown-item">Products</a></li>
                        <li><a href="#" class="dropdown-item">Broker Status</a></li>
                        <li><a href="#" class="dropdown-item">Broker Account Status</a></li>
                        <li><a href="#" class="dropdown-item">Payment Methods</a></li>
                    </ul>
                </li>
            </ul>


        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item dropdown user user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="dist/img/user2-160x160.jpg" class="user-image img-circle elevation-2 alt="User Image">
                    <span class="hidden-xs">Alexander Pierce</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <!-- User image -->
                    <li class="user-header bg-primary">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">

                        <p>
                            Alexander Pierce - Web Developer
                            <small>Member since Nov. 2012</small>
                        </p>
                    </li>
                    <!-- Menu Body -->
                    <li class="user-body">
                        <div class="row">
                            <div class="col-4 text-center">
                                <a href="#">Followers</a>
                            </div>
                            <div class="col-4 text-center">
                                <a href="#">Sales</a>
                            </div>
                            <div class="col-4 text-center">
                                <a href="#">Friends</a>
                            </div>
                        </div>
                        <!-- /.row -->
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="pull-right">
                            <a href="#" class="btn btn-default btn-flat">Sign out</a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<!-- /.navbar -->
