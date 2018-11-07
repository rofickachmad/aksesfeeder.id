<!DOCTYPE html>
<html>
    <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Datatable Serverside Codeigniter</title>
    <!-- <link href="<?php //echo base_url('assets/datatables/css/jquery.dataTables.min.css')?>" rel="stylesheet"> -->

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
 
    </head> 
<body>
    <div class="container">
        <h1 style="font-size:20pt">Datatable Serverside Codeigniter</h1>
 
        <h3>Data Users</h3>
        <br />
        
        <table id="table" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    
                </tr>
            </thead>
            <tbody>
            </tbody>
 
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    
                </tr>
            </tfoot>
        </table>
    </div>
 
<!-- <script src="<?php //echo base_url('assets/jquery/jquery-2.2.3.min.js')?>"></script>
<script src="<?php// echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
  -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
 
<script type="text/javascript">
    var table;
    $(document).ready(function() {
 
        //datatables
        table = $('#table').DataTable({ 
 
            "processing": true, 
            "serverSide": true, 
            "order": [], 
             
            "ajax": {
                "url": "<?php echo site_url('sqlserver/getdatatables')?>",
                "type": "POST"
            },
 
             
            "columnDefs": [
            { 
                "targets": [ 0 ], 
                "orderable": false, 
            },
            ],
 
        });
 
    });
 
</script>
 
</body>
</html>