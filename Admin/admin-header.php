
<header class="main-header">
        <!-- Logo -->
        <a href="" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b> <i class="fa fa-dashboard"></i>  Dashboard </b></span>
        </a>

        <!-- Header Navbar -->
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel (optional) -->

          <!-- search form (Optional) -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input
                type="text"
                name="q"
                class="form-control"
                placeholder="Search..."
              />
              <span class="input-group-btn">
                <button
                  type="submit"
                  name="search"
                  id="search-btn"
                  class="btn btn-flat"
                >
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header"></li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active">
              <a href="dashboard.php"><i class="fa fa-home"></i> <span>Home</span></a>
            </li>

            <li class="treeview">
              <a href="#"
                ><i class="fa fa-edit"></i> <span>Map CUD</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="add-map.php">Add Map</a></li>
                <li><a href="update-map.php">Update</a></li>
                <li><a href="delete-map.php">Delete</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"
                ><i class="fa fa-edit"></i> <span>Material Price CUD</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              <li><a href="add-material.php">Add Material</a></li>
               <li><a href="update-material.php">Update</a></li>
                <li><a href="delete-material.php">Delete</a></li>
              </ul>
            </li>
          </ul>
          <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>