
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
    			<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/mahasiswa') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/mahasiswa/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="nim">nim*</label>
								<input class="form-control <?php echo form_error('nim') ? 'is-invalid':'' ?>"
								 type="text" name="nim" min="0" placeholder="nim" />
								<div class="invalid-feedback">
									<?php echo form_error('nim') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Nama*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="nama" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jekel">jekel*</label>
								<input class="form-control <?php echo form_error('jekel') ? 'is-invalid':'' ?>"
								 type="text" name="jekel" min="0" placeholder="jekel" />
								<div class="invalid-feedback">
									<?php echo form_error('jekel') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">keterangan*</label>
								<textarea class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>"
								 name="keterangan" placeholder="keterangan..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('keterangan') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>

    </section>

  	<aside class="control-sidebar control-sidebar-dark" style="display: none;">
    <!-- Create the tabs -->
  		<?php $this->load->view("admin/_part/navbar.php") ?>

  	</aside>
		</div>
		<!-- /#wrapper -->
				<?php $this->load->view("admin/_part/footer.php") ?>
		<?php $this->load->view("admin/_part/js.php") ?>

</body>

</html>
