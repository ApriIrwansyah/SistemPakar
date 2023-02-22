  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['admin']; echo "  "?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="/">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Input</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?page=gejala"><i class="fa fa-circle-o"></i> Gejala</a></li>
            <li><a href="index.php?page=penyakit"><i class="fa fa-circle-o"></i> Penyakit</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-list active"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <a href="#">
            <li><a href="index.php?page=list-gejala"><i class="fa fa-circle-o"></i> Gejala</a></li>
            <li><a href="index.php?page=list-penyakit"><i class="fa fa-circle-o"></i> Penyakit</a></li>
            <li><a href="index.php?page=laporan"><i class="fa fa-circle-o"></i> Laporan</a></li>
           <!--  <li><a href="index.php?page=list-user"><i class="fa fa-circle-o"></i> User</a></li>
            <li><a href="index.php?page=list-hasil"><i class="fa fa-circle-o"></i> Hasil Diagnosa</a></li> -->
          </ul>
        </li>
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>