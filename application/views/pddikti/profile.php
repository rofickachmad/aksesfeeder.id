	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php 
				if(!empty($data)): 
					$result=$data['result'];
					// $error=$result['error_code'];
					$result=json_decode($result);
					$_data=$result->data;
					$_error=$result->error_code;
					// print_r($_error);
					// print_r($data['result']->error_code);
					if($_error==0):

						foreach ($_data as $key => $value) {
							echo ($value->id_perguruan_tinggi);
							?>
					<table class="table table-condensed table-striped">
			    	<tbody><tr>
			        	<td class="left_column" width="20%">Kode PT </td>
			            <td>: 071025   </td>
			        </tr>
			        <tr>
			        	<td class="left_column">Nama PT</td>
			            <td>: Universitas Merdeka Malang</td>
			        </tr>
			        <tr>
			            <td class="left_column">Telepon</td>
			            <td>: 0341-568395</td>
			        </tr>
			        <tr>
			            <td class="left_column">Faximile</td>
			            <td>: 0341-564994</td>
			        </tr>
			        <tr>
			            <td class="left_column">Email</td>
			            <td>: webmaster@unmer.ac.id</td>
			        </tr>
			        <tr>
			            <td class="left_column">Website</td>
			            <td>: http://www.unmer.ac.id</td>
			        </tr>
			    </tbody></table>
    
							<?php
						} 
					endif;
				?>
			<?php else: ?>
				<h1 class="text-center">Data tidak tersedia</h1>
			<?php endif; ?>

			<div role="tabpanel">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active">
						<a href="#home" aria-controls="home" role="tab" data-toggle="tab">home</a>
					</li>
					<li role="presentation">
						<a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">tab</a>
					</li>
				</ul>
			
				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="home">...</div>
					<div role="tabpanel" class="tab-pane" id="tab">...</div>
				</div>
			</div>

		<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
			<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="false"><a href="#tabs-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1">Alamat</a></li>
			<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-2" aria-labelledby="ui-id-2" aria-selected="false"><a href="#tabs-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2">Informasi PT</a></li>
			<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-3" aria-labelledby="ui-id-3" aria-selected="false"><a href="#tabs-3" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-3">Akta Pendirian</a></li>
			<li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-4" aria-labelledby="ui-id-4" aria-selected="true"><a href="#tabs-4" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-4">Program Studi</a></li>
			<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-5" aria-labelledby="ui-id-5" aria-selected="false"><a href="#tabs-5" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-5">Periode Pelaporan Pengajuan</a></li>
		</ul>
        <div id="tabs-1" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">
        	<table class="table" width="90%">
                <tbody><tr>
                	<td class="left_column" width="20%">Jalan</td>
                    <td colspan="3">: Jl Terusan Raya Dieng No 62-64</td>
                </tr>
                <tr>
                	<td class="left_column">Dusun</td>
                    <td width="30%">: </td>
                	<td class="left_column" width="20%">RT/RW</td>
                    <td>: /</td>
                </tr>
                <tr>
                	<td class="left_column">Kelurahan</td>
                    <td>: -</td>
					<td class="left_column">Kodepos</td>
                    <td>: 65146</td>
                </tr>
                <tr>
                	<td class="left_column">Kecamatan</td>
                    <td colspan="3">: Kec. Sukun                    </td>
                </tr>
                <tr>
                	<td class="left_column">Lintang Bujur</td>
                    <td colspan="3">: -7.9725220 Bujur 112.6097040</td>
                </tr>
            </tbody></table>
        </div>
        <div id="tabs-2" aria-labelledby="ui-id-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" style="display: none;" aria-expanded="false" aria-hidden="true">
        	<table class="table" width="90%">
            	
                <tbody><tr>
                	<td class="left_column" width="20%">Bank</td>
                    <td>: </td>
                </tr>
                <tr>
                	<td class="left_column">Unit Cabang</td>
                    <td>: </td>
                </tr>
                <tr>
                	<td class="left_column">Nomor Rekening</td>
                    <td>: </td>
                </tr>
                <tr>
                	<td class="left_column">MBS</td>
                    <td>: 0</td>
                </tr>
                <tr>
                	<td class="left_column">Luas Tanah Milik</td>
                    <td>: 0</td>
                </tr>
                <tr>
                	<td class="left_column">Luas Tanah Bukan Milik</td>
                    <td>: 0</td>
                </tr>
            </tbody></table>
        </div>
        <div id="tabs-3" aria-labelledby="ui-id-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" style="display: none;" aria-expanded="false" aria-hidden="true">
        	<table class="table" width="90%">
            	<tbody><tr>
                	<td class="left_column" width="20%">No SK Pendirian</td>
                    <td>: 10/KPT/I/2018</td>
                </tr>
                <tr>
                	<td class="left_column">Tanggal SK Pendirian</td>
                    <td>: 04-01-2018</td>
                </tr>
            	<tr>
                	<td class="left_column">Status Kepemilikan</td>
                    <td>: Yayasan</td>
                </tr>
                <tr>
                	<td class="left_column">Status Perguruan Tinggi</td>
                    <td>: </td>
                </tr>
            	<tr>
                	<td class="left_column">SK Izin Operasional</td>
                    <td>: </td>
                </tr>
                <tr>
                	<td class="left_column">Tanggal Izin Operasional</td>
                    <td>: </td>
                </tr>
            </tbody></table>
        </div>
        <div id="tabs-4" aria-labelledby="ui-id-4" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" style="display: block;" aria-expanded="true" aria-hidden="false">
		
        </div>
		 <div id="tabs-5" aria-labelledby="ui-id-5" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" style="display: none;" aria-expanded="false" aria-hidden="true">
		<div class="form-container alert alert-info">
		<strong>Keterangan</strong>
        <br><br>
		1. Menampilkan periode yang di bukakan di luar periode aktif pada setiap program studi.
		<br>
		2. Periode perlaporan yang terbuka untuk prodi berstatus aktif, antara lain :
		<br> 
			&nbsp;&nbsp;&nbsp;- 2017/2018 Genap<br>&nbsp;&nbsp;&nbsp;- 2017/2018 Pendek<br>&nbsp;&nbsp;&nbsp;- 2018/2019 Ganjil<br>		3. Untuk pelaporan di luar periode aktif, Admin PT dapat melakukan pengajuan periode pelaporan pada laman forlap terlebih dahulu.
		</div>
		<div align="center">
        	<table class="table">
            	<tbody><tr>
                	<th style="text-align:center">Kode Program Studi</th>
                    <th style="text-align:center">Nama Program Studi</th>
                    <th style="text-align:center">Status</th>
                    <th style="text-align:center">Jenjang</th>
                    <th style="text-align:center">Periode Pelaporan</th>
                </tr>
                            </tbody></table>
			</div>
        </div>
    
		</div>
	</div>
