
<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view("admin/_part/head.php") ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <?php $this->load->view("admin/_part/header.php") ?>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <?php $this->load->view("admin/_part/sidebar.php") ?>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <?php $this->load->view("admin/_part/breadcrumb.php") ?>
    </section>
    <section class="content">
    					<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/mahasiswa/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>NIM</th>
										<th>Nama</th>
										<th>Jekel</th>
										<th>Photo</th>
										<th>Keterangan</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($mahasiswa as $mahasiswa): ?>
									<tr>
										<td>
											<?php echo $mahasiswa->nim ?>
										</td>
										<td width="150">
											<?php echo $mahasiswa->nama ?>
										</td>
										<td>
											<?php echo $mahasiswa->jekel ?>
										</td>
										<td>
											<img src="<?php echo base_url('upload/mahasiswa/'.$mahasiswa->image) ?>" width="64" />
										</td>
										<td class="small">
											<?php echo substr($mahasiswa->keterangan, 0, 120) ?>...</td>
										<td width="250">
											<a href="<?php echo site_url('admin/mahasiswa/edit/'.$mahasiswa->nim) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/mahasiswa/delete/'.$mahasiswa->nim) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			<!-- /.container-fluid -->

    </section>


  	<aside class="control-sidebar control-sidebar-dark" style="display: none;">
    <!-- Create the tabs -->
  		<?php $this->load->view("admin/_part/navbar.php") ?>

  	</aside>
		</div>
		<!-- /#wrapper -->
				<?php $this->load->view("admin/_part/footer.php") ?>
		<?php $this->load->view("admin/_part/modal.php") ?>
		<?php $this->load->view("admin/_part/js.php") ?>


	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>
