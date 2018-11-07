<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> -->

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>
    <h1 class="text-center">Mapping Mahasiswa</h1>
    <div class="container">
        <div class="row">
        	
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"><h3>SIAKAD UNMER</h3>
                <table id="example" class="display table table-striped table-condensed" style="width:100%">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>NAMA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $key => $value) {
				      		echo "<tr>";
				      		echo "<td>".$value['nim']."</td>";
				      		echo "<td>".$value['nama']."</td>";
				      		echo "</tr>";
				      		# code...
				      	} ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>NIM</th>
                            <th>NAMA</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="padding-top: 20%;">
            	<!-- <div class="btn-group"> -->
            		<button type="button" class="btn btn-default btn-success btn-block"><< Left</button>
            		<button type="button" class="btn btn-default btn-warning btn-block">Middle</button>
            		<button type="button" class="btn btn-default btn-primary btn-block">Right >></button>
            	<!-- </div> -->
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            	<h3>FEEDER PDDIKTI</h3>
                <table id="examplex" class="display table table-striped table-condensed" style="width:100%">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>NAMA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $key => $value) {
				      		echo "<tr>";
				      		echo "<td>".$value['nim']."</td>";
				      		echo "<td>".$value['nama']."</td>";
				      		echo "</tr>";
				      		# code...
				      	} ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>NIM</th>
                            <th>NAMA</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <!-- https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>

    <!-- <script src="//code.jquery.com/jquery.js"></script> -->
    <!-- Bootstrap JavaScript -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->
    <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable({});
        $('#examplex').DataTable({});
    });
    </script>
</body>

</html>