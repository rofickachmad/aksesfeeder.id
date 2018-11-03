<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">...</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url() ?>">AKSESFEEDER</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				
				<li><a href="<?php echo base_url('profile') ?>">Profil</a></li>
				<li><a href="#">Mahasiswa</a></li>
				<li class="dropmhs">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dosen<b class="caret"></b></a>
					<ul class="dropdown-menu">

                                    <li><a href="ptk">Dosen</a></li>
                                    <li><a href="ptktugas">Penugasan Dosen</a></li>
                                
					</ul>
				</li>
				<li class="dropmhs">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Perkuliahan<b class="caret"></b></a>

					<ul class="dropdown-menu">
					
						<li><a href="matakuliah">Mata Kuliah</a></li>
						<li><a href="kurikulumsp">Kurikulum</a></li>
						<li><a href="kelaskuliah">Kelas Perkuliahan</a></li>
						<li><a href="inputnilai">Nilai Perkuliahan</a></li>
						<li><a href="kuliahmhs">Aktivitas Kuliah Mahasiswa</a></li>
						<li><a href="hitungakm">Hitung Aktivitas Perkuliahan Mahasiswa</a></li>
						<li><a href="mhslulus">Daftar Mahasiswa Lulus / Drop Out</a></li>
						<li><a href="aktmhs">Aktivitas Mahasiswa</a></li>
                                
					</ul>
				</li>
				<li class="dropmhs">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pelengkap<b class="caret"></b></a>

					<ul class="dropdown-menu">
					
						
                                    <li><a href=bobotnilai">Skala Nilai</a></li>
                                    <li><a href=dayatampung">Setting Periode Perkuliahan</a></li>
                                
					</ul>
				</li>
				<li class="dropmhs">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Rekapitulasi<b class="caret"></b></a>

					<ul class="dropdown-menu">
					
                                    <li>
										<a href=laporan/rekapparam">Rekap Pelaporan</a>
									</li>
                                    <li>
										<a href=laporan/jmldosenparam">Jumlah Dosen</a>
									</li>  
                                    <li>
										<a href=laporan/jmlmhsparam">Jumlah Mahasiswa</a>
									</li>                                 
									<li>
										<a href=laporan/ipsmhsparam">Rekap IPS Mahasiswa</a>
									</li>
									<li>
										<a href=laporan/krsmhsparam">KRS Mahasiswa</a>
									</li>
									<li>
										<a href=laporan/khsmhsparam">KHS Mahasiswa</a>
									</li>  
									<li>
										<a href=laporan/statusmhsparam">Laporan Status Mahasiswa</a>
									</li>              
							
                                
                                
					</ul>
				</li>
				<li class="dropmhs">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Export Data <b class="caret"></b></a>

					<ul class="dropdown-menu">
                                        <li><a href=laporan/exportmhsparam">Mahasiswa</a></li>
                                        <li><a href=laporan/exportnilaitransferparam">Nilai Transfer</a></li>
                                        <li><a href=laporan/exportpenugasanparam">Penugasan Dosen</a></li>
                                        <li><a href=laporan/exportmatkulparam">Matakuliah</a></li>
                                        <li><a href=laporan/exportjadwalparam">Kelas Perkuliahan</a></li>
                                        <li><a href=laporan/exportkrsparam">KRS Mahasiswa</a></li>
                                        <li><a href=laporan/exportaktajarparam">Aktivitas Mengajar Dosen</a></li>
                                        <li><a href=laporan/lapipsmhsparam">Aktivitas Kuliah</a></li>
                                        <li><a href=laporan/exportmhslulusparam">Mahasiswa Lulus/ D.O</a></li>
                                  
					</ul>
				</li>
			</ul>
		
			<form class="navbar-form navbar-right" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>