<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 class="text-center">Hello World</h1>

<table class="table table-hover" id="example" style="width:100%">
		<thead>
			<tr>
				<th>No</th>
				<th>id_aktivitas</th>
			    <th>jenis_anggota</th>
			    <th>nama_jenis_anggota</th>
			    <th>id_jenis_aktivitas</th>
			    <th>nama_jenis_aktivitas</th>
			<!--     <th>id_prodi</th>
			    <th>nama_prodi</th>
			    <th>id_semester</th>
			    <th>nama_semester</th>
			    <th>judul</th>
			    <th>keterangan</th>
			    <th>lokasi</th>
			    <th>sk_tugas</th>
			    <th>tanggal_sk_tugas</th> -->
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td>No</td>
				<td>id_aktivitas</td>
			    <td>jenis_anggota</td>
			    <td>nama_jenis_anggota</td>
			    <td>id_jenis_aktivitas</td>
			    <td>nama_jenis_aktivitas</td>
			  <!--   <td>id_prodi</td>
			    <td>nama_prodi</td>
			    <td>id_semester</td>
			    <td>nama_semester</td>
			    <td>judul</td>
			    <td>keterangan</td>
			    <td>lokasi</td>
			    <td>sk_tugas</td>
			    <td>tanggal_sk_tugas</td> -->
			</tr>
		</tfoot>
	</table>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    
		<!-- <script src="//code.jquery.com/jquery.js"></script> -->
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript">
    	
	
	$(document).ready(function() {
    $('#example').DataTable( {
        // "processing": true,
        // "serverSide": true,
        "ajax":{
        	 "draw": 1,
  "recordsTotal": 57,
  "recordsFiltered": 57,
  "data": [
    [
      "Tiger Nixon",
      "System Architect",
      "Edinburgh",
      "5421",
      "2011/04/25",
      "$320,800"
    ],
    [
      "Garrett Winters",
      "Accountant",
      "Tokyo",
      "8422",
      "2011/07/25",
      "$170,750"
    ],
    [
      "Ashton Cox",
      "Junior Technical Author",
      "San Francisco",
      "1562",
      "2009/01/12",
      "$86,000"
    ],
    [
      "Cedric Kelly",
      "Senior Javascript Developer",
      "Edinburgh",
      "6224",
      "2012/03/29",
      "$433,060"
    ],
    [
      "Airi Satou",
      "Accountant",
      "Tokyo",
      "5407",
      "2008/11/28",
      "$162,700"
    ],

 
  ]
}
        // "ajax":{"data":[{"id_aktivitas":"b1ea049e-3423-49be-8466-4266ae7c59b1","jenis_anggota":"1","nama_jenis_anggota":"Kelompok","id_jenis_aktivitas":"5","nama_jenis_aktivitas":"Kuliah kerja nyata","id_prodi":"ae57e8ff-6ca3-4e2f-8dfd-4e31c32d3d96","nama_prodi":"S1 Ilmu Administrasi Niaga","id_semester":"20162","nama_semester":"2016\/2017 Genap","judul":"USAHA MIKRO KEMASYARAKATAN DAN PENDIDIKAN","keterangan":null,"lokasi":"Kecamatan Jenggawah","sk_tugas":"41\/STIA.P.JBR\/S.4\/II\/2017","tanggal_sk_tugas":"2017-02-20"},{"id_aktivitas":"bd5aa216-11f9-457e-840a-770c8a2415a8","jenis_anggota":"1","nama_jenis_anggota":"Kelompok","id_jenis_aktivitas":"5","nama_jenis_aktivitas":"Kuliah kerja nyata","id_prodi":"0ce96b29-3b0d-4482-8f50-a2c3af106276","nama_prodi":"S1 Pendidikan Bahasa Inggris","id_semester":"20171","nama_semester":"2017\/2018 Ganjil","judul":"Kuliah Kerja Nyata di Kecamatan Sengah Temila","keterangan":"2017-1","lokasi":"Sengah Temila","sk_tugas":"069\/Ket.STKIP Pata\/dpl-ppl.kkn\/vii\/2017","tanggal_sk_tugas":"2017-07-20"},{"id_aktivitas":"093296cd-6121-4386-afc0-e141b48c2051","jenis_anggota":"1","nama_jenis_anggota":"Kelompok","id_jenis_aktivitas":"5","nama_jenis_aktivitas":"Kuliah kerja nyata","id_prodi":"49e32bb3-11b8-48f7-bc65-0241b8573fe6","nama_prodi":"S1 Pendidikan Matematika","id_semester":"20171","nama_semester":"2017\/2018 Ganjil","judul":"Kuliah Kerja Nyata di Kecamatan Sengah Temila","keterangan":"2017-1","lokasi":"Sengah Temila","sk_tugas":"069\/Ket.STKIP Pata\/dpl-ppl.kkn\/vii\/2017","tanggal_sk_tugas":"2017-07-20"},{"id_aktivitas":"c01a75fc-a8cd-42e1-b981-5377b5513144","jenis_anggota":"1","nama_jenis_anggota":"Kelompok","id_jenis_aktivitas":"5","nama_jenis_aktivitas":"Kuliah kerja nyata","id_prodi":"de3a9bbc-91c0-4491-ad21-b34bc4e3d0b8","nama_prodi":"S1 Pendidikan Jasmani, Kesehatan & Rekreasi","id_semester":"20171","nama_semester":"2017\/2018 Ganjil","judul":"Kuliah Kerja Nyata di Kecamatan Sengah Temila","keterangan":"2017-1","lokasi":"Sengah Temila","sk_tugas":"069\/Ket.STKIP Pata\/dpl-ppl.kkn\/vii\/2017","tanggal_sk_tugas":"2017-07-20"},{"id_aktivitas":"bb5471e8-2851-4d39-9dc1-707c41183b52","jenis_anggota":"1","nama_jenis_anggota":"Kelompok","id_jenis_aktivitas":"6","nama_jenis_aktivitas":"Kerja praktek\/PKL","id_prodi":"0ce96b29-3b0d-4482-8f50-a2c3af106276","nama_prodi":"S1 Pendidikan Bahasa Inggris","id_semester":"20171","nama_semester":"2017\/2018 Ganjil","judul":"PPL-2","keterangan":"2017-1","lokasi":"Sengah Temila","sk_tugas":"069\/Ket.STKIP Pata\/dpl-ppl.kkn\/vii\/2017","tanggal_sk_tugas":"2017-07-20"},{"id_aktivitas":"4fdaf091-a7d7-4b62-8f67-85942858b78c","jenis_anggota":"0","nama_jenis_anggota":"Personal","id_jenis_aktivitas":"6","nama_jenis_aktivitas":"Kerja praktek\/PKL","id_prodi":"49e32bb3-11b8-48f7-bc65-0241b8573fe6","nama_prodi":"S1 Pendidikan Matematika","id_semester":"20171","nama_semester":"2017\/2018 Ganjil","judul":"PPL-2","keterangan":"2017-1","lokasi":"Sengah Temila","sk_tugas":"069\/Ket.STKIP Pata\/dpl-ppl.kkn\/vii\/2017","tanggal_sk_tugas":"2017-07-20"},{"id_aktivitas":"bd85475f-a1b0-4e38-8dd3-b423abf181a3","jenis_anggota":"0","nama_jenis_anggota":"Personal","id_jenis_aktivitas":"2","nama_jenis_aktivitas":"Tugas akhir","id_prodi":"de3a9bbc-91c0-4491-ad21-b34bc4e3d0b8","nama_prodi":"S1 Pendidikan Jasmani, Kesehatan & Rekreasi","id_semester":"20171","nama_semester":"2017\/2018 Ganjil","judul":"SKRIPSI","keterangan":"2017-1","lokasi":null,"sk_tugas":"082\/Ket.STKIP PaTa\/PSM\/IX\/2017","tanggal_sk_tugas":"2017-09-14"},{"id_aktivitas":"9eb2e542-5bec-4d9c-8456-318538e9e6e3","jenis_anggota":"0","nama_jenis_anggota":"Personal","id_jenis_aktivitas":"2","nama_jenis_aktivitas":"Tugas akhir","id_prodi":"0ce96b29-3b0d-4482-8f50-a2c3af106276","nama_prodi":"S1 Pendidikan Bahasa Inggris","id_semester":"20171","nama_semester":"2017\/2018 Ganjil","judul":"SKRIPSI","keterangan":"2017-1","lokasi":null,"sk_tugas":"081\/Ket.STKIP PaTa\/PSM\/IX\/2017","tanggal_sk_tugas":"2017-09-14"},{"id_aktivitas":"f02365db-9f82-424c-a1ff-2b398f1bf69e","jenis_anggota":"0","nama_jenis_anggota":"Personal","id_jenis_aktivitas":"2","nama_jenis_aktivitas":"Tugas akhir","id_prodi":"49e32bb3-11b8-48f7-bc65-0241b8573fe6","nama_prodi":"S1 Pendidikan Matematika","id_semester":"20171","nama_semester":"2017\/2018 Ganjil","judul":"SKRIPSI","keterangan":"2017-1","lokasi":null,"sk_tugas":"083\/Ket.STKIP PaTa\/PSM\/IX\/2017","tanggal_sk_tugas":"2017-09-14"},{"id_aktivitas":"b54998ae-efa1-4ade-b926-4c05d353ccbb","jenis_anggota":"0","nama_jenis_anggota":"Personal","id_jenis_aktivitas":"2","nama_jenis_aktivitas":"Tugas akhir","id_prodi":"49e32bb3-11b8-48f7-bc65-0241b8573fe6","nama_prodi":"S1 Pendidikan Matematika","id_semester":"20171","nama_semester":"2017\/2018 Ganjil","judul":"SKRIPSI","keterangan":"2017-1","lokasi":null,"sk_tugas":"083\/Ket.STKIP PaTa\/PSM\/IX\/2017","tanggal_sk_tugas":"2017-09-14"}]},
        /*"columns": [
            {"data":"id_aktivitas"},
			    {"data":"jenis_anggota"},
			    {"data":"nama_jenis_anggota"},
			    {"data":"id_jenis_aktivitas"},
			    {"data":"nama_jenis_aktivitas"},
			    {"data":"id_prodi"},
			    {"data":"nama_prodi"},
			    {"data":"id_semester"},
			    {"data":"nama_semester"},
			    {"data":"judul"},
			    {"data":"keterangan"},
			    {"data":"lokasi"},
			    {"data":"sk_tugas"},
			    {"data":"tanggal_sk_tugas"}
           
        ]*/
        /*"ajax": {
            // "data": ,
            "dataType": "json"
        }*/
    } );
} );


</script>

	
	</body>
</html>