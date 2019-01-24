 <?php echo $__env->make('admin.layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- container section start -->

  <section id="container" class="sidebar-closed">

    <!--header start-->
    <header class="header dark-bg">
      <div class="container-fluid">
      <div class="toggle-nav">
        <!-- <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
 -->      </div>

      <!--logo start-->
      <a href="#" class="logo">Roberts Individualized Medical Genetics Center <span class="lite">(RIMGC)</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <!-- <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form> -->
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
               
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                           <!--  <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span> -->
                            <span class="username"><?php echo e(Auth::user()->name); ?></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="<?php echo e(route('profile')); ?>"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="icon_key_alt"></i>Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                
              </li>

            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside class="col-md-2" style="padding-left: 0px;">
      <!-- <div id="sidebar" class="nav-collapse "> -->
        <div id="sidebar" class="nav-collapse " style="margin-left:0px !important; height:100%; width:15%;"> 
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="<?php echo e(route('dashboard')); ?>">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          
          <!-- <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>UI Fitures</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="general.html">Components</a></li>
              <li><a class="" href="buttons.html">Buttons</a></li>
              <li><a class="" href="grids.html">Grids</a></li>
            </ul>
          </li> -->
        <!--   <li>
            <a class="" href="widgets.html">
                          <i class="icon_genius"></i>
                          <span>Widgets</span>
                      </a>
          </li> -->
          <li>
            <a class="" href="<?php echo e(url('/form/create')); ?>">
                          <i class="icon_document_alt"></i>
                          <span>Add Sample</span>
                      </a>

          </li>

          <li>
            <a class="" href="<?php echo e(url('/form')); ?>">
                          <i class="icon_document_alt"></i>
                          <span>List All Samples</span>

                      </a>

          </li>
          

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content" class="col-md-10">
      <section class="wrapper">
        <?php echo $__env->yieldContent('content'); ?>
      </section>
    </section>
    <!--main content end-->

  <?php echo $__env->make('admin.layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>