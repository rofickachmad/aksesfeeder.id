<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		
<!-- <pre> -->
	<table class="table table-hover" id="example">
		<thead>
			<tr>
				<th>No</th>
				<th>id_aktivitas</th>
			    <th>jenis_anggota</th>
			    <th>nama_jenis_anggota</th>
			    <th>id_jenis_aktivitas</th>
			    <th>nama_jenis_aktivitas</th>
			    <th>id_prodi</th>
			    <th>nama_prodi</th>
			    <th>id_semester</th>
			    <th>nama_semester</th>
			    <th>judul</th>
			    <th>keterangan</th>
			    <th>lokasi</th>
			    <th>sk_tugas</th>
			    <th>tanggal_sk_tugas</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>No</td>
				<td>id_aktivitas</td>
			    <td>jenis_anggota</td>
			    <td>nama_jenis_anggota</td>
			    <td>id_jenis_aktivitas</td>
			    <td>nama_jenis_aktivitas</td>
			    <td>id_prodi</td>
			    <td>nama_prodi</td>
			    <td>id_semester</td>
			    <td>nama_semester</td>
			    <td>judul</td>
			    <td>keterangan</td>
			    <td>lokasi</td>
			    <td>sk_tugas</td>
			    <td>tanggal_sk_tugas</td>
			</tr>
				<?php 
				$datajson=$data['result'];
				// $datax=$datajson['data'];
				$result=(json_decode($datajson));
				$datax=json_encode($result->data);
				/*$result=json_decode($data['result']);
				$data=$result->data;
				$error=$result->error_code;
				$desc=$result->error_desc;
				if(!empty($data)){
					if($error==0){
						$i=1;
						foreach ($data as $key => $value) {?>
							
							<tr>
							<td><?=$i; ?></td>
							<td><?=$value->id_aktivitas; ?></td>
						    <td><?=$value->jenis_anggota; ?></td>
						    <td><?=$value->nama_jenis_anggota; ?></td>
						    <td><?=$value->id_jenis_aktivitas; ?></td>
						    <td><?=$value->nama_jenis_aktivitas; ?></td>
						    <td><?=$value->id_prodi; ?></td>
						    <td><?=$value->nama_prodi; ?></td>
						    <td><?=$value->id_semester; ?></td>
						    <td><?=$value->nama_semester; ?></td>
						    <td><?=$value->judul; ?></td>
						    <td><?=$value->keterangan; ?></td>
						    <td><?=$value->lokasi; ?></td>
						    <td><?=$value->sk_tugas; ?></td>
						    <td><?=$value->tanggal_sk_tugas; ?></td>
							</tr>
							<?php
							$i++;
						}
					}
				}*/
//print_r($result); ?>
<!-- </pre> -->
	
		</tbody>
	</table>
	<pre>
		<?php //print_r(json_encode($data)) ?>

	</pre>
	</div>
</div>

<script type="text/javascript">
	

</script>
	