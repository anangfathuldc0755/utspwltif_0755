      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>assets/template/back/dist/img/aku.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Anang Fathul Arifin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Menu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo site_url('admin/home') ?>"><i class="fa fa-circle-o"></i> Dashboard</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Beranda</a></li>
          </ul>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-tree"></i> <span>Mahasiswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo site_url('admin/home') ?>"><i class="fa fa-circle-o"></i> Home</a></li>
            <li><a href="<?php echo site_url('admin/mahasiswa/add') ?>"><i class="fa fa-circle-o"></i>New Mahasiswa</a></li>
            <li><a href="<?php echo site_url('admin/mahasiswa/') ?>"><i class="fa fa-circle-o"></i> List Mahasiswa</a></li>
          </ul>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>dosen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo site_url('admin/home') ?>"><i class="fa fa-circle-o"></i> Home</a></li>
            <li><a href="<?php echo site_url('#') ?>"><i class="fa fa-circle-o"></i>New dosen</a></li>
            <li><a href="<?php echo site_url('#') ?>"><i class="fa fa-circle-o"></i> List dosen</a></li>
          </ul>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-copy"></i> <span>Makul</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo site_url('admin/home') ?>"><i class="fa fa-circle-o"></i> Home</a></li>
            <li><a href="<?php echo site_url('#') ?>"><i class="fa fa-circle-o"></i>New Makul</a></li>
            <li><a href="<?php echo site_url('#') ?>"><i class="fa fa-circle-o"></i> List Makul</a></li>
          </ul>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-cut"></i> <span>nilai</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo site_url('admin/home') ?>"><i class="fa fa-circle-o"></i> Home</a></li>
            <li><a href="<?php echo site_url('#') ?>"><i class="fa fa-circle-o"></i>New nilai</a></li>
            <li><a href="<?php echo site_url('#') ?>"><i class="fa fa-circle-o"></i> List nilai</a></li>
          </ul>
        </li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>