<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">

		<!-- Sidebar user panel (optional) -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?= base_url() ?>assets/dist/img/usersys-min.png" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p><?= $user->username ?></p>
				<small><?= $user->email ?></small>
			</div>
		</div>

		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">Menú Principal</li>
			<!-- Optionally, you can add icons to the links -->
			<?php
			$page = $this->uri->segment(1);
			$master = ["jurusan", "kelas", "matkul", "dosen", "mahasiswa"];
			$relasi = ["kelasdosen", "jurusanmatkul"];
			$users = ["users"];
			?>
			<li class="<?= $page === 'dashboard' ? "active" : "" ?>"><a href="<?= base_url('dashboard') ?>"><i class="fa fa-dashboard"></i> <span>Inicio</span></a></li>
			<?php if ($this->ion_auth->is_admin()) : ?>
				<li class="treeview <?= in_array($page, $master)  ? "active menu-open" : ""  ?>">
					<a href="#"><i class="fa fa-folder-open"></i> <span>Información General</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li class="<?= $page === 'jurusan' ? "active" : "" ?>">
							<a href="<?= base_url('jurusan') ?>">
								<i class="fa fa-bars"></i>
								Área
							</a>
						</li>
						<li class="<?= $page === 'kelas' ? "active" : "" ?>">
							<a href="<?= base_url('kelas') ?>">
								<i class="fa fa-bars"></i>
								Clase
							</a>
						</li>
						<li class="<?= $page === 'matkul' ? "active" : "" ?>">
							<a href="<?= base_url('matkul') ?>">
								<i class="fa fa-bars"></i>
								Curso
							</a>
						</li>
						<li class="<?= $page === 'dosen' ? "active" : "" ?>">
							<a href="<?= base_url('dosen') ?>">
								<i class="fa fa-bars"></i>
								Profesor
							</a>
						</li>
						<li class="<?= $page === 'mahasiswa' ? "active" : "" ?>">
							<a href="<?= base_url('mahasiswa') ?>">
								<i class="fa fa-bars"></i>
								Estudiante
							</a>
						</li>
					</ul>
				</li>
				<li class="treeview <?= in_array($page, $relasi)  ? "active menu-open" : ""  ?>">
					<a href="#"><i class="fa fa-link"></i> <span>Relación</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li class="<?= $page === 'kelasdosen' ? "active" : "" ?>">
							<a href="<?= base_url('kelasdosen') ?>">
								<i class="fa fa-bars"></i>
								Clase - Profesor
							</a>
						</li>
						<li class="<?= $page === 'jurusanmatkul' ? "active" : "" ?>">
							<a href="<?= base_url('jurusanmatkul') ?>">
								<i class="fa fa-bars"></i>
								Área - Curso
							</a>
						</li>
					</ul>
				</li>
			<?php endif; ?>
			<?php if ($this->ion_auth->is_admin() || $this->ion_auth->in_group('Lecturer')) : ?>
				<li class="<?= $page === 'soal' ? "active" : "" ?>">
					<a href="<?= base_url('soal') ?>" rel="noopener noreferrer">
						<i class="fa fa-file-text"></i> <span>Banco de Preguntas</span>
					</a>
				</li>
			<?php endif; ?>
			<?php if ($this->ion_auth->in_group('Lecturer')) : ?>
				<li class="<?= $page === 'ujian' ? "active" : "" ?>">
					<a href="<?= base_url('ujian/master') ?>" rel="noopener noreferrer">
						<i class="fa fa-pencil"></i> <span>Examen</span>
					</a>
				</li>
			<?php endif; ?>
			<?php if ($this->ion_auth->in_group('Student')) : ?>
				<li class="<?= $page === 'ujian' ? "active" : "" ?>">
					<a href="<?= base_url('ujian/list') ?>" rel="noopener noreferrer">
						<i class="fa fa-pencil"></i> <span>Examen</span>
					</a>
				</li>
			<?php endif; ?>
			<?php if (!$this->ion_auth->in_group('Student')) : ?>
				<li class="header">REPORTS</li>
				<li class="<?= $page === 'hasilujian' ? "active" : "" ?>">
					<a href="<?= base_url('hasilujian') ?>" rel="noopener noreferrer">
						<i class="fa fa-file"></i> <span>Resultados de Examen</span>
					</a>
				</li>
			<?php endif; ?>
			<?php if ($this->ion_auth->is_admin()) : ?>
				<li class="header">ADMINISTRATOR</li>
				<li class="<?= $page === 'users' ? "active" : "" ?>">
					<a href="<?= base_url('users') ?>" rel="noopener noreferrer">
						<i class="fa fa-users"></i> <span>Administración de Usuarios</span>
					</a>
				</li>
				<li class="<?= $page === 'settings' ? "active" : "" ?>">
					<a href="<?= base_url('settings') ?>" rel="noopener noreferrer">
						<i class="fa fa-cogs"></i> <span>Configuración</span>
					</a>
				</li>
			<?php endif; ?>
		</ul>

	</section>
	<!-- /.sidebar -->
</aside>